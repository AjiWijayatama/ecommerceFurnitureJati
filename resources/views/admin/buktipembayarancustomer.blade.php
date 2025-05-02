@extends('layouts.admin')

@section('content')
<section class="container py-5">
    <h2 class="fw-bold mb-4 text-center" style="color: #2c3e50;">Status Pembayaran Customer</h2>

    {{-- Alert sukses / error --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive shadow-sm rounded bg-white p-4">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Nama Customer</th>
                    <th>Produk</th>
                    <th>Total</th>
                    <th>Payment Status</th>
                    <th>Status</th>
                    <th>Bukti Pembayaran</th>
                    <th>Maximal Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr class="text-center">
                        <td>{{ $order->user->name }}</td>
                        <td>
                            @php
                            $hasItems = $order->orderProducts->isNotEmpty();
                            @endphp
                            @if(\Illuminate\Support\Str::startsWith($order->order_code, 'SET-'))
                                @php
                                    $firstProd = $order->orderProducts->first()->product;
                                    // Gunakan relasi furnitureSet (singular) sesuai model
                                    $setName   = $firstProd->furnitureSet->name ?? 'Nama Set Tidak Diketahui';
                                    $qty       = $order->orderProducts->first()->quantity;
                                @endphp
                                {{ $setName }} (×{{ $qty }})
                            @else
                                <ul class="list-unstyled mb-0">
                                    @foreach ($order->orderProducts as $item)
                                        <li>{{ $item->product->name ?? 'Produk tidak ditemukan' }} (×{{ $item->quantity }})</li>
                                    @endforeach
                                </ul>
                            @endif
                        </td>
                        {{-- Hitung ulang total harga berdasarkan price * quantity --}}
                        <td>
                            Rp {{ number_format($order->total_harga, 0, ',', '.') }}
                        </td>
            
                        {{-- Payment Status --}}
                        <td>
                            <span class="badge bg-{{ 
                                $order->payment_status === 'paid' ? 'success' : 
                                ($order->payment_status === 'failed' ? 'danger' : 'warning') }}">
                                {{ ucfirst(str_replace('_', ' ', $order->payment_status)) }}
                            </span>
                        </td>
            
                        {{-- Status --}}
                        <td>
                            <span class="badge bg-{{ 
                                $order->status === 'waiting_confirmation' ? 'warning' :
                                ($order->status === 'processing' ? 'primary' :
                                ($order->status === 'completed' ? 'success' : 'secondary')) }}">
                                {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                            </span>
                        </td>
            
                        {{-- Bukti Pembayaran --}}
                        <td>
                            @if ($order->payment_proof)
                                <a href="{{ asset('storage/' . $order->payment_proof) }}" target="_blank">
                                    <img src="{{ asset('storage/' . $order->payment_proof) }}" class="img-thumbnail rounded shadow-sm" width="80" alt="Bukti Bayar">
                                </a>
                            @else
                                <small class="text-muted">Belum Upload</small>
                            @endif
                        </td>
            
                        <td>{{ \Carbon\Carbon::parse($order->maximal_pembayaran)->format('d M Y H:i') }}</td>
            
                        {{-- Aksi --}}
                        <td>
                            @if ($order->payment_status === 'pending' || $order->payment_status === 'waiting_verification')
                                <div class="d-flex justify-content-center gap-2">
                                    <form method="POST" action="{{ route('payment.verify', $order->id) }}">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm btn-outline-success">Verifikasi</button>
                                    </form>
                                    <form method="POST" action="{{ route('payment.reject', $order->id) }}">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Tolak</button>
                                    </form>
                                </div>
                            @else
                                <small class="text-muted">Sudah Diproses</small>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted">Tidak ada data pembayaran.</td>
                    </tr>
                @endforelse
            </tbody>
            
        </table>
    </div>
</section>
@endsection
