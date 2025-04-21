@extends('layouts.admin')

@section('tittle')
    Daftar Produk
@endsection

@section('content')
@if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show text-white" role="alert" onclick="this.style.display='none';">
        {{ session('success') }}
    </div>
@endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Produk</h4>
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">Tambah Produk</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>Name</th>
                                <th>Deskripsi</th>
                                <th>Ukuran</th>
                                <th>Kategori</th>
                                <th class="text-right">Harga</th>
                                <th>Stok</th>
                                <th>Diskon</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->deskripsi }}</td>
                                        <td>{{ $product->ukuran }}</td> <!-- Menampilkan ukuran produk -->
                                        <td>{{ $product->kategori }}</td>
                                        <td class="text-right">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                                        <td>{{ $product->stok }}</td>
                                        <td>{{ $product->discount }}%</td>
                                        <td>
                                            @if($product->images->isNotEmpty())
                                                <img src="{{ Storage::url($product->images->first()->link) }}" alt="Product Image" width="50">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">Lihat</a>
                                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
