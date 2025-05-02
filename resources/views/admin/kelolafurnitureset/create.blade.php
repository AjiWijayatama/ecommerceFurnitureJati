@extends('layouts.admin')

@section('title')
    Tambah Furniture Set
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Furniture Set</h4>
                <a href="{{ route('furnitureset.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('furnitureset.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nama Furniture Set</label>
                        <input type="text" name="name" id="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="4"
                                  class="form-control @error('deskripsi') is-invalid @enderror"
                                  required>{{ old('deskripsi') }}</textarea>
                        @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" step="0.01"
                        class="form-control @error('harga') is-invalid @enderror"
                        value="{{ old('harga') }}" required>
                        @error('harga') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <label for="images">Gambar Produk</label>
                    <input type="file" name="images[]" id="images" class="form-control @error('images.*') is-invalid @enderror" multiple>           

                    <button type="submit" class="btn btn-primary">Simpan Furniture Set</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
