@extends('layouts.user')

@section('content')
<section class="container mt-4">
    <div class="row g-4">
        <!-- Kolom Kiri: Gambar Produk -->
        <div class="col-lg-4">
            <img id="mainImage" src="{{ Storage::url($product->images->first()->link) }}" class="img-fluid rounded" alt="Meja Kayu">

            <div class="d-flex gap-2 mt-3 thumbnail">
                @foreach($product->images as $key => $image)
                    <img src="{{ Storage::url($image->link) }}" class="img-thumbnail" alt="Product Image"
                        onclick="changeMainImage(this)">
                @endforeach
            </div>
        </div>

        <!-- Kolom Tengah: Detail Produk -->
        <div class="col-lg-4">
            <h4 class="fw-bold">{{ $product->name }}</h4>
            <p class="text-muted small">{{ $product->stok}}</p>
            <h3 class="text-danger fw-bold">Rp {{ number_format($product->harga, 0, ',', '.') }}</h3>
            @if($product->discount > 0)
                <p class="text-muted small">{{ $product->discount}}%</p>
            @endif
            <hr>
            <h5 class="text-success fw-bold">Detail</h5>
            <p class="text-muted">
                {{ $product->deskripsi }}
            </p>
        </div>

        <!-- Kolom Kanan: Atur Jumlah -->
        <div class="col-lg-4">
            <div class="card shadow-sm p-3 border-0 rounded">
                <div class="card-body">
                    <h5 class="fw-bold">Atur Jumlah</h5>

                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ Storage::url($product->images->first()->link) }}" class="me-2 rounded" alt="Produk">
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="btn-group" role="group">
                            <button id="decrease" class="btn btn-light border">-</button>
                            <input type="text" id="quantity" class="btn btn-light border text-center" value="1" readonly style="width: 40px;">
                            <button id="increase" class="btn btn-light border">+</button>
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
                        <button type="submit" class="btn btn-custom w-100 fw-bold mt-2">Beli Sekarang</button>
                    </form>
                    <button class="btn btn-custom w-100 fw-bold">Tambah ke Keranjang</button>
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
    }

    .thumbnail img:hover {
        border: 2px solid #00796B;
    }

    .btn-custom {
        background-color: #00796B;
        color: white;
        border-radius: 10px;
    }

    .btn-custom:hover {
        background-color: #005f56;
    }
</style>
@endsection
