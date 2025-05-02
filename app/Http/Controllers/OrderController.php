<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function showPaymentProofs()
    {
        $orders = Order::with(['user', 'orderProducts.product'])->get();

        return view('admin.buktipembayarancustomer', compact('orders'));
    }

    public function verify($id)
    {
        $order = Order::findOrFail($id);

        if (!in_array($order->payment_status, ['pending', 'waiting_verification'])) {
            return back()->with('error', 'Pembayaran sudah diproses sebelumnya.');
        }
        

        $order->update([
            'payment_status' => 'paid',
            'status' => 'completed',
        ]);

        return redirect()->route('payment.proofs')->with('success', 'Pembayaran berhasil diverifikasi.');
    }

    public function reject($id)
    {
        $order = Order::findOrFail($id);

        if (!in_array($order->payment_status, ['pending', 'waiting_verification'])) {
            return back()->with('error', 'Pembayaran sudah diproses sebelumnya.');
        }

         // Restore stok: untuk tiap product di order, kembalikan quantity
        foreach ($order->orderProducts as $item) {
            // pastikan produk masih ada
            if ($item->product) {
                $item->product->increment('stok', $item->quantity);
            }
        }

        $order->update([
            'payment_status' => 'failed',
            'status' => 'completed',
        ]);

        return redirect()->route('payment.proofs')->with('success', 'Pembayaran berhasil ditolak.');
    }
}
