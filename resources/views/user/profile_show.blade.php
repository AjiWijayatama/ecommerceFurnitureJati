@extends('layouts.user')

@section('css')
<style>
    .classic-card {
        background-color: #fefefe;
        border: 1px solid #ddd;
        font-family: 'Georgia', serif;
    }

    .classic-card .card-header {
        background-color: #5a4c42; /* warna coklat klasik */
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
        color: #4e342e; /* dark brown */
    }

    .classic-value {
        font-style: italic;
        color: #6c757d;
    }

    .btn-outline-primary {
        border-color: #5a4c42;
        color: #5a4c42;
    }

    .btn-outline-primary:hover {
        background-color: #5a4c42;
        color: white;
    }

    .btn-outline-secondary {
        border-color: #8d8d8d;
        color: #6c757d;
    }

    .btn-outline-secondary:hover {
        background-color: #8d8d8d;
        color: white;
    }
</style>
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center py-5">
    <div class="card classic-card shadow rounded w-100" style="max-width: 600px;">
        <div class="card-header">
            Data Pribadi
        </div>
        <div class="card-body">
            <div class="mb-3">
                <span class="classic-label">Nama:</span>
                <p class="classic-value mb-0">{{ $user->name }}</p>
            </div>
            <div class="mb-3">
                <span class="classic-label">Email:</span>
                <p class="classic-value mb-0">{{ $user->email }}</p>
            </div>
            <div class="mb-3">
                <span class="classic-label">Alamat:</span>
                <p class="classic-value mb-0">{{ $user->address ?? 'Belum diisi' }}</p>
            </div>
            <div class="mb-3">
                <span class="classic-label">Nomor Telepon:</span>
                <p class="classic-value mb-0">{{ $user->phone_number ?? 'Belum diisi' }}</p>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('index') }}" class="btn btn-outline-secondary">Kembali</a>
                <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary">Edit Profil</a>
            </div>
        </div>
    </div>
</div>
@endsection
