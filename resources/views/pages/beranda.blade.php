<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
</head>
<body>
    <nav aria-label="Navigasi utama">
        <a href="{{ route('beranda') }}">Beranda</a>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('profile') }}">Profile</a>
    </nav>

    <main>
        @section('konten')
            <h1>Selamat Datang</h1>
            <p>Ini adalah halaman beranda untuk belajar Laravel.</p>
            <p>Di sini saya belajar membuat halaman web sederhana menggunakan Blade.</p>
        @endsection

        @yield('konten')
    </main>
</body>
</html>
