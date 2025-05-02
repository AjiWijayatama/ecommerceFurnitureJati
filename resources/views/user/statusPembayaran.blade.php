@extends('layouts.user')

@section('content')
<section class="container py-5">
    <h2 class="text-center fw-bold mb-5" style="font-family: 'Playfair Display', serif; color: #4B3F2F;">
        Status Pembayaran Anda
    </h2>
    <div class="table-responsive shadow rounded-4">
        <table class="table table-bordered table-striped align-middle text-center mb-0">
            <thead class="table-dark" style="background-color: #4B3F2F;">
                <tr>
                    <th>Kode Invoice</th>
                    <th>Tanggal Order</th>
                    <th>Total</th>
                    <th>Status Pembayaran</th>
                    <th>Invoice</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                <tr>
                    <td><strong>#{{ $order->order_code }}</strong></td>
                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}</td>
                    <td>Rp{{ number_format($order->total_harga, 0, ',', '.') }}</td>
                    <td>
                        @php
                            $statusMap = [
                                'pending' => ['label' => 'Menunggu', 'badge' => 'warning'],
                                'paid' => ['label' => 'Diterima', 'badge' => 'success'],
                                'failed' => ['label' => 'Ditolak', 'badge' => 'danger'],
                            ];
                            $currentStatus = $statusMap[$order->payment_status] ?? ['label' => 'Tidak Diketahui', 'badge' => 'secondary'];
                        @endphp
                        <span class="badge bg-{{ $currentStatus['badge'] }} px-3 py-2">
                            {{ $currentStatus['label'] }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('invoice.show', $order->id) }}" 
                            class="btn btn-sm btn-outline-secondary">
                             Lihat
                         </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada pesanan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection

@section('css')
<style>
    body {
        background-color: #FAF7F0;
    }

    h2 {
        border-bottom: 2px dashed #CBB279;
        display: inline-block;
        padding-bottom: 5px;
    }

    .table th, .table td {
        vertical-align: middle;
    }

    .badge {
        font-size: 0.9rem;
        border-radius: 0.75rem;
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
@endsection
