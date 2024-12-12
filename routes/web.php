<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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

Route::get('/service', function () {
    return view('service'); 
});

Route::get('/inputReview', function () {
    return view('inputReview'); 
});


Route::get('/', [PageController::class, 'showHomepage'])->name('homepage'); // Mengarah ke homepage.blade.php
Route::get('/login', [PageController::class, 'showLogin'])->name('login'); // Mengarah ke login.blade.php
Route::get('/order-form', [PageController::class, 'showOrderForm'])->name('order-form'); // Mengarah ke orderForm.blade.php
Route::get('/pembayaran', [PageController::class, 'showPembayaran'])->name('pembayaran'); // Mengarah ke pembayaran.blade.php
Route::get('/done', [PageController::class, 'showDone'])->name('done'); // Mengarah ke done.blade.php
Route::get('/signin', [PageController::class, 'showSignin'])->name('signin'); // Mengarah ke signin.blade.php
Route::get('/tentang-kami', [PageController::class, 'showTentangKami'])->name('tentang-kami'); // Mengarah ke tentangKami.blade.php
Route::get('/homepage-login', [PageController::class, 'showHomepageLogin'])->name('homepage-login'); // Mengarah ke homepageLogin.blade.php
Route::get('/service', [PageController::class, 'showService'])->name('service'); // Mengarah ke homepageLogin.blade.php
Route::get('/inputReview', [PageController::class, 'showinputReview'])->name('inputReview');