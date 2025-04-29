<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Toko</title>

    <!-- Fonts & Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #FAF7F0;
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            background-color: #4B3F2F;
            min-height: 100vh;
            padding: 20px;
            color: white;
        }

        .sidebar .brand {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: bold;
            color: #CBB279;
            margin-bottom: 30px;
            display: block;
            text-decoration: none;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 12px 0;
            font-size: 16px;
            font-weight: 500;
        }

        .sidebar a:hover {
            background-color: #CBB279;
            color: #4B3F2F;
            padding-left: 10px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .content {
            padding: 40px;
        }

        h2 {
            font-family: 'Playfair Display', serif;
            color: #4B3F2F;
            border-bottom: 2px dashed #CBB279;
            display: inline-block;
            padding-bottom: 5px;
            margin-bottom: 30px;
        }

        .story-section {
            background: white;
            color: #4B3F2F;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .story-section p {
            font-size: 18px;
            line-height: 1.7;
            margin: 0;
        }

        @media (max-width: 768px) {
            .content {
                padding: 20px;
            }

            .story-section {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <a href="{{ url('/') }}" class="brand">INDFurniture</a>
                <a href="informasiToko">Informasi Toko</a>
                <a href="kontak">Kontak</a>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 content">
                <h2>Kontak</h2>
                <div class="story-section">
                    <p>
                        <strong>
                            Kontak: 08141314
                        </strong>
                    </p>
                    <p>
                        <strong>
                            Social Media: 
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
