@extends('layouts.user')
@section('content')
{{-- Awal Content --}}
<section class="container mt-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        @foreach ($products as $product)
        <div class="col">
            <div class="card h-100">
                <a href="#">
                    @if($product->images->isNotEmpty())
                        <img src="{{ Storage::url($product->images->first()->link) }}" alt="Product Image" width="100%">
                    @else
                        <span>No Image</span>
                    @endif
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <h5 class="card-title">Rp {{ number_format($product->harga, 0, ',', '.') }}</h5>
                    <p class="text-muted">{{ $product->kategori }}</p>
                    <button type="button" class="btn btn-primary" style="border: none">
                        <a class="" href="{{ route('produk.show', $product) }}" role="button">Beli</a> 
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation" class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">&laquo;</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="page2">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
            </li>
        </ul>
    </nav>
</section>
{{-- END Content --}}
@endsection