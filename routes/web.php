<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Muhamad Nabil']);
});

Route::get('/blog', function () {
    return view('blog', ['judul' => 'Kicau']);
});

Route::get('/contact', function () {
    return view('contact');
});
