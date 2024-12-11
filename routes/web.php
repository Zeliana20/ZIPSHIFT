<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/homepage', function () {
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

// Halaman Pesan Layanan
Route::get('/pesan-layanan', function () {
    return view('pesanLyn'); // Mengarah ke pesanLyn.blade.php
});

// Halaman Service
Route::get('/service', function () {
    return view('service'); // Mengarah ke service.blade.php
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
