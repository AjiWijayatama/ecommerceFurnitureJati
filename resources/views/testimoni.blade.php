@extends('layouts.user')

@section('content')
<section class="container py-5">
    <h2 class="text-center fw-bold mb-5" style="font-family: 'Playfair Display', serif; color: #4B3F2F;">
        Testimoni Pelanggan
    </h2>

    <div class="row g-4">
        @foreach ([1,2,3,4,5,6] as $i)
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm border-0 h-100 rounded-4">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex align-items-center mb-3">
                       
                        <div>
                            <h6 class="mb-0 fw-semibold text-dark">Pelanggan {{ $i }}</h6>
                            <small class="text-muted">{{ now()->subDays($i * 3)->format('d M Y') }}</small>
                        </div>
                    </div>
                    <p class="text-muted fst-italic flex-grow-1">
                        “Saya sangat puas dengan layanan dan kualitas furniturnya. Produk yang dikirim sesuai dengan yang diharapkan.”
                    </p>


                    {{-- Contoh gambar untuk Pelanggan 1 --}}
                    @if ($i == 1)
                    <div class="text-center mt-3">
                        <img src="{{ asset('icons/meja.jpg') }}" alt="Foto Testimoni" class="img-fluid rounded shadow-sm" style="max-height: 200px; object-fit: cover;">
                    </div>
                    @endif

                    {{-- Gambar testimoni jika ada --}}
                    <div class="text-center mt-3">
                        <img src="/icons/meja.jpg{{ $i }}" alt="Foto Testimoni" class="img-fluid rounded shadow-sm" style="max-height: 200px; object-fit: cover;">
                    </div>
                </div>

                <div class="card-footer bg-white border-0 text-end">
                    <span class="badge bg-warning text-dark px-3 py-2">★ {{ rand(4,5) }}/5</span>
                </div>
            </div>
        </div>
        @endforeach
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

    .card {
        background-color: #FFFFFF;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .badge {
        font-size: 0.85rem;
        border-radius: 20px;
    }

    .img-fluid {
        border-radius: 0.75rem;
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
@endsection
