@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Profil Saya</h2>
    <div class="card">
        <div class="card-header">
            <h4>Detail Profil</h4>
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Alamat:</strong> {{ $user->address ?? 'Belum diisi' }}</p>
            <p><strong>Nomor Telepon:</strong> {{ $user->phone_number ?? 'Belum diisi' }}</p>
            <a href="{{ route('user.profile.edit') }}" class="btn btn-primary">Edit Profil</a>
        </div>
    </div>
</div>
@endsection
