<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan ini di bagian atas
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMail;
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function invoice()
    // {
    //     $products = Product::all();
    //     $user = Auth::user(); // Ambil data user yang sedang login

    //     return view('user.invoiceCustomer', compact('products', 'user'));
    // }
    public function invoice(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $quantity = $request->quantity;
        $user = Auth::user();
        return view('user.invoiceCustomer', compact('product', 'quantity', 'user'));
    }
    public function bayarInvoice(Request $request)
    {
        // Ambil user yang sedang login
        $user = auth()->user();

        // Ambil data dari form
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity'); // tambahkan ini
        $rekening_id = $request->input('rekening_id'); // kalau kamu butuh nanti
        $tenggat_pembayaran = $request->input('tenggat_pembayaran');

        // Ambil produk
        $product = Product::findOrFail($product_id);

        // Buat order baru
        $order = new Order();
        $order->user_id = $user->id;
        $order->order_code = 'INV-' . strtoupper(uniqid());
        $order->total_harga = $product->harga; // asumsinya 1 item. Kalau banyak, bisa dikalikan jumlah.
        $order->status = 'waiting_confirmation';
        $order->payment_status = 'pending';
        $order->alamat_pengiriman = $user->address;
        $order->maximal_pembayaran = $tenggat_pembayaran;
        $order->save();

        \App\Models\OrderProduct::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->harga,
            'subtotal' => $product->harga * $quantity,
        ]);
        // Mail::to($user->email)->send(new InvoiceMail($order, $product, $quantity));

        

    
        // Kirim data ke view upload_bukti
        return view('user.upload_bukti', [
            'order' => $order,
            'product' => $product,
            'tenggat' => \Carbon\Carbon::parse($tenggat_pembayaran)->format('d M Y, H:i')
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
    

}
