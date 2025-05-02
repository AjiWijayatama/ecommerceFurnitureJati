@extends('layouts.admin')

@section('title')
    Edit Produk
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Produk</h4>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    
                        <div class="form-group">
                            <label for="name">Nama Produk</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ukuran">Ukuran Produk</label>
                            <input type="text" name="ukuran" id="ukuran" class="form-control @error('ukuran') is-invalid @enderror" value="{{ old('ukuran', $product->ukuran) }}" required>
                            @error('ukuran')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $product->slug) }}" required>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror" required>
                                <option value="minimalis" {{ old('kategori', $product->kategori) == 'minimalis' ? 'selected' : '' }}>Minimalis</option>
                                <option value="ukiran" {{ old('kategori', $product->kategori) == 'ukiran' ? 'selected' : '' }}>Ukiran</option>
                            </select>
                            @error('kategori')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga', $product->harga) }}" required>
                            @error('harga')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old('stok', $product->stok) }}" required>
                            @error('stok')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="discount">Diskon (%)</label>
                            <input type="number" name="discount" id="discount" class="form-control @error('discount') is-invalid @enderror" value="{{ old('discount', $product->discount) }}">
                            @error('discount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="images">Gambar Produk</label>
                            <input type="file" name="images[]" id="images" class="form-control @error('images.*') is-invalid @enderror" multiple>
                            <small class="form-text text-muted">Pilih beberapa gambar untuk produk. Maksimal 2MB per gambar.</small>
                            @error('images.*')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="furniture_set_id">Termasuk Set Furniture</label>
                            <select name="furniture_set_id" id="furniture_set_id" class="form-control @error('furniture_set_id') is-invalid @enderror">
                                <option value="">-- Tidak Termasuk Set --</option>
                                @foreach ($furnitureSets as $set)
                                    <option value="{{ $set->id }}" {{ old('furniture_set_id', $product->furniture_set_id) == $set->id ? 'selected' : '' }}>
                                        {{ $set->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('furniture_set_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="minimal_stok_for_furniture_set">Minimal Stok untuk Set Furniture</label>
                            <input type="number" name="minimal_stok_for_furniture_set" id="minimal_stok_for_furniture_set"
                                class="form-control @error('minimal_stok_for_furniture_set') is-invalid @enderror"
                                value="{{ old('minimal_stok_for_furniture_set', $product->minimal_stok_for_furniture_set) }}">
                            @error('minimal_stok_for_furniture_set')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection