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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])      
    <!-- Styles / Scripts -->
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    
    <div class="wrapper-homepage">
        
        <!-- AWAL HEADER -->  
        <header class="header-main-container">
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
              

               <div class="icon-wishlist">
                   <button type="button" class="btn btn-outline-secondary" style="border: none">
                       <a class="" href="loginRegister" role="button">Masuk</a> 
                   </button>

                   <button type="button" class="btn btn-outline-secondary" style="border: none">
                       <a class="" href="loginRegister" role="button">Daftar</a> 
                   </button>

                   <a href="#" aria-label="Wishlist" class="navbar-logo-wishlist">
                       <img src="/icons/favorite.svg" alt="">
                       <!-- Icon atau gambar wishlist -->
                   </a>
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


       <!-- AWAL CONTENT -->
        <main class="container-main-content my-3">
           <!-- Warning -->
           <button type="button" class="btn btn-outline-warning text-black border-secondary my-3" style="display: flex; ">
               <p class="d-inline-flex gap-1">
                   <img src="/icons/error.svg" alt="">
                   <a href="kontak">Kontak</a>
                   <a href="kontak" class="" role="button">
                       Jangan ragu untuk menghubungi Furniture Jati Indonesia melalui kontak yang tertera di website kami!!
                   </a>
               </p>
           </button>
           <!-- END Warning -->
  
           <!-- DISKON -->

           <section class="container">
               <h5 class="h3 card-title font-bold">Diskon</h5>
               <div class="row justify-content-center">
                   <div class="col-12">
                       <div id="carouseldiskon" class="carousel slide my-3">
                           <div class="carousel-inner">
                             <div class="carousel-item ratio ratio-21x9 active">
                                <a href="">
                                    <img src="/icons/Diskon/1.png" class="d-block w-100 ratio " alt="...">
                                </a>
                             </div>
                             <div class="carousel-item ratio ratio-21x9 ">
                                <a href="">
                                    <img src="/icons/Diskon/2.png" class="d-block w-100" alt="...">
                                </a>
                             </div>
                             <div class="carousel-item ratio ratio-21x9">
                                <a href="">
                                    <img src="/icons/Diskon/3.png" class="d-block w-100" alt="...">
                                </a>
                             </div>
                           </div>
                           <button class="carousel-control-prev" type="button" data-bs-target="#carouseldiskon" data-bs-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                           </button>
                           <button class="carousel-control-next" type="button" data-bs-target="#carouseldiskon" data-bs-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Next</span>
                           </button>
                         </div>
                   </div>
               </div>
           </section>
           <!-- END DISKON -->

           <!-- Testimoni -->
           <section class="container">
               <h5 class="h3 card-title font-bold">Testimoni</h5>
               <div class="row justify-content-center">
                   <div class="col-12">
                       <div id="carouseltestimoni" class="carousel slide my-3">
                           <div class="carousel-inner">
                             <div class="carousel-item ratio ratio-21x9 active">
                               <img src="/icons/1.jpeg" class="d-block w-100 ratio " alt="...">
                             </div>
                             <div class="carousel-item ratio ratio-21x9 ">
                               <img src="/icons/2.jpeg" class="d-block w-100" alt="...">
                             </div>
                             <div class="carousel-item ratio ratio-21x9">
                               <img src="/icons/WhatsApp Image 2024-11-25 at 23.51.53.jpeg" class="d-block w-100" alt="...">
                             </div>
                           </div>
                           <button class="carousel-control-prev" type="button" data-bs-target="#carouseltestimoni" data-bs-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                           </button>
                           <button class="carousel-control-next" type="button" data-bs-target="#carouseltestimoni" data-bs-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Next</span>
                           </button>
                         </div>
                   </div>
               </div>
           </section>
           <!-- END Testimoni -->

           <!-- Produk Unggulan -->
           <section class="container container-custom">
               <h5 class="h3 card-title font-bold ">Produk Unggulan</h5>
               <div class="row justify-content-center" style="background-color: grey">
                   <div class="col-md-10">
                       <div class="row text-center">
                           <div class="col-2 item">
                               <a class="btn btn-primary w-100" href="#" role="button">Kursi</a>
                           </div>
                           <div class="col-2 item">
                               <a class="btn btn-primary w-100" href="#" role="button">Bangku</a>
                           </div>
                           <div class="col-2 item">
                               <a class="btn btn-primary w-100" href="#" role="button">Meja</a>
                           </div>
                           <div class="col-2 item">
                               <a class="btn btn-primary w-100" href="#" role="button">Lemari</a>
                           </div>
                       </div>
                       <div class="row text-center">
                           <div class="col-2 item">Kursi</div>
                           <div class="col-2 item">Bangku</div>
                           <div class="col-2 item">Meja</div>
                           <div class="col-2 item">Lemari</div>
                           <div class="col-2 item">Kursi</div>
                           <div class="col-2 item">Bangku</div>
                       </div>
                       <div class="row text-center">
                           <div class="col-2 item">Kursi</div>
                           <div class="col-2 item">Bangku</div>
                           <div class="col-2 item">Meja</div>
                           <div class="col-2 item">Lemari</div>
                           <div class="col-2 item">Kursi</div>
                           <div class="col-2 item">Bangku</div>
                       </div>
                       <div class="row text-center">
                           <div class="col-2 item">Kursi</div>
                           <div class="col-2 item">Bangku</div>
                           <div class="col-2 item">Meja</div>
                           <div class="col-2 item">Lemari</div>
                           <div class="col-2 item">Kursi</div>
                           <div class="col-2 item">Bangku</div>
                       </div>
                   </div>
               </div>
           </section>
           
           <!-- END Katalog Produk -->

           <!-- Custom Furniture -->
           <section class="container my-3">
               <h5 class="h3 card-title font-bold">Custom Furniture</h5>
               <div class="row">
                   <div class="col-md-6 section left d-flex flex-column justify-content-center align-items-start">
                       <h3 class="fw-bold text-uppercase">Pilih</h3>
                       <h1 class="fw-bold">Warnamu</h1>
                       <p>Temukan warna, model dan bahan sesuai selera anda</p>
                       <button class="btn btn-custom">GET ALL COLOR</button>
                   </div>
                   <div class="col-md-6 section right d-flex flex-column justify-content-center align-items-start">
                       <h3 class="fw-bold">Room ideas and inspiration</h3>
                       <p>Temukan inspirasi ruangan untuk rumah anda</p>
                       <button class="btn btn-custom">GET INSPIRED</button>
                   </div>
               </div>
           </section>
           <!-- END Custom Furniture -->

           <!-- Furniture Set -->
           <div class="container px-0">
               <h5 class="h3 card-title font-bold">Furniture Set</h5>
               <div class="row"> 
                   <div class="col-3 mb-3 mb-sm-0"> 
                       <div class="card text-bg-dark border-none">
                           <img src="/icons/meja.jpg" class="card-img" alt="...">
                           <div class="card-img-overlay justify-content-center d-flex items-center">
                               <h5 class="h3 card-title text-center font-bold">Card title</h5>
                           </div>
                       </div>
                   </div>
                   <div class="col-3 mb-3 mb-sm-0"> 
                       <div class="card text-bg-dark border-none">
                           <img src="/icons/meja.jpg" class="card-img" alt="...">
                           <div class="card-img-overlay justify-content-center d-flex items-center">
                               <h5 class="h3 card-title text-center font-bold">Card title</h5>
                           </div>
                       </div>
                   </div>
                   <div class="col-3 mb-3 mb-sm-0"> 
                       <div class="card text-bg-dark border-none">
                           <img src="/icons/meja.jpg" class="card-img" alt="...">
                           <div class="card-img-overlay justify-content-center d-flex items-center">
                               <h5 class="h3 card-title text-center font-bold">Card title</h5>
                           </div>
                       </div>
                   </div>
                   <div class="col-3 mb-3 mb-sm-0"> 
                       <div class="card text-bg-dark border-none">
                           <img src="/icons/meja.jpg" class="card-img" alt="...">
                           <div class="card-img-overlay justify-content-center d-flex items-center">
                               <h5 class="h3 card-title text-center font-bold">Card title</h5>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- END Furniture Set -->

           <!-- Perawatan Furniture -->
           <section class="container px-0 my-3">
               <div class="row">
                   <div class="col-12">
                       <h5 class="h3 card-title font-bold">Perawatan Furniture</h5> 
                   </div>
               </div>
               <div class="row px-2">
                   <div class="col-md-6 section left d-flex flex-column justify-content-center align-items-start">
                       <h3 class="fw-bold text-uppercase">Pilih</h3>
                       <h1 class="fw-bold">Warnamu</h1>
                       <p>Temukan warna, model dan bahan sesuai selera anda</p>
                       <button class="btn btn-custom">GET ALL COLOR</button>
                   </div>
                   <div class="col-md-6 section right d-flex flex-column justify-content-center align-items-start">
                       <h3 class="fw-bold">Room ideas and inspiration</h3>
                       <p>Temukan inspirasi ruangan untuk rumah anda</p>
                       <button class="btn btn-custom">GET INSPIRED</button>
                   </div>
               </div>
           </section>
           <!-- END Perawatan Furniture -->
        </main>
        <!-- END CONTENT -->

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
    <!-- DIV KESELURUHAN -->
    
</body>

</html>
