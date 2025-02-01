<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])          
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <!-- DIV KESELURUHAN -->
    <div class="wrapper-homepage">
        <!-- AWAL HEADER -->
            
         <header class="header-main-container">

            <!-- AWAL Navbar Header -->
             <nav class="container-header-navbar-service">
                 <ul class="container-header-item">
                    <li class="navbar-item-service">
                        <a href="">Cara Pesan</a>
                    </li>
                    <li class="navbar-item-service">
                        <a href="">Informasi Toko</a>
                    </li>
                    <li class="navbar-item-service">
                        <a href="">Status Pengerjaan</a>
                    </li>
                 </ul>
                 <div class="navbar-item-contact">
                    <a href="">Kontak</a>
                 </div>
             </nav>
            <!-- END Navbar Header -->


            <!-- Header Column Search -->
            <div class="container-header-column-search">
                <div class="container-logo-company">
                    <a href="" class="navbar-logo-company">
                        furnitureJatiInd
                    </a>
                </div>

               
                <form class="icon-searchbar">
                    <span class="search-icon material-symbols-outlined">search</span>
                    <input class="search-input" type="search" placeholder="Search">
                </form>
               

                <div class="icon-wishlist"> 
                    <a href="#" aria-label="Login" class="navbar-logo-wishlist"> 
                        <img src="icons/login.svg" alt="">
                        <!-- Icon atau gambar wishlist -->
                    </a>
                    <a href="#" aria-label="Wishlist" class="navbar-logo-wishlist">
                        <img src="icons/favorite.svg" alt="">
                        <!-- Icon atau gambar wishlist -->
                    </a>
                    <a href="#" aria-label="Wishlist" class="navbar-logo-wishlist">
                        <img src="icons/shopping_cart_checkout.svg" alt="">
                        <!-- Icon atau gambar wishlist -->
                    </a>
                </div>
            </div>
            <!-- END Header Column Search -->


            <!-- Header Categories -->
            <nav class="container-header-categories">
                <ul class="navbar-list-categories">

                    <li class="navbar-item-categories">
                        <a href="">Produk</a>
                    </li>

                    <li class="navbar-item-categories">
                        <a href="">Custom Furniture</a>
                    </li>

                    <li class="navbar-item-categories">
                        <a href="">Furniture set</a>
                    </li>

                    <li class="navbar-item-categories">
                        <a href="">Perawatan Furniture</a>
                    </li>


                    <li class="navbar-item-categories">
                        <a href="">Promo</a>
                    </li>
                    <li class="navbar-item-categories">
                        <a href="">Testimoni</a>
                    </li>
                </ul>
            </nav>
            <!-- END Header Categories -->

         </header>
        <!-- END HEADER -->


        <!-- AWAL CONTENT -->
         <main class="container-main-content">
            <!-- Warning -->
            <button type="button" class="btn btn-outline-warning text-black border-secondary" style="display: flex; ">
                <p class="d-inline-flex gap-1">
                    <img src="icons/error.svg" alt="">
                    <a href="contact.html" class="btn" role="button" data-bs-toggle="button">
                    Jangan ragu untuk menghubungi Furniture Jati Indonesia melalui kontak yang tertera di website kami!!
                    </a>
                </p>
            </button>
            <!-- END Warning -->

            <!-- DISKON -->
            <p class="h4">Diskon</p>
            <section id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active c-item">
                    <img src="icons/1.jpeg" class="d-block w-100 c-img" alt="...">
                  </div>
                  <div class="carousel-item c-item">
                    <img src="icons/2.jpeg" class="d-block w-100 c-img" alt="...">
                  </div>
                  <div class="carousel-item c-item">
                    <img src="icons/WhatsApp Image 2024-11-25 at 23.51.53.jpeg" class="d-block w-100 c-img" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </section>
            <!-- END DISKON -->

            <!-- Testimoni -->
            <p class="h4">Testimoni</p>
            <section id="hero-carousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active c-item">
                    <img src="icons/1.jpeg" class="d-block w-100 c-img" alt="...">
                  </div>
                  <div class="carousel-item c-item">
                    <img src="icons/2.jpeg" class="d-block w-100 c-img" alt="...">
                  </div>
                  <div class="carousel-item c-item">
                    <img src="icons/WhatsApp Image 2024-11-25 at 23.51.53.jpeg" class="d-block w-100 c-img" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </section>
            <!-- END Testimoni -->

            <!-- Produk Unggulan -->
            <section class="containerProduct">
                <ul class="list-product">
                    <li class="list-item-product">
                        <a href="">Kursi</a>
                    </li>
                    <li class="list-item-product">
                        <a href="">Lemari</a>
                    </li>
                    <li class="list-item-product">
                        <a href="">Meja</a>
                    </li>
                    <li class="list-item-product">
                        <a href="">Tempat Tidur</a>
                    </li>
                    <li class="list-item-product">
                        <a href="">Buffet</a>
                    </li>
                    <li class="list-item-product">
                        <a href="">Pintu</a>
                    </li>
                </ul>
            </section>
            <!-- END Katalog Produk -->

            <!-- Custom Furniture -->
             <div>
                <h2>Custom Furniture</h2>
                <div>
                    <a href="">TARO FOTO </a>
                </div>
                <p>Buatlah sebuah kalimat yang mengajak customer untuk melakukan pemesanan custom</p>
                <div>
                    <a href="">Baca Selengkapnya</a>
                </div>
             </div>
            <!-- END Custom Furniture -->

            <!-- Furniture Set -->
            <div>
                <h2>Furniture Set</h2>
                <div>
                    <a href="">Set Daput</a>
                </div>

                <div>
                    <a href="">Set Ruang Makan</a>
                </div>

                <div>
                    <a href="">Set Ruang Tengah</a>
                </div>

                <div>
                    <a href="">Set Kamar Tidur</a>
                </div>

                <div>
                    <a href="">Set blm tau lagi</a>
                </div>
             </div>
            <!-- END Furniture Set -->

            <!-- Perawatan Furniture -->
            <div>
                <h2>Perawatan Furniture</h2>
                <div>
                    <a href="">TARO FOTO </a>
                </div>
                <p>Buatlah sebuah kalimat yang mengajak customer untuk melakukan perawatan furniture</p>
                <div>
                    <a href="">Baca Selengkapnya</a>
                </div>
             </div>
            <!-- END Perawatan Furniture -->
         </main>
         <!-- END CONTENT -->
         

         <!-- AWAL FOOTER -->
         <footer class="container-main-footer">

            <div class="container-link-footer">   
                <ul class="footer-link">
                    <li>
                        <a href="">Informasi Toko</a>
                    </li>

                    <li>
                        <a href="">Contact</a>
                    </li>

                    <li>
                        <a href="">Cara Pesan</a>
                    </li>

                    <li>
                        <a href="">Status Pengerjaan Pesanan</a>
                    </li>
                </ul>
            </div>

            <div class="container-list-icon-footer">
                <ul class="footer-icon">
                    <li class="navbar-item-footer">
                        <a href="">Taro icon footer</a>
                    </li>
                    <li class="navbar-item-footer">
                        <a href="">Taro icon footer</a>
                    </li>
                    <li class="navbar-item-footer">
                        <a href="">Taro icon footer</a>
                    </li>
                </ul>
            </div>
        
         </footer>
        <!-- END FOOTER -->
         
    </div>
    <!-- DIV KESELURUHAN -->
    </body>
</html>
