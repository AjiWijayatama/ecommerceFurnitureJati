@extends('layouts.user')

@section('css')
<style>
    .classic-card {
        background-color: #fefefe;
        border: 1px solid #ddd;
        font-family: 'Georgia', serif;
    }

    .classic-card .card-header {
        background-color: #5a4c42;
        color: #fff;
        font-size: 1.25rem;
        font-weight: bold;
        border-bottom: 2px solid #d6ccc2;
    }

    .classic-card .card-body {
        background-color: #fdfaf6;
    }

    .classic-label {
        font-weight: 600;
        color: #4e342e;
    }

    .btn-outline-primary {
        border-color: #5a4c42;
        color: #5a4c42;
    }

    .btn-outline-primary:hover {
        background-color: #5a4c42;
        color: white;
    }

    .form-control:focus {
        border-color: #5a4c42;
        box-shadow: 0 0 0 0.2rem rgba(90, 76, 66, 0.25);
    }
</style>
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center py-5">
    <div class="card classic-card shadow rounded w-100" style="max-width: 600px;">
        <div class="card-header">
            Edit Profil
        </div>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
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

            <form action="{{ route('profile.update') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label classic-label">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label classic-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label classic-label">Alamat</label>
                    <textarea class="form-control" name="address">{{ old('address', $user->address) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label classic-label">Nomor HP</label>
                    <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}">
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label classic-label">Password Baru (opsional)</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label classic-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('profile.show') }}" class="btn btn-outline-secondary">Batal</a>
                    <button type="submit" class="btn btn-outline-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
