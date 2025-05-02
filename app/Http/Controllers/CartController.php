<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CartController extends Controller
{
    public function index()
    {
        $order = Order::where('user_id', Auth::id())
                    ->whereNull('order_code') // hanya ambil yang keranjang
                    ->with('orderProducts.product')
                    ->first();

        return view('user.keranjang', compact('order'));
    }

    public function add(Request $request, $productId)
    {   
        $product = Product::findOrFail($productId);

        // Cari order keranjang user yg belum checkout (order_code NULL)
        $order = Order::where('user_id', Auth::id())
                    ->whereNull('order_code')
                    ->first();

        if (!$order) {
            $order = Order::create([
                'user_id' => Auth::id(),
                'total_harga' => 0,
                'status' => 'waiting_confirmation', // Sesuaikan status default
                'payment_status' => 'pending',
                'maximal_pembayaran' => Carbon::now()->addDays(1),
            ]);
        }

        $orderProduct = OrderProduct::where('order_id', $order->id)
                        ->where('product_id', $productId)
                        ->first();

        if ($orderProduct) {
            $orderProduct->quantity += 1;
            $orderProduct->subtotal = $orderProduct->quantity * $product->harga;
            $orderProduct->save();
        } else {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => 1,
                'price' => $product->harga,
                'subtotal' => $product->harga,
            ]);
        }

        $order->total_harga = $order->orderProducts()->sum('subtotal');
        $order->save();

        return redirect()->route('cart.index')->with('success', 'Produk ditambahkan ke keranjang!');
    }




    public function remove($orderProductId)
    {
        $orderProduct = OrderProduct::findOrFail($orderProductId);
        $order        = $orderProduct->order;

        // Hapus OrderProduct
        $orderProduct->delete();

        // Cek sisa OrderProduct
        $remainingItems = $order->orderProducts()->count();

        if ($remainingItems > 0) {
            // Masih ada item: update total_harga
            $order->total_harga = $order->orderProducts()->sum('subtotal');
            $order->save();
        } else {
            // Tidak ada item tersisa: hapus order sepenuhnya
            $order->delete();
        }

        return redirect()->back()->with('success', 'Produk dihapus dari keranjang.');
    }


    public function checkoutCart()
    {
        $user = Auth::user();

        // Ambil semua item dari cart user (anggap kamu punya relasi cart atau ambil data dari session/DB)
        $cartItems = session()->get('cart', []);

        if (empty($cartItems)) {
            return redirect()->back()->with('error', 'Keranjang kamu kosong.');
        }

        $products = Product::whereIn('id', array_keys($cartItems))->get();

        $totalHarga = 0;
        foreach ($products as $product) {
            $product->quantity = $cartItems[$product->id]['quantity'];
            $product->subtotal = $product->harga * $product->quantity;
            $totalHarga += $product->subtotal;
        }

        return view('user.invoiceCustomer', compact('products', 'totalHarga', 'user'));
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
        //
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
}
