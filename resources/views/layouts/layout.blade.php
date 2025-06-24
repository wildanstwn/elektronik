<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Situs Produk')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <style>
        .navbar {
            background-color: #8FBC8F;
        }
        .navbar-brand, .nav-link {
            color: #fff !important; 
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #ddd !important; 
        }
        h1 {
            font-size: 2.5em;
        }
        .footer {
            background-color: #8FBC8F;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: relative;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Informasi Produk Elektronik</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produk.index') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produk.tv') }}">TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produk.kulkas') }}">Kulkas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produk.ac') }}">AC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profil">Profil</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <div class="footer">
        <p>&copy; 2024 Informasi Produk Elektronik. All Rights Reserved.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
