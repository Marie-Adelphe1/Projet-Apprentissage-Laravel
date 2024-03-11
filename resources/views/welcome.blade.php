<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Votre Site E-commerce</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: white;
            color: blue;
        }
        header {
            background-color: #4285f4;
            color: #fff;
            padding: 20px 0;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        .hero {
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            color: blue;
            padding: 100px 0;
            text-align: center;
        }
        .hero h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        footer {
            background-color: #4285f4;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="mb-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Votre Site E-commerce</h1>
                <nav>
                    <ul class="list-inline">
                        
                        @if (Route::has('login'))
                            @auth
                                <li class="list-inline-item"><a class="text-white text-decoration-none" href="{{ url('/dashboard') }}">Dashboard</a></li>
                            @else
                                <li class="list-inline-item"><a class="text-white text-decoration-none" href="{{ route('login') }}">Log in</a></li>
                                @if (Route::has('register'))
                                    <li class="list-inline-item"><a class="text-white text-decoration-none" href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endif
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <section class="hero">
        <div class="container">
            <h2>Bienvenue sur Votre Site E-commerce</h2>
            <p>Découvrez notre large sélection de produits de haute qualité</p>
            <a href="{{ route('basket') }}" class="btn btn-primary btn-lg">Explorer</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Votre Site E-commerce. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
