@extends('layouts.admin')

@section('title')
    Daftar Furniture Set
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
                    <h4 class="card-title">Kelola Furniture Set</h4>
                    <a href="{{ route('furnitureset.create') }}" class="btn btn-primary btn-sm">Tambah Produk</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th class="text-right">Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($furniture_sets as $set)
                                    <tr>
                                        <td>{{ $set->name }}</td>
                                        <td>{{ Str::limit($set->deskripsi, 50) }}</td>
                                        <td class="text-right">Rp {{ number_format($set->harga, 0, ',', '.') }}</td>
                                        <td>
                                            @if($set->images->isNotEmpty())
                                                <img src="{{ Storage::url($set->images->first()->link) }}" alt="Gambar Set" width="50">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('furnitureset.show', $set) }}" class="btn btn-info btn-sm">Lihat</a>
                                            <a href="{{ route('furnitureset.edit', $set) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('furnitureset.destroy', $set) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus furniture set ini?')">Hapus</button>
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
