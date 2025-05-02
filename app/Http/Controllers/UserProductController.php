<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan ini di bagian atas
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;
use App\Models\FurnitureSet;
use App\Models\Product;
use App\Models\OrderProduct;
use App\Models\Image;
use App\Models\Order;


class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('user.produk',compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('detailProduk',compact('product'));
    }


    public function showInvoice($id)
    {
        $order = Order::with('orderProducts.product')->findOrFail($id);
        
        $user  = auth()->user();

        // Pastikan data ditemukan
        if (!$order) {
            abort(404, 'Order tidak ditemukan');
        }

        // Ambil item pertama (atau bisa perulangan untuk beberapa produk)
        $item = $order->orderProducts->first();
        if (!$item) {
            abort(404, 'Tidak ada produk di order ini.');
        }

        // Tentukan apakah ini produk tunggal atau furniture set
        if ($item->product) {
            $product = $item->product;
        } elseif ($item->furnitureSet) {
            $product = $item->furnitureSet;
        } else {
            abort(404, 'Produk tidak ditemukan.');
        }

        $quantity   = $item->quantity;
        $totalHarga = $order->total_harga;

        return view('user.invoiceCustomer', compact('order', 'user', 'product', 'quantity', 'totalHarga'));
    }





    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }   

   
    public function destroy(string $id)
    {
        //
    }

    public function invoice(Request $request)
    {
        $user     = Auth::user();
        $quantity = $request->input('quantity');

        if ($request->filled('set_id')) {
            // Load furniture set
            $product = FurnitureSet::with('images')->findOrFail($request->set_id);
        } else {
            // Load produk biasa
            $product = Product::findOrFail($request->product_id);
        }

        return view('user.invoiceCustomer', compact('product', 'quantity', 'user'));
    }

    public function bayarInvoice(Request $request)
    {
        $user              = auth()->user();
        $qty               = $request->input('quantity');
        $tenggat_pembayaran = $request->input('tenggat_pembayaran');

        // Tentukan prefix berdasarkan apakah beli furniture set atau produk
        $prefix = $request->filled('set_id') ? 'SET-' : 'PROD-';

        // 1) Buat order tanpa total_harga dulu
        $order = Order::create([
            'user_id'           => $user->id,
            'order_code'        => $prefix . strtoupper(uniqid()),
            'total_harga'       => 0,                          // **CHANGED**
            'status'            => 'waiting_confirmation',
            'payment_status'    => 'pending',
            'alamat_pengiriman' => $user->address,
            'maximal_pembayaran'=> $tenggat_pembayaran,
        ]);

        if ($request->filled('set_id')) {
            // **CHANGED**: proses furniture set
            $set = FurnitureSet::with('products')->findOrFail($request->set_id);

            foreach ($set->products as $prod) {
                OrderProduct::create([
                    'order_id'   => $order->id,
                    'product_id' => $prod->id,
                    'quantity'   => $qty,
                    'price'      => $prod->harga,
                    'subtotal'   => $prod->harga * $qty,
                ]);
                $prod->decrement('stok', $qty);
            }

            // **CHANGED**: update total_harga sesuai harga set
            $order->update(['total_harga' => $set->harga * $qty]);

            return view('user.upload_bukti', [
                'order'   => $order,
                'product' => $set,       // **CHANGED**: passing furniture set
                'tenggat' => \Carbon\Carbon::parse($tenggat_pembayaran)->format('d M Y, H:i'),
            ]);
        }

        // original: pembelian produk tunggal
        $prod     = Product::findOrFail($request->product_id);
        $subtotal = $prod->harga * $qty;

        OrderProduct::create([
            'order_id'   => $order->id,
            'product_id' => $prod->id,
            'quantity'   => $qty,
            'price'      => $prod->harga,
            'subtotal'   => $subtotal,
        ]);
        $prod->decrement('stok', $qty);

        // **CHANGED**: update total_harga setelah create OrderProduct
        $order->update(['total_harga' => $subtotal]);

        return view('user.upload_bukti', [
            'order'   => $order,
            'product' => $prod,
            'tenggat' => \Carbon\Carbon::parse($tenggat_pembayaran)->format('d M Y, H:i'),
        ]);
    }


    
    public function uploadBukti(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'bukti_pembayaran' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $order = Order::findOrFail($request->order_id);

        // Simpan file ke storage/app/public/bukti_pembayaran
        $path = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');

        // Simpan path-nya ke database (asumsinya ada kolom 'payment_proof' di tabel orders)
        $order->payment_proof = $path;
        $order->payment_status = 'waiting_verification';
        $order->save();

        return redirect()->route('user.home')->with('success', 'Bukti pembayaran berhasil diupload.');
    }
    
    public function statusPembayaran()
    {
        $user = auth()->user();
        $orders = Order::where('user_id', $user->id)
                    ->latest()
                    ->get();

        return view('user.statusPembayaran', compact('orders'));
    }

}
// Mail::to($user->email)->send(new InvoiceMail($order, $product, $quantity));