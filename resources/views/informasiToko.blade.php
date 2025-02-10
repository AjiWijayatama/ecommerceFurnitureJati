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
        .story-section {
            background: white;
            color: black;
            padding: 50px;
            text-align: center;
            position: relative;
        }
        .story-section h3 {
            font-size: 28px;
            font-weight: bold;
            color: #ff1493;
            text-shadow: 2px 2px 0px black;
            display: inline-block;
            padding: 5px 15px;
        }
        .story-section img {
            max-width: 100%;
            margin-top: 20px;
        }
        .about-section {
            background: #ff1493;
            padding: 80px 0;
            text-align: center;
            color: white;
            position: relative;
        }
        .about-box {
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
        .about-box::before {
            content: "ABOUT";
            position: absolute;
            top: -25px;
            left: 20px;
            background: black;
            color: white;
            padding: 5px 15px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 5px;
            text-shadow: 2px 2px 0px white;
        }
        .logo {
            font-size: 40px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo img {
            width: 50px;
            margin-right: 10px;
        }
        .logo span {
            font-size: 42px;
        }
        .logo .pink {
            color: #ff1493;
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
                <h2 class="h2">Informasi Toko</h2>
    
                <!-- The Story Section -->
                <div class="story-section">
                    <h3>THE STORY.</h3>
                    <p>
                        Two bestfriends <strong>Vincent Rompies</strong> and <strong>Deddy Mahendra Desta</strong>, shared the same interests, 
                        dreams & passions since childhood. The duo have been given the opportunity to work together 
                        in the early 2000s and now in their 30th year of friendship, they’ve created a platform to 
                        inspire youngsters to be themselves and proud to share and express themselves through art and music.
                    </p>
                    <img src="https://via.placeholder.com/700x300" alt="Vincent & Desta">
                </div>
    
                <!-- About Section -->
                <div class="about-section">
                    <div class="about-box">
                        <div class="logo">
                            <img src="https://via.placeholder.com/50" alt="Vindes Logo">
                            <span>VIN</span><span class="pink">DES.</span>
                        </div>
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