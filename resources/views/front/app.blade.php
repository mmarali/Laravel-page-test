<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Strona Główna')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link do CSS -->
</head>
<body>
<!-- Sekcja Top -->
<header>
    <div style="background-color: #f8f9fa; padding: 15px; text-align: center;">
        <h1>Moja Strona</h1>
        <nav>
            <a href="/">Home</a> |
            <a href="/about">O nas</a> |
            <a href="/contact">Kontakt</a>
        </nav>
    </div>
</header>

<!-- Sekcja Content -->
<main style="padding: 20px;">
    @yield('content')
</main>

<!-- Sekcja Footer -->
<footer>
    <div style="background-color: #343a40; color: #ffffff; text-align: center; padding: 10px;">
        <p>&copy; 2024 Moja Strona. Wszelkie prawa zastrzeżone.</p>
    </div>
</footer>
</body>
</html>
