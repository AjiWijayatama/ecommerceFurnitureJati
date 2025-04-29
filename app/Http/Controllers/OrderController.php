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

        if ($order->payment_status !== 'pending') {
            return back()->with('error', 'Pembayaran sudah diproses sebelumnya.');
        }

        $order->update([
            'payment_status' => 'failed',
            'status' => 'waiting_confirmation',
        ]);

        return redirect()->route('payment.proofs')->with('success', 'Pembayaran berhasil ditolak.');
    }
}
