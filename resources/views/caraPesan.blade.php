<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />  
    <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])  
    <!-- Styles / Scripts -->
    <style>
        body {
            background-color: #222;
            color: white;
        }
        .sidebar {
            background-color: #1d1d1d;
            min-height: 100vh;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            font-size: 16px;
        }
        .sidebar a:hover {
            color: #ff1493;
        }
        .content {
            padding: 40px;
        }
        .caraPesan-section {
            background: white;
            color: black;
            padding: 50px;
            text-align: center;
            position: relative;
        }
        .caraPesan-section h3 {
            font-size: 28px;
            font-weight: bold;
            color: #ff1493;
            text-shadow: 2px 2px 0px black;
            display: inline-block;
            padding: 5px 15px;
        }
        .caraPesan-section img {
            max-width: 100%;
            margin-top: 20px;
        }
    </style>
        
</head> 
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <a href="caraPesan">Cara Pesan</a>
                <a href="informasiToko">Informasi Toko</a>
                <a href="statusPengerjaan">Status Pengerjaan</a>
                <a href="kontak">Kontak</a>
            </div>
    
            <!-- Main Content -->
            <div class="col-md-9 content">
                <h2 class="h2">Cara Pesan</h2>
    
                <!-- The caraPesan Section -->
                <div class="caraPesan-section">
                    <h3>Langkah-langkah Pemesanan Perawatan Furniture.</h3>
                    <ol class="custom-ordered-list ">
                        <li><strong>Konsultasi dengan Profesional Kami</strong><br>Kami akan membantu Anda merencanakan dan memilih desain yang tepat sesuai kebutuhan Anda.</li>
                        
                        <li><strong>Kirim Desain dan Gambar</strong><br>Setelah konsultasi,kami akan mengirimkan desain dan gambar yang sudah kami sesuaikan dengan kebutuhan dan keinginan Anda</li>
                        
                        <li><strong>Pembayaran Deposit</strong><br>Lakukan pembayaran deposit dan kirimkan bukti transaksi kepada kami. Ini sebagai tanda jadi bahwa pesanan Anda telah kami terima.</li>
                        
                        <li><strong>Proses Produksi</strong><br>Setelah deposit diterima, kami akan memulai proses produksi.</li>
                        
                        <li><strong>Pelunasan Pembayaran</strong><br>Setelah produksi selesai, Anda dapat melunasi sisa pembayaran sebelum pengiriman.</li>
                        
                        <li><strong>Pengiriman ke Alamat Anda</strong><br>Setelah pelunasan, kami akan segera mengirimkan furniture pesanan Anda ke alamat yang telah ditentukan.</li>
                    </ol>
                </div>
                <hr>
                <div class="caraPesan-section">
                    <h3>Langkah-langkah Pemesanan Custom Furniture.</h3>
                    <ol class="custom-ordered-list ">
                        <li><strong>Konsultasi dengan Profesional Kami</strong><br>Kami akan membantu Anda merencanakan dan memilih desain yang tepat sesuai kebutuhan Anda.</li>
                        
                        <li><strong>Kirim Desain dan Gambar</strong><br>Setelah konsultasi,kami akan mengirimkan desain dan gambar yang sudah kami sesuaikan dengan kebutuhan dan keinginan Anda</li>
                        
                        <li><strong>Pembayaran Deposit</strong><br>Lakukan pembayaran deposit dan kirimkan bukti transaksi kepada kami. Ini sebagai tanda jadi bahwa pesanan Anda telah kami terima.</li>
                        
                        <li><strong>Proses Produksi</strong><br>Setelah deposit diterima, kami akan memulai proses produksi.</li>
                        
                        <li><strong>Pelunasan Pembayaran</strong><br>Setelah produksi selesai, Anda dapat melunasi sisa pembayaran sebelum pengiriman.</li>
                        
                        <li><strong>Pengiriman ke Alamat Anda</strong><br>Setelah pelunasan, kami akan segera mengirimkan furniture pesanan Anda ke alamat yang telah ditentukan.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
</body>
</html>