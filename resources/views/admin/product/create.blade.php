@extends('layouts.admin')

@section('title')
    Tambah Produk
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Tambah Produk</h4>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nama Produk</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="ukuran">Ukuran Produk</label>
                            <input type="text" name="ukuran" id="ukuran" class="form-control @error('ukuran') is-invalid @enderror" value="{{ old('ukuran') }}" required>
                            @error('ukuran') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" required>
                            @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror" required>
                                <option value="minimalis" {{ old('kategori') == 'minimalis' ? 'selected' : '' }}>Minimalis</option>
                                <option value="ukiran" {{ old('kategori') == 'ukiran' ? 'selected' : '' }}>Ukiran</option>
                            </select>
                            @error('kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}" required>
                            @error('harga') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old('stok') }}" required>
                            @error('stok') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="discount">Diskon (%)</label>
                            <input type="number" name="discount" id="discount" class="form-control @error('discount') is-invalid @enderror" value="{{ old('discount') }}">
                            @error('discount') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="images">Gambar Produk</label>
                            <input type="file" name="images[]" id="images" class="form-control @error('images.*') is-invalid @enderror" multiple style="opacity:1; position:static;">
                            @error('images.*') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="furniture_set_id">Termasuk dalam Furniture Set</label>
                            <select name="furniture_set_id" id="furniture_set_id" class="form-control @error('furniture_set_id') is-invalid @enderror">
                                <option value="">-- Tidak Masuk Set --</option>
                                @foreach ($furnitureSets as $set)
                                    <option value="{{ $set->id }}" {{ old('furniture_set_id') == $set->id ? 'selected' : '' }}>
                                        {{ $set->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('furniture_set_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-group" id="minStokWrapper" style="display: none;">
                            <label for="minimal_stok_for_furniture_set">Minimal Stok untuk Furniture Set</label>
                            <input type="number" name="minimal_stok_for_furniture_set" id="minimal_stok_for_furniture_set" class="form-control @error('minimal_stok_for_furniture_set') is-invalid @enderror" value="{{ old('minimal_stok_for_furniture_set') }}">
                            @error('minimal_stok_for_furniture_set') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        const setDropdown = $('#furniture_set_id');
        const stokWrapper = $('#minStokWrapper');

        function toggleStokField() {
            if (setDropdown.val()) {
                stokWrapper.show();
            } else {
                stokWrapper.hide();
                $('#minimal_stok_for_furniture_set').val('');
            }
        }

        setDropdown.on('change', toggleStokField);
        toggleStokField(); // initial check
    });
</script>
@endsection