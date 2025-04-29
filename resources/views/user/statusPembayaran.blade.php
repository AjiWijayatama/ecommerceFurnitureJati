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
                @foreach ([1,2,3] as $i)
                <tr>
                    <td><strong>#INV00{{ $i }}</strong></td>
                    <td>{{ now()->subDays($i*2)->format('d M Y') }}</td>
                    <td>Rp{{ number_format(1500000 + $i*500000, 0, ',', '.') }}</td>
                    <td>
                        @php
                            $status = ['Menunggu', 'Diterima', 'Ditolak'];
                            $badge = ['warning', 'success', 'danger'];
                        @endphp
                        <span class="badge bg-{{ $badge[$i % 3] }} px-3 py-2">
                            {{ $status[$i % 3] }}
                        </span>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Lihat</a>
                    </td>
                </tr>
                @endforeach
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
