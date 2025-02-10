<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />  
    <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])  
    <!-- Styles / Scripts -->
    <style>
        /* Styling untuk membuat daftar urut lebih rapih dan mengikuti lebar kontainer */
        .custom-ordered-list {
            list-style-type: decimal; /* Menampilkan angka urut */
            padding-left: 20px; /* Memberikan ruang kiri untuk angka */
            margin: 0; /* Menghilangkan margin default */
            font-size: 15px; /* Ukuran font */
        }
            
        .custom-ordered-list li {
            color: black;
            font-weight: 600;
        }
    </style>
        
</head>
<body>
    <div class="container-fluid">
         <!-- AWAL HEADER -->
         <header class="">

            <!-- AWAL Navbar Header -->
             <nav class="container-header-navbar-service">
                 <ul class="container-header-item">
                    <li class="navbar-item-service">
                        <a href="caraPesan">Cara Pesan</a>
                    </li>
                    <li class="navbar-item-service">
                        <a href="informasiToko">Informasi Toko</a>
                    </li>
                    <li class="navbar-item-service">
                        <a href="statusPengerjaan">Status Pengerjaan</a>
                    </li>
                 </ul>
                 <div class="navbar-item-contact">
                    <a href="kontak">Kontak</a>
                 </div>
             </nav>
            <!-- END Navbar Header -->


            <!-- Header Column Search -->
            <div class="container-header-column-search my-2">
                <div class="container-logo-company">
                    <a href="" class="navbar-logo-company">
                        furnitureJatiInd
                    </a>
                </div>

               
                <form class="icon-searchbar">
                    <span class="search-icon material-symbols-outlined">search</span>
                    <input class="search-input" type="search" placeholder="Search">
                </form>

                <div class="">
                    <button type="button" class="btn btn-outline-danger">
                        <a class="" href="loginRegister" role="button">Tanya Harga</a> 
                    </button>
                    <button type="button" class="btn btn-outline-danger">
                        <a class="" href="loginRegister" role="button">Testimoni</a> 
                    </button>
                </div>      
            </div>
            <!-- END Header Column Search -->


            <!-- Header Categories -->
            <nav class="container-header-categories">
                <ul class="navbar-list-categories">

                    <li class="navbar-item-categories">
                        <a href="produk">Produk</a>
                    </li>

                    <li class="navbar-item-categories">
                        <a href="customFurniture">Custom Furniture</a>
                    </li>

                    <li class="navbar-item-categories">
                        <a href="furnitureSet">Furniture set</a>
                    </li>

                    <li class="navbar-item-categories">
                        <a href="perawatanFurniture">Perawatan Furniture</a>
                    </li>

                    <li class="navbar-item-categories">
                        <a href="testimoni">Testimoni</a>
                    </li>
                </ul>
            </nav>
            <!-- END Header Categories -->

         </header>
        <!-- END HEADER -->


        {{-- Awal Content --}}
        <section class="container my-4">
            <div class="row justify-content-center">
                <div class="col-md-4 section left d-flex flex-column justify-content-center align-items-start">
                    <h3 class="fw-bold text-uppercase" style="font-size: 30px; font-style: italic">Langkah-Langkah</h3>
                    <h1 class="fw-bold" style="font-size: 50px;font-style: italic">Pemesanan</h1>
                    <p style="font-size: 30px;font-style: italic">Perawatan Furniture</p>
                </div>
                <div class="col-md-6 section right d-flex flex-column justify-content-center align-items-start">
                    <!-- Daftar Langkah Pemesanan -->
                    <ol class="custom-ordered-list ">
                        <li><strong>Konsultasi dengan Profesional Kami</strong><br>Kami akan membantu Anda merencanakan dan memilih desain yang tepat sesuai kebutuhan Anda.</li>
                        
                        <li><strong>Kirim Desain dan Gambar</strong><br>Setelah konsultasi,kami akan mengirimkan desain dan gambar yang sudah kami sesuaikan dengan kebutuhan dan keinginan Anda</li>
                        
                        <li><strong>Pembayaran Deposit</strong><br>Lakukan pembayaran deposit dan kirimkan bukti transaksi kepada kami. Ini sebagai tanda jadi bahwa pesanan Anda telah kami terima.</li>
                        
                        <li><strong>Proses Produksi</strong><br>Setelah deposit diterima, kami akan memulai proses produksi.</li>
                        
                        <li><strong>Pelunasan Pembayaran</strong><br>Setelah produksi selesai, Anda dapat melunasi sisa pembayaran sebelum pengiriman.</li>
                        
                        <li><strong>Pengiriman ke Alamat Anda</strong><br>Setelah pelunasan, kami akan segera mengirimkan furniture pesanan Anda ke alamat yang telah ditentukan.</li>
                    </ol>
                </div>
            </div>
        </section>



        <section class="container mt-4">
            <h2 class="mb-4 text-center">Custom Furniture</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <!-- Produk 1 -->
                <div class="col">
                    <div class="card h-100">
                        <a href="#">
                            <img src="/icons/meja.jpg" class="card-img-top" alt="Desain Interior">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Rp 454,749,200 - 100m² - 10 ruang</h5>
                            <p class="card-text">Cicilan: 36x Rp12,832,092 / bulan</p>
                            <p class="text-muted">Desain Interior - Rumah</p>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="col">
                    <div class="card h-100">
                        <a href="#">
                            <img src="/icons/meja.jpg" class="card-img-top" alt="Desain Interior">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Rp 614,616,060 - 127m² - 11 ruang</h5>
                            <p class="card-text">Cicilan: 36x Rp17,025,698 / bulan</p>
                            <p class="text-muted">Desain Interior - Rumah</p>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="col">
                    <div class="card h-100">
                        <a href="#">
                            <img src="/icons/meja.jpg" class="card-img-top" alt="Desain Interior">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Rp 127,821,000 - 51m² - 3 ruang</h5>
                            <p class="card-text">Cicilan: 36x Rp3,551,083 / bulan</p>
                            <p class="text-muted">Desain Interior - Rumah</p>
                        </div>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="col">
                    <div class="card h-100">
                        <a href="#">
                            <img src="/icons/meja.jpg" class="card-img-top" alt="Desain Interior">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Rp 171,009,833 - 29m² - 2 ruang</h5>
                            <p class="card-text">Cicilan: 36x Rp4,752,073 / bulan</p>
                            <p class="text-muted">Desain Interior - Rumah</p>
                        </div>
                    </div>
                </div>

                <!-- Produk 5 -->
                <div class="col">
                    <div class="card h-100">
                        <a href="#">
                            <img src="/icons/meja.jpg" class="card-img-top" alt="Desain Interior">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Rp 331,681,000 - 85m² - 6 ruang</h5>
                            <p class="card-text">Cicilan: 36x Rp9,213,361 / bulan</p>
                            <p class="text-muted">Desain Interior - Rumah</p>
                        </div>
                    </div>
                </div>

                <!-- Produk 6 -->
                <div class="col">
                    <div class="card h-100">
                        <a href="#">
                            <img src="/icons/meja.jpg" class="card-img-top" alt="Desain Interior">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Rp 309,084,000 - 92m² - 6 ruang</h5>
                            <p class="card-text">Cicilan: 36x Rp8,586,667 / bulan</p>
                            <p class="text-muted">Desain Interior - Rumah</p>
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

        <!-- AWAL FOOTER -->
        <footer class="py-3 my-4 bg-[yellow]">
            <div class="container">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
              </ul>
              <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
            </div>
        </footer>
        <!-- END FOOTER -->
    </div>
</body>
</html>