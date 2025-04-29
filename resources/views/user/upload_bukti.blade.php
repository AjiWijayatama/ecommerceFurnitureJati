@extends('layouts.user')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h3 class="fw-bold" style="color: #4B3F2F;">Upload Bukti Pembayaran</h3>
        <p class="text-muted">Pastikan Anda mengunggah bukti transfer sebelum batas waktu pembayaran.</p>
    </div>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5">
            <div class="mb-4">
                <div class="bg-light p-3 rounded mb-3 border-start border-4 border-warning">
                    <p class="mb-1">
                        <strong class="text-dark"><i class="bi bi-bank2 me-2"></i>Transfer Bank Mandiri</strong><br>
                        No. Rekening: <span class="text-muted">123456789</span>
                    </p>
                    <p class="mb-0 mt-2">
                        <strong class="text-dark"><i class="bi bi-bank2 me-2"></i>Transfer Bank BCA</strong><br>
                        No. Rekening: <span class="text-muted">123456789</span>
                    </p>
                </div>

                <hr>

                <p class="mb-1"><strong class="text-dark">Kode Invoice:</strong> {{ $order->order_code }}</p>
                <p class="mb-1"><strong class="text-dark">Total Pembayaran:</strong> Rp{{ number_format($order->total_harga, 0, ',', '.') }}</p>
                <p class="mb-0"><strong class="text-dark">Batas Waktu Pembayaran:</strong> {{ $tenggat }}</p>
            </div>

            <form action="{{ route('user.uploadBukti') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="order_id" value="{{ $order->id }}">

                <div class="mb-4">
                    <label for="bukti_pembayaran" class="form-label fw-semibold">Upload Bukti Pembayaran</label>
                    <input type="file" name="bukti_pembayaran" class="form-control border border-dark-subtle rounded-3" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-upload me-2"></i>Kirim Bukti
                    </button>
                    <a href="#" class="btn btn-outline-secondary px-4">
                        <i class="bi bi-receipt-cutoff me-2"></i>Lihat Invoice
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
