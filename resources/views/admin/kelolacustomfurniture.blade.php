@extends('layouts.admin')

@section('title', 'Kelola Custom Furniture')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Kelola Permintaan Custom Furniture</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Contoh data statis --}}
                <tr>
                    <td>1</td>
                    <td>Andi</td>
                    <td>Lemari jati ukuran custom dengan 4 pintu dan ukiran klasik</td>
                    <td>
                        <a href="{{ asset('storage/custom_photos/lemari.jpg') }}" target="_blank">
                            <img src="{{ asset('storage/custom_photos/lemari.jpg') }}" alt="Foto Custom" width="70" class="img-thumbnail">
                        </a>
                    </td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    <td>24 Apr 2025</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Detail</a><br>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Siti</td>
                    <td>Meja makan dengan ukuran 200x100 cm, warna natural</td>
                    <td>
                        <a href="{{ asset('storage/custom_photos/meja.jpg') }}" target="_blank">
                            <img src="{{ asset('storage/custom_photos/meja.jpg') }}" alt="Foto Custom" width="70" class="img-thumbnail">
                        </a>
                    </td>
                    <td><span class="badge bg-success">Selesai</span></td>
                    <td>22 Apr 2025</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Detail</a><br>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
