@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profil</h2>
    <div class="card">
        <div class="card-header">
            <h4>Form Edit Profil</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('user.profile.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $user->address ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password Baru</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password baru">
                </div>
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
