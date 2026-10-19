<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

// menampilkan data diri Anda
Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Ravelio Genesaret Simanjuntak',
        'kelas'=> 'D4SM-48-04',
        'nim' => '707082400056',
        'jurusan' => 'Teknologi Rekayasa Multimedia'
    ]);
})->name('about');