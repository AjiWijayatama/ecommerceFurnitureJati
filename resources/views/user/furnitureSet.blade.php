@extends('layouts.user')
@section('head')
<style>
    .furniture-image {
        object-fit: cover;
        width: 100%;
        height: 300px;
        border-radius: 8px;
    }

    .card-body .furniture-image {
        margin-bottom: 1rem;
    }
</style>
@endsection

@section('content')
{{-- Awal Content --}}
<section class="container mt-4">
    <div class="text-center mt-5 py-2">
        <span class="text-white bg-dark rounded-pill shadow" style="
            font-size: 30px;
            font-style: italic;
            font-family: 'Georgia', serif;
            padding: 4px 10px;
        ">
            Furniture Set
        </span>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        @foreach ($furniture_sets as $set)
        <div class="col">
            <div class="card h-100">
                <a href="#">
                    @if($set->images->isNotEmpty())
                        <img src="{{ Storage::url($set->images->first()->link) }}"
                             alt="Furniture Set Image"
                             class="furniture-image img-fluid rounded shadow-sm"
                             style="object-fit: cover; width: 100%; height: 300px;">
                    @else
                        <div class="furniture-image no-image d-flex align-items-center justify-content-center text-muted">
                            No Image
                        </div>
                    @endif
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $set->name }}</h5>
                    <h5 class="card-title">Rp {{ number_format($set->harga, 0, ',', '.') }}</h5>
                    <p class="text-muted">{{ Str::limit($set->deskripsi, 50) }}</p>
                    <a href="{{ route('userfurnitureset.show', $set) }}" class="btn btn-primary">Beli</a>
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
