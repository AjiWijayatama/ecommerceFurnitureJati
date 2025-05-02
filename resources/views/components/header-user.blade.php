<!-- HEADER -->
<header class="bg-white shadow-sm border-bottom py-3">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- Left: Brand & Navigation -->
        <div class="d-flex align-items-center gap-4">
            <a href="{{ url('/') }}" class="text-dark fw-bold fs-5 text-decoration-none">INDFurniture</a>

            <nav class="d-flex gap-3">
                <a href="informasiToko" class="text-muted text-decoration-none">Informasi Toko</a>
                <a href="{{ route('statusPembayaran') }}" class="text-muted text-decoration-none">Status Pembayaran</a>
                <a href="{{ route('kontak') }}" class="text-muted text-decoration-none">Kontak</a>
            </nav>
        </div>

        <!-- Right: Auth & Wishlist -->
        <div class="d-flex align-items-center gap-3">
            @auth
                <a href="{{ route('profile.show') }}" class="text-dark text-decoration-none">
                    Halo, {{ Auth::user()->name }}!
                </a>
                <a href="{{ route('cart.index') }}" class="d-inline-block">
                    <img src="/icons/favorite.svg" alt="Keranjang Saya" style="width: 22px;">
                </a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-sm btn-outline-dark">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-dark">Masuk</a>
                <a href="{{ route('register.form') }}" class="btn btn-sm btn-dark text-white">Daftar</a>
            @endauth
        </div>
    </div>

    <!-- Category Bar -->
    <div class="bg-light mt-3 py-2 border-top border-bottom">
        <div class="container d-flex justify-content-center gap-4">
            <a href="{{ route('produk.index') }}" class="text-dark text-decoration-none fw-semibold">Produk</a>
            <a href="{{ route('customFurniture') }}" class="text-dark text-decoration-none fw-semibold">Custom Furniture</a>
            <a href="{{ route('userfurnitureset.index') }}" class="text-dark text-decoration-none fw-semibold">Furniture Set</a>
        </div>
    </div>
</header>
