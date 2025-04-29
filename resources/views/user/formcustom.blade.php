@extends('layouts.user')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5 fw-bold" style="font-family: 'Playfair Display', serif; color: #5C3D2E;">
        Form Custom Furniture
    </h2>

    <div class="card shadow-sm border-0 p-4 rounded-4" style="background-color: #F8F4EF;">
        <form id="customForm" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" class="form-control shadow-sm" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Nomor WhatsApp <span class="text-danger">*</span></label>
                <input type="tel" class="form-control shadow-sm" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                <textarea class="form-control shadow-sm" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Jenis Furniture<span class="text-danger">*</span></label>
                <input type="text" class="form-control shadow-sm" id="type" name="type" placeholder="Contoh: Meja, Lemari, Kursi" required>
            </div>

            <div class="mb-3">
                <label for="size" class="form-label">Ukuran (P x L x T)<span class="text-danger">*</span></label>
                <input type="text" class="form-control shadow-sm" id="size" name="size" placeholder="Contoh: 200 x 60 x 75 cm" required>
            </div>

            <div class="mb-3">
                <label for="finishing" class="form-label">Finishing / Warna<span class="text-danger">*</span></label>
                <input type="text" class="form-control shadow-sm" id="finishing" name="finishing" placeholder="Contoh: Natural, Doff, Hitam" required>
            </div>

            <div class="mb-3">
                <label for="deadline" class="form-label">Kapan Dibutuhkan? <span class="text-danger">*</span></label>
                <input type="date" class="form-control shadow-sm" id="deadline" name="deadline" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Kebutuhan</label>
                <textarea class="form-control shadow-sm" id="description" name="description" rows="4"></textarea>
            </div>
            
            <div class="text-end">
                <button type="submit" class="btn btn-outline-dark rounded-pill px-4 py-2">
                    Kirim Permintaan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('css')
<style>
    body {
        background-color: #F3EFEA;
    }

    h2 {
        border-bottom: 2px dashed #CBB279;
        display: inline-block;
        padding-bottom: 10px;
    }

    .form-label {
        font-family: 'Georgia', serif;
        font-weight: 600;
        color: #4B3F2F;
    }

    .form-control {
        background-color: #fffdf8;
        border-color: #d5c7ae;
    }

    .form-control:focus {
        border-color: #a89274;
        box-shadow: 0 0 0 0.15rem rgba(168, 146, 116, 0.25);
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
@endsection

@section('js')
<script>
    document.getElementById('customForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Tombol submit
    var submitButton = event.target.querySelector('button[type="submit"]');

    // Ambil data dari form
    var name = document.getElementById('name').value.trim();
    var phone = document.getElementById('phone').value.trim();
    var address = document.getElementById('address').value.trim();
    var type = document.getElementById('type').value.trim();
    var size = document.getElementById('size').value.trim();
    var finishing = document.getElementById('finishing').value.trim();
    var deadline = document.getElementById('deadline').value.trim();
    var description = document.getElementById('description').value.trim();

    // Validasi
    if (!name || !phone || !address || !type || !size || !finishing || !deadline) {
        alert('Mohon isi semua field yang wajib diisi!');
        return;
    }

    // Kasih efek loading di tombol
    var originalButtonText = submitButton.innerHTML;
    submitButton.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Mengirim...';
    submitButton.disabled = true;

    // Isi pesan WhatsApp
    var message = 
        "*Terima kasih sudah mengisi form untuk pemesanan custom furniture di Furniture Indonesia. Kami sudah menerima detail yang Anda kirimkan, dan tim kami akan segera memprosesnya. Berikut adalah informasi yang kami terima:*%0A" +
        "Nama: " + name + "%0A" +
        "Nomor WA: " + phone + "%0A" +
        "Alamat: " + address + "%0A" +
        "Jenis Furniture: " + type + "%0A" +
        "Ukuran: " + size + "%0A" +
        "Finishing/Warna: " + finishing + "%0A" +
        "Deadline: " + deadline + "%0A" +
        (description ? "Deskripsi: " + description + "%0A" : "");

    // Nomor WhatsApp tujuan
    var adminPhoneNumber = "6281314426814"; // GANTI sesuai nomor admin

    // Buka WhatsApp
    var waLink = "https://wa.me/" + adminPhoneNumber + "?text=" + message;

    // Delay dikit biar user lihat loading sebentar
    setTimeout(function() {
        window.location.href = waLink;
        // Reset tombol (kalau mau tetap di form misalnya)
        submitButton.innerHTML = originalButtonText;
        submitButton.disabled = false;
    }, 1000);
});
</script>
@endsection
