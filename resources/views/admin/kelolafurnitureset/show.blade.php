@extends('layouts.admin')

@section('title')
    Detail Furniture Set
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detail Furniture Set</h4>
                <a href="{{ route('furnitureset.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                @if($furnitureset->images->isNotEmpty())
                    <div id="furnitureSetCarousel" class="carousel slide mb-4" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($furnitureset->images as $key => $img)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ Storage::url($img->link) }}" class="d-block w-100" alt="Gambar Furniture Set">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#furnitureSetCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#furnitureSetCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                @else
                    <p class="text-muted">Belum ada gambar untuk set ini.</p>
                @endif

                <h3 class="mt-4">{{ $furnitureset->name }}</h3>
                <p><strong>Deskripsi:</strong> {{ $furnitureset->deskripsi }}</p>
                <p><strong>Harga:</strong> Rp{{ number_format($furnitureset->harga, 0, ',', '.') }}</p>

                <hr>
                <h5>Produk dalam Set</h5>
                @if($furnitureset->products->isEmpty())
                    <p class="text-muted">Belum ada produk di set ini.</p>
                @else
                    <ul class="list-group">
                        @foreach($furnitureset->products as $product)
                            <li class="list-group-item">
                                {{ $product->name }}
                                <span class="badge badge-primary float-right">
                                    Rp{{ number_format($product->harga, 0, ',', '.') }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <p class="mt-4"><strong>Created At:</strong> {{ $furnitureset->created_at->format('d M Y H:i') }}</p>
                <p><strong>Last Updated:</strong> {{ $furnitureset->updated_at->format('d M Y H:i') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
