<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

// menampilkan data diri Anda
Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Sendy Prayogo',
        'kelas'=> 'TSM-00',
        'nim' => '0123456789',
        'jurusan' => 'Teknologi Rekayasa Multimedia'
    ]);
})->name('about');