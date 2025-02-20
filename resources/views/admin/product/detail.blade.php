@extends('layouts.admin')

@section('title')
    Detail Produk
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Produk</h4>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <div id="productCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($product->images as $key => $image)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ Storage::url( $image->link) }}" alt="Product Image">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    
                    <h3 class="mt-4">{{ $product->name }}</h3>
                    <p><strong>Slug:</strong> {{ $product->slug }}</p>
                    <p><strong>Deskripsi:</strong> {{ $product->deskripsi }}</p>
                    <p><strong>Kategori:</strong> {{ ucfirst($product->kategori) }}</p>
                    <p><strong>Harga:</strong> Rp{{ number_format($product->harga, 0, ',', '.') }}</p>
                    <p><strong>Stok:</strong> {{ $product->stok }}</p>
                    <p><strong>Diskon:</strong> {{ $product->discount }}%</p>
                    <p><strong>Created At:</strong> {{ $product->created_at->format('d M Y H:i') }}</p>
                    <p><strong>Last Updated:</strong> {{ $product->updated_at->format('d M Y H:i') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
