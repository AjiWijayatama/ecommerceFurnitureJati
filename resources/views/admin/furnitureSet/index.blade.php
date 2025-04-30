@extends('layouts.admin')

@section('tittle')
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
                    <a href="{{ route('furnitureset.create') }}" class="btn btn-primary btn-sm">Tambah Furniture Set</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>Name</th>
                                <th>Deskripsi</th>
                                <th class="text-right">Harga</th>
                                <th>Diskon</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($furnitureset as $set)
                                    <tr>
                                        <td>{{ $set->name }}</td>
                                        <td>{{ $set->deskripsi }}</td>
                                        <td class="text-right">Rp {{ number_format($set->harga, 0, ',', '.') }}</td>
                                        <td>{{ $set->discount }}%</td>
                                        <td>
                                            <a href="{{ route('furnitureset.show', $set->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                            <a href="{{ route('furnitureset.edit', $set->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('furnitureset.destroy', $set->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus furniture set ini?')">Hapus</button>
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
