<!-- AWAL HEADER -->  
<header class="header-main-container">
    <!-- AWAL Navbar Header -->
    <nav class="container-header-navbar-service">
        <ul class="container-header-item">
           {{-- <li class="navbar-item-service">
               <a href="caraPesan">Cara Pesan</a>
           </li> --}}
           <li class="navbar-item-service">
               <a href="informasiToko">Informasi Toko</a>
           </li>
           <li class="navbar-item-service">
               <a href="#">Status Pembayaran</a>
           </li>

        </ul>
        <div class="navbar-item-contact">
           <a href="#">Kontak</a>
        </div>
    </nav>
    <!-- END Navbar Header -->

    <!-- Header Column Search -->
    <div class="container-header-column-search my-2">
        <div class="container-logo-company">
            <a href="#" class="navbar-logo-company">
                IndFurniture
            </a>
        </div>
        <form class="icon-searchbar">
            <span class="search-icon material-symbols-outlined">search</span>
            <input class="search-input" type="search" placeholder="Search">
        </form>
        <div class="icon-wishlist">
            @auth
                <!-- Jika user sudah login -->
                <span>Halo, {{ Auth::user()->name }}!</span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-outline-secondary">Logout</button>
                </form>
            @else
                <!-- Jika user belum login -->
                <button type="button" class="btn btn-outline-secondary" style="border: none">
                    <a href="{{ route('login.form') }}" role="button">Masuk</a> 
                </button>
                <button type="button" class="btn btn-outline-secondary" style="border: none">
                    <a href="{{ route('register.form') }}" role="button">Daftar</a> 
                </button>
            @endauth

            <a href="#" aria-label="Wishlist" class="navbar-logo-wishlist">
                <img src="/icons/favorite.svg" alt="">
            </a>
        </div>
    </div>
    <!-- END Header Column Search -->

    <!-- Header Categories -->
    <nav class="container-header-categories">
        <ul class="navbar-list-categories">
            <li class="navbar-item-categories">
                <a href="{{ route('produk.index') }}">Produk</a>
            </li>
            <li class="navbar-item-categories">
                <a href="#">Custom Furniture</a>
            </li>
            <li class="navbar-item-categories">
                <a href="#">Furniture set</a>
            </li>
            {{-- <li class="navbar-item-categories">
                <a href="#">Perawatan Furniture</a>
            </li> --}}
            <li class="navbar-item-categories">
                <a href="#">Testimoni</a>
            </li>
        </ul>
    </nav>
    <!-- END Header Categories -->
</header>
<!-- END HEADER -->
