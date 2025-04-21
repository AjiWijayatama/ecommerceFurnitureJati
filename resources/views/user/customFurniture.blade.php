@extends('layouts.user')

@section('content')
{{-- Awal Content --}}
<section class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-4 section left d-flex flex-column justify-content-center align-items-start">
            <h3 class="fw-bold text-uppercase" style="font-size: 30px; font-style: italic">Langkah-Langkah</h3>
            <h1 class="fw-bold" style="font-size: 50px;font-style: italic">Pemesanan</h1>
            <p style="font-size: 30px;font-style: italic">Furniture Custom</p>
        </div>
        <div class="col-md-6 section right d-flex flex-column justify-content-center align-items-start">
            <!-- Daftar Langkah Pemesanan -->
            <ol class="custom-ordered-list py-3">
                <li><strong>Konsultasi dengan Profesional Kami</strong><br>Kami akan membantu Anda merencanakan dan memilih desain yang tepat sesuai kebutuhan Anda.</li>
                <li><strong>Kirim Desain dan Gambar</strong><br>Setelah konsultasi, kami akan mengirimkan desain dan gambar yang sudah kami sesuaikan dengan kebutuhan dan keinginan Anda</li>
                <li><strong>Pembayaran</strong><br>Lakukan pembayaran terlebih dahulu untuk memulai proses produksi.</li>
                <li><strong>Proses Produksi</strong><br>Setelah pembayaran diterima, kami akan memulai proses produksi.</li>                                                        
                <li><strong>Pengiriman ke Alamat Anda</strong><br>Setelah proses produksi selesai, kami akan segera mengirimkan furniture pesanan Anda ke alamat yang telah ditentukan.</li>
            </ol>
            <div class="">
                <button type="button" class="btn btn-danger px-1 py-1">
                    <a class="" href="" role="button">Pesan Custom Furniture</a> 
                </button>
            </div>      
        </div>
    </div>
</section>

<section class="container mt-4">
    <div class="text-center mt-5 py-2">
        <span class="text-white bg-dark rounded-pill shadow" style="
            font-size: 30px;
            font-style: italic;
            font-family: 'Georgia', serif;
            padding: 4px 10px;
            display: inline-block;
        ">
            GET INSPIRED
        </span>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

        {{-- Produk 1 --}}
        <div class="col">
            <div class="card h-100">
                <a href="#">
                    <img src="/icons/meja.jpg" class="card-img-top" alt="Desain Interior">
                </a>
                <div class="card shadow-sm rounded-4 border-0" style="max-width: 400px;">
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-primary mb-2">Meja Akar</h5>
                      
                      <p class="card-text text-dark mb-3">
                        <strong>Deskripsi:</strong><br>
                        Ukuran ruangan: 100 x 100 cm<br>
                        Ukuran meja: 75 x 75 cm<br>
                        Ukuran meja menyesuaikan bentuk ruangan.
                      </p>
                  
                      <div class="text-muted small fst-italic border-top pt-2">
                        Sesuaikan Furniture dengan kebutuhan anda
                      </div>
                    </div>
                  </div>                  
            </div>
        </div>

        {{-- Produk 2 --}}
        <div class="col">
            <div class="card h-100">
                <a href="#">
                    <img src="/icons/meja.jpg" class="card-img-top" alt="Desain Interior">
                </a>
                <div class="card shadow-sm rounded-4 border-0" style="max-width: 400px;">
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-primary mb-2">Lemari Gajah</h5>
                      
                      <p class="card-text text-dark mb-3">
                        <strong>Deskripsi:</strong><br>
                        Ukuran ruangan: 100 x 100 cm<br>
                        Ukuran meja: 75 x 75 cm<br>
                        Ukuran meja menyesuaikan bentuk ruangan.
                      </p>
                  
                      <div class="text-muted small fst-italic border-top pt-2">
                        Sesuaikan Furniture dengan kebutuhan anda
                      </div>
                    </div>
                  </div>                  
            </div>
        </div>

        {{-- Produk 3 --}}
        <div class="col">
            <div class="card h-100">
                <a href="#">
                    <img src="/icons/meja.jpg" class="card-img-top" alt="Desain Interior">
                </a>
                <div class="card shadow-sm rounded-4 border-0" style="max-width: 400px;">
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-primary mb-2">Meja Akar</h5>
                      
                      <p class="card-text text-dark mb-3">
                        <strong>Deskripsi:</strong><br>
                        Ukuran ruangan: 100 x 100 cm<br>
                        Ukuran meja: 75 x 75 cm<br>
                        Ukuran meja menyesuaikan bentuk ruangan.
                      </p>
                  
                      <div class="text-muted small fst-italic border-top pt-2">
                        Sesuaikan Furniture dengan kebutuhan anda
                      </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Produk 4 --}}
        <div class="col">
            <div class="card h-100">
                <a href="#">
                    <img src="/icons/meja.jpg" class="card-img-top" alt="Desain Interior">
                </a>
                <div class="card shadow-sm rounded-4 border-0" style="max-width: 400px;">
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-primary mb-2">Kursi goyang akar</h5>
                      
                      <p class="card-text text-dark mb-3">
                        <strong>Deskripsi:</strong><br>
                        Ukuran ruangan: 100 x 100 cm<br>
                        Ukuran meja: 75 x 75 cm<br>
                        Ukuran meja menyesuaikan bentuk ruangan.
                      </p>
                  
                      <div class="text-muted small fst-italic border-top pt-2">
                        Sesuaikan Furniture dengan kebutuhan anda
                      </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation" class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">&laquo;</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="page2">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
            </li>
        </ul>
    </nav>
</section>
{{-- END Content --}}
@endsection
