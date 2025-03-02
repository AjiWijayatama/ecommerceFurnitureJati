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
</head>
<body>
    <div class="container mt-4">
        <div class="row g-4">
            <!-- Kolom Kiri: Gambar Produk -->
            <div class="col-lg-4">
                <!-- Gambar utama -->
                <img id="mainImage" src="{{ Storage::url($product->images->first()->link) }}" class="img-fluid rounded" alt="Meja Kayu">
                
                <!-- Thumbnail -->
                <div class="d-flex gap-2 mt-3 thumbnail">
                    @foreach($product->images as $key => $image)
                        <img src="{{ Storage::url($image->link) }}" class="img-thumbnail" alt="Product Image" 
                             onclick="changeMainImage(this)">
                    @endforeach
                </div>
            </div>
            
            <!-- Script untuk mengubah gambar utama -->
            <script>
                function changeMainImage(thumbnail) {
                    document.getElementById('mainImage').src = thumbnail.src;
                }
            </script>
            

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
                    {{ $product->deskripsi}}
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
                    
                        <div class="mb-3 border-top pt-2">
                            <span class="fw-bold">Subtotal</span>
                            <span class="float-end fw-bold">Rp <span id="subtotal">{{ number_format($product->harga, 0, ',', '.') }}</span></span>
                        </div>
                    
                        <button class="btn btn-custom w-100 fw-bold">Tambah ke Keranjang</button>
                    </div>
                    
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            let quantityInput = document.getElementById("quantity");
                            let totalItems = document.getElementById("totalItems");
                            let totalPrice = document.getElementById("totalPrice");
                            let subtotal = document.getElementById("subtotal");
                            let decreaseBtn = document.getElementById("decrease");
                            let increaseBtn = document.getElementById("increase");
                    
                            let pricePerItem = {{ $product->harga }}; 
                            let stockAvailable = {{ $product->stok }};  
                    
                            // Fungsi update subtotal
                            function updateSubtotal() {
                                let quantity = parseInt(quantityInput.value);
                                let newTotal = pricePerItem * quantity;
                                totalItems.innerText = quantity;
                                totalPrice.innerText = newTotal.toLocaleString("id-ID");
                                subtotal.innerText = newTotal.toLocaleString("id-ID");
                            }
                    
                            // Event untuk tombol minus
                            decreaseBtn.addEventListener("click", function () {
                                let quantity = parseInt(quantityInput.value);
                                if (quantity > 1) {
                                    quantityInput.value = quantity - 1;
                                    updateSubtotal();
                                }
                            });
                    
                            // Event untuk tombol plus
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
                    
                </div>
            </div>

        </div>
    </div>
</body>

</html>
