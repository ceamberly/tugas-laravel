
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Laravel')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f4f4;
        }

        header {
            background: #2563eb;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background: #1e40af;
            padding: 12px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
        }

        main {
            max-width: 1000px;
            margin: 25px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }

        footer {
            text-align: center;
            padding: 15px;
            color: #666;
        }

        @yield('styles')
    </style>
</head>
<body>

    <header>
        <h1>Aplikasi Laravel</h1>
    </header>

    <nav>
        <a href="/">Beranda</a>
        <a href="/daftar/mahasiswa">Mahasiswa</a>
        <a href="/kalkulator/segitiga">Kalkulator</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2026 Aplikasi Laravel
    </footer>

</body>
</html>
