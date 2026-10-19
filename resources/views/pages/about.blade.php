@extends('pages.beranda')

@section('konten')
    <h1>Selamat Datang di Halaman About</h1>

    <div class="card">
        <div>
            <table class="table table-bordered mt-3">
            <tr><th class="bg-dark text-white">Nama</th> <td>{{ $nama }}</td></tr>
            <tr><th class="bg-dark text-white">Kelas</th> <td>{{ $kelas }}</td></tr>
            <tr><th class="bg-dark text-white">NIM</th> <td>{{ $nim }}</td></tr>
            <tr><th class="bg-dark text-white">Jurusan</th> <td>{{ $jurusan }}</td></tr>
            </table>
        </div>
        <div>
        <h3 class="fw-bold mt-4">Riwayat Pendidikan</h3>
        <table class="table table-bordered mt-2">
          <tr><th class="bg-dark text-white">Jenjang</th><th>Sekolah</th><th>Tahun</th></tr>
          <tr><td>SMA</td><td>SMAK 7 Penabur Jakarta</td><td>2021–2024</td></tr>
          <tr><td>Kuliah</td><td>Telkom University</td><td>2024–Sekarang</td></tr>
        </table>
        </div>
    </div>
@endsection