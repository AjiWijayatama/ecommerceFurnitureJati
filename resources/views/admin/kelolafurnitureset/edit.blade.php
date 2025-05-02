@extends('layouts.admin')

@section('title')
    Edit Furniture Set
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Furniture Set</h4>
                <a href="{{ route('furnitureset.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('furnitureset.update', $furnitureset) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nama Furniture Set</label>
                        <input type="text" name="name" id="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name', $furnitureset->name) }}" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="4"
                                  class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi', $furnitureset->deskripsi) }}</textarea>
                        @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" step="0.01"
                               class="form-control @error('harga') is-invalid @enderror"
                               value="{{ old('harga', $furnitureset->harga) }}" required>
                        @error('harga') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label>Gambar Saat Ini</label>
                        <div class="d-flex flex-wrap mb-3">
                            @forelse($furnitureset->images as $img)
                                <div class="mr-2 mb-2">
                                    <img src="{{ Storage::url($img->link) }}" alt="" width="80" class="rounded">
                                </div>
                            @empty
                                <p class="text-muted">Belum ada gambar</p>
                            @endforelse
                        </div>
                        <label for="images">Upload Gambar Baru (opsional)</label>
                        <input type="file" name="images[]" id="images" multiple
                               class="form-control @error('images.*') is-invalid @enderror">
                        @error('images.*')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Perbarui Furniture Set</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
