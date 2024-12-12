<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('homepage'); // Mengarah ke homepage.blade.php
});

// Halaman Login
Route::get('/login', function () {
    return view('login'); // Mengarah ke login.blade.php
});

// Halaman Order Form
Route::get('/order-form', function () {
    return view('orderForm'); // Mengarah ke orderForm.blade.php
});

// Halaman Pembayaran
Route::get('/pembayaran', function () {
    return view('pembayaran'); // Mengarah ke pembayaran.blade.php
});

// Halaman Selesai
Route::get('/done', function () {
    return view('done'); // Mengarah ke done.blade.php
});

// Halaman Sign In
Route::get('/signin', function () {
    return view('signin'); // Mengarah ke signin.blade.php
});

// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('tentangKami'); // Mengarah ke tentangKami.blade.php
});

// Halaman Homepage Login (opsional, jika berbeda dengan homepage)
Route::get('/homepage-login', function () {
    return view('homepageLogin'); // Mengarah ke homepageLogin.blade.php
});
