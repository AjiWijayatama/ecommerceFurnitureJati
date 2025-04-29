{{-- <!DOCTYPE html>
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
    <style>
        .about-box {
            background: white;
            color: black;
            padding: 40px;
            border-radius: 15px;
            display: inline-block;
            max-width: 800px;
            font-size: 18px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border: 2px solid black;
            position: relative;
        }
        .logo {
            font-size: 40px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo img {
            width: 50px;
            margin-right: 10px;
        }
    
    </style>
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
                        <a href="contact.html" class="" role="button" data-bs-toggle="button">
                            Jangan ragu untuk menghubungi Furniture Jati Indonesia melalui kontak yang tertera di website kami!!
                        </a>
                    </p>
                </button>
                <!-- END Warning -->
                

                <!-- About Section -->
                <section class="container about-section d-flex flex-column align-items-center">
                    <h2 class="h2"> Furniture Set</h2>
                    <div class="about-box my-3">
                        <h2 class="h2">Set Kursi</h2>
                        <div class="row">
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="about-box my-3">
                        <h2 class="h2">Set Meja</h2>
                        <div class="row">
                            
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-box my-3">
                        <h2 class="h2">Set Lemari</h2>
                        <div class="row">
                            
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mb-3 mb-sm-0 my-2 my-2"> 
                                <div class="card text-bg-dark border-none">
                                    <img src="/icons/meja.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay justify-content-center d-flex items-center">
                                        <h5 class="h3 card-title text-center font-bold">Card title</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                
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
</html> --}}
