<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): View {
    return view('pages.beranda');
})->name('beranda');

Route::get('/about', function (): View {
    return view('pages.about', [
        'nama' => 'Ravelio Genesaret Simanjuntak',
        'kelas' => 'D4SM-48-04',
        'nim' => '707082400056',
    ]);
})->name('about');

Route::get('/home', function (): View {
    return view('pages.home');
})->name('home');

Route::get('/profile', function (): View {
    return view('pages.profile');
})->name('profile');

Route::redirect('/beranda', '/', 302);