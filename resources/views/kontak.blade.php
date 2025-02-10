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

        .kontak-section {
            background: #ff1493;
            padding: 80px 0;
            text-align: center;
            color: white;
            position: relative;
        }
        .kontak-box {
            background: white;
            color: black;
            padding: 40px;
            border-radius: 15px;
            display: inline-block;
            max-width: 800px;
            font-size: 18px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border: 2px solid black;
            position: relative;
        }
        .kontak-box::before {
            content: "Kontak";
            position: absolute;
            top: -25px;
            left: 20px;
            background: black;
            color: white;
            padding: 5px 15px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 5px;
            text-shadow: 1px 2px 0px white;
        }
        
    </style>
</head>
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
                <h2 class="h2">Kontak</h2>
    
                <!-- kontak Section -->
                <div class="kontak-section">
                    <div class="kontak-box">
                        
                        <p>
                            <strong>VINDES</strong> is a digital media and a platform where youngsters are able to 
                            find their happiness, empower aspiration, collaborate with each other, and showcase their work. 
                            We have a vision to contribute in creative and art industry of Indonesian youngsters 
                            for create a productive and responsible generation.
                        </p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</body>
</html>