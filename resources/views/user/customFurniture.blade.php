@extends('layouts.user')

@section('content')
{{-- Awal Content --}}
<section class="container my-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <h3 class="fw-bold" style="font-size: 36px; font-family: 'Georgia', serif; color: #3a3a3a;">Langkah-Langkah Pemesanan Furniture Custom</h3>
            <p class="lead" style="font-size: 20px; color: #6c6c6c; font-family: 'Times New Roman', serif;">Ikuti langkah-langkah berikut untuk memesan furniture custom dengan desain klasik yang sesuai dengan kebutuhan dan selera Anda.</p>
        </div>
    </div>

    <!-- Langkah-langkah Pemesanan -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="step-card border p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
                <h4 class="step-title" style="font-family: 'Times New Roman', serif; color: #5d4037;">1. Konsultasi</h4>
                <p style="color: #5d4037;">Kami akan membantu Anda merencanakan dan memilih desain yang sesuai dengan kebutuhan Anda.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="step-card border p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
                <h4 class="step-title" style="font-family: 'Times New Roman', serif; color: #5d4037;">2. Kirim Desain</h4>
                <p style="color: #5d4037;">Setelah konsultasi, kirimkan desain dan gambar yang sudah kami sesuaikan dengan keinginan Anda.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="step-card border p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
                <h4 class="step-title" style="font-family: 'Times New Roman', serif; color: #5d4037;">3. Pembayaran</h4>
                <p style="color: #5d4037;">Lakukan pembayaran sesuai dengan yang disepakati untuk memulai proses produksi.</p>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="step-card border p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
                <h4 class="step-title" style="font-family: 'Times New Roman', serif; color: #5d4037;">4. Proses Produksi</h4>
                <p style="color: #5d4037;">Setelah pembayaran diterima, kami akan mulai memproduksi furniture pesanan Anda.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="step-card border p-4 rounded shadow-sm" style="background-color: #f9f9f9;">
                <h4 class="step-title" style="font-family: 'Times New Roman', serif; color: #5d4037;">5. Pengiriman</h4>
                <p style="color: #5d4037;">Setelah produksi selesai, kami akan segera mengirimkan produk ke alamat Anda.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <a href="{{ route('formcustom') }}" class="btn btn-dark px-4 py-2" style="font-size: 18px; font-family: 'Georgia', serif; text-transform: uppercase; border-radius: 30px;">Pesan Sekarang</a>
    </div>
</section>

{{-- Produk --}}
<section class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="fw-bold" style="font-size: 36px; font-family: 'Georgia', serif; color: #3a3a3a;">Inspirasikan Furniture Anda</h2>
            <p class="lead" style="font-size: 18px; color: #6c6c6c; font-family: 'Times New Roman', serif;">Pilih dari berbagai macam produk yang dapat disesuaikan dengan kebutuhan ruang Anda.</p>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mt-4">
        {{-- Produk 1 --}}
        <div class="col">
            <div class="card h-100 border-0 shadow-lg rounded-3">
                <a href="#">
                    <img src="/icons/meja.jpg" class="card-img-top rounded-3" alt="Desain Interior">
                </a>
                <div class="card-body" style="background-color: #fff; color: #5d4037;">
                    <h5 class="card-title fw-bold" style="font-family: 'Georgia', serif;">Meja Akar</h5>
                    <p class="card-text">Ukuran ruangan: 100 x 100 cm<br>Ukuran meja: 75 x 75 cm.</p>
                </div>
            </div>
        </div>

        {{-- Produk 2 --}}
        <div class="col">
            <div class="card h-100 border-0 shadow-lg rounded-3">
                <a href="#">
                    <img src="/icons/meja.jpg" class="card-img-top rounded-3" alt="Desain Interior">
                </a>
                <div class="card-body" style="background-color: #fff; color: #5d4037;">
                    <h5 class="card-title fw-bold" style="font-family: 'Georgia', serif;">Lemari Gajah</h5>
                    <p class="card-text">Ukuran ruangan: 100 x 100 cm<br>Ukuran lemari: 150 x 75 cm.</p>
                </div>
            </div>
        </div>

        {{-- Produk 3 --}}
        <div class="col">
            <div class="card h-100 border-0 shadow-lg rounded-3">
                <a href="#">
                    <img src="/icons/meja.jpg" class="card-img-top rounded-3" alt="Desain Interior">
                </a>
                <div class="card-body" style="background-color: #fff; color: #5d4037;">
                    <h5 class="card-title fw-bold" style="font-family: 'Georgia', serif;">Kursi Goyang</h5>
                    <p class="card-text">Ukuran ruangan: 75 x 75 cm<br>Kursi goyang yang nyaman.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Pagination --}}
<section class="container mt-5 text-center">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">&laquo;</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
            </li>
        </ul>
    </nav>
</section>
{{-- END Content --}}
@endsection
