<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igracias KW</title>
</head>
<body>
    <header><h1>Portal Igracias KW</h1>
    <nav aria-label="Navigasi utama">
        <a href="{{ route('profil2') }}">Mahasiswa</a>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('tentang') }}">Tentang</a>
    </nav>
    </header>
    <main> 
        @yield('content')
    </main>
</body>
</html>
