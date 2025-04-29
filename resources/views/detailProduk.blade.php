@extends('layouts.user')

@section('content')
<section class="container mt-5">
    <div class="row g-4">
        <!-- Kolom Kiri: Gambar Produk -->
        {{-- Gambar Utama: Gambar ini diambil dari penyimpanan menggunakan helper Storage::url(), yang menghasilkan URL yang bisa diakses untuk gambar produk. --}}
        <div class="col-lg-4">
            <img id="mainImage" src="{{ Storage::url($product->images->first()->link) }}" class="img-fluid rounded shadow-sm" alt="Meja Kayu">
            {{-- Thumbnail Gambar: Di bawah gambar utama, menampilkan gambar-gambar lain dari produk yang sama. --}}
            <div class="d-flex gap-2 mt-3 thumbnail">
                @foreach($product->images as $key => $image)
                    <img src="{{ Storage::url($image->link) }}" class="img-thumbnail border" alt="Product Image"
                        onclick="changeMainImage(this)">
                @endforeach
            </div>
        </div>

        <!-- Kolom Tengah: Detail Produk -->
        <div class="col-lg-4">
            <h4 class="fw-bold text-dark" style="font-family: 'Georgia', serif;">{{ $product->name }}</h4>
            <p class="text-muted small">{{ $product->stok}} Stok Tersedia</p>
            <h3 class="text-danger fw-bold">Rp {{ number_format($product->harga, 0, ',', '.') }}</h3>
            @if($product->discount > 0)
                <p class="text-muted small">{{ $product->discount}}% Diskon</p>
            @endif
            <hr class="border-dark">
            <h5 class="text-success fw-bold">Detail Produk</h5>
            <p class="text-muted" style="font-family: 'Times New Roman', serif;">
                {{ $product->deskripsi }}
            </p>
        </div>

        <!-- Kolom Kanan: Atur Jumlah -->
        <div class="col-lg-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body" style="background-color: #f4f1e1;">
                    <h5 class="fw-bold" style="font-family: 'Georgia', serif;">Atur Jumlah</h5>

                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ Storage::url($product->images->first()->link) }}" class="me-2 rounded" alt="Produk" style="width: 60px; height: 60px; object-fit: cover;">
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="btn-group" role="group">
                            <button id="decrease" class="btn btn-light border rounded-3">-</button>
                            <input type="text" id="quantity" class="btn btn-light border text-center" value="1" readonly style="width: 40px; font-size: 1.2rem;">
                            <button id="increase" class="btn btn-light border rounded-3">+</button>
                        </div>
                        <span class="text-muted small">{{ $product->stok }} Stok Tersedia</span>
                    </div>

                    <div class="mb-2">
                        <span class="text-muted">Total Harga (<span id="totalItems">1</span> barang)</span>
                        <span class="float-end fw-medium">Rp <span id="totalPrice">{{ number_format($product->harga, 0, ',', '.') }}</span></span>
                    </div>

                    <form action="{{ route('invoice') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" id="form_quantity" name="quantity" value="1">
                        <button type="submit" class="btn btn-custom w-100 fw-bold mt-3">Beli Sekarang</button>
                    </form>
                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="POST">
                        @csrf
                        <input type="hidden" id="form_quantity_cart" name="quantity" value="1">
                        <button type="submit" class="btn btn-custom w-100 fw-bold mt-2">Tambah ke Keranjang</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    function changeMainImage(thumbnail) {
        document.getElementById('mainImage').src = thumbnail.src;
    }

    document.addEventListener("DOMContentLoaded", function () {
        let quantityInput = document.getElementById("quantity");
        let totalItems = document.getElementById("totalItems");
        let totalPrice = document.getElementById("totalPrice");
        let decreaseBtn = document.getElementById("decrease");
        let increaseBtn = document.getElementById("increase");
        let pricePerItem = {{ $product->harga }};
        let stockAvailable = {{ $product->stok }};

        function updateSubtotal() {
            let quantity = parseInt(quantityInput.value);
            let newTotal = pricePerItem * quantity;
            totalItems.innerText = quantity;
            totalPrice.innerText = newTotal.toLocaleString("id-ID");
            document.getElementById("form_quantity").value = quantity;
        }

        decreaseBtn.addEventListener("click", function () {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
                updateSubtotal();
            }
        });

        increaseBtn.addEventListener("click", function () {
            let quantity = parseInt(quantityInput.value);
            if (quantity < stockAvailable) {
                quantityInput.value = quantity + 1;
                updateSubtotal();
            } else {
                alert("Stok tidak mencukupi!");
            }
        });
    });
</script>
@endsection

@section('css')
<style>
    .thumbnail img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        cursor: pointer;
        border-radius: 8px;
        border: 1px solid #ccc;
        transition: border-color 0.3s ease;
    }

    .thumbnail img:hover {
        border-color: #4E3B31;
    }

    .btn-custom {
        background-color: #4E3B31;
        color: white;
        border-radius: 8px;
        border: none;
    }

    .btn-custom:hover {
        background-color: #3B2A1D;
    }

    .card-body {
        font-family: 'Georgia', serif;
    }
</style>
@endsection
