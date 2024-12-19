<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SurveyBookingController;
use App\Http\Controllers\BookLayananController;
use App\Http\Controllers\BayarLayananController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;


// Halaman utama (sebelum login)
Route::get('/', function () {
    return view('homepage'); // Homepage awal
})->name('homepage');

// Route untuk register
Route::middleware('guest')->group(function () {
    // Menampilkan form register
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    // Menangani proses register
    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->name('register.post');
    // Menampilkan form login
    Route::get('/login', function () {
        return view('login'); // Menampilkan halaman login
    })->name('login');
    // Menangani proses login
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->name('login.post');
});

// Route yang membutuhkan autentikasi
Route::middleware('auth')->group(function () {
    // Homepage setelah login
    Route::get('/homepage-login', function () {
        return view('homepageLogin'); // Homepage setelah login
    })->name('homepage-login');

    // Route untuk layanan setelah login
    Route::get('/service', [ServiceController::class, 'index'])->name('service');

    // Route untuk profil
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    // Logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

// Redirect setelah registrasi berhasil
Route::get('/after-register', function () {
    return redirect()->route('homepage-login'); // Mengarahkan ke homepage-login
})->name('after-register');

Route::middleware('auth')->group(function () {
    Route::get('/order-form', function () {
        return view('orderForm'); // Sesuaikan dengan nama file Blade view
    })->name('order-form');
});

// Halaman Pembayaran
Route::get('/pembayaran', function () {
    return view('pembayaran'); // Mengarah ke pembayaran.blade.php
});


// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('tentangKami'); // Mengarah ke tentangKami.blade.php
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/inputReview', function () {
    return view('inputReview');
});

Route::post('/upload', function () {
    if (request()->hasFile('uploaded_file')) {
        $file = request()->file('uploaded_file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
    }

    return redirect()->route('done');
})->name('upload');

Route::get('/done', function () {
    return view('done');
})->name('done');

Route::get('/pembayaranSurvei', function () {
    return view('pembayaranSurvei');
});

Route::get('/doneSurvey', function () {
    return view('doneSurvey');
});

Route::get('/doneSurvey', [PaymentController::class, 'doneSurvey'])->name('doneSurvey');
Route::post('/doneSurvey', [PaymentController::class, 'doneSurvey'])->name('doneSurvey.post');


// Menampilkan form review
Route::get('/review', [ReviewController::class, 'create'])->name('review.create');

// Menyimpan review
Route::post('/submit-review', [ReviewController::class, 'store'])->name('submit-review');

// Setelah submit, arahkan ke route after-review
Route::get('/after-review', function () {
    return redirect()->route('homepage-login');
})->name('after-review');

Route::get('/', [PageController::class, 'showHomepage'])->name('homepage'); // Mengarah ke homepage.blade.php
Route::get('/order-form', [PageController::class, 'showOrderForm'])->name('order-form'); // Mengarah ke orderForm.blade.php
// Route::get('/pembayaran', [PageController::class, 'showPembayaran'])->name('pembayaran'); // Mengarah ke pembayaran.blade.php
Route::get('/pembayaran', [BayarLayananController::class, 'showForm'])->name('pembayaran'); // Mengarah ke pembayaran.blade.php
Route::get('/done', [PageController::class, 'showDone'])->name('done'); // Mengarah ke done.blade.php
Route::get('/tentang-kami', [PageController::class, 'showTentangKami'])->name('tentang-kami'); // Mengarah ke tentangKami.blade.php
Route::get('/homepage-login', [PageController::class, 'showHomepageLogin'])->name('homepage-login'); // Mengarah ke homepageLogin.blade.php
Route::get('/service', [PageController::class, 'showService'])->name('service'); // Mengarah ke homepageLogin.blade.php
Route::get('/inputReview', [PageController::class, 'showinputReview'])->name('inputReview');
Route::post('/store-booking', [BookingController::class, 'store'])->name('store-booking');
Route::post('/upload', [SurveyBookingController::class, 'storeBooking'])->name('upload');
Route::post('/pembayaranSurvei', [SurveyBookingController::class, 'showpembayaranSurvei'])->name('pembayaranSurvei');
Route::post('/doneSurvey', [SurveyBookingController::class, 'showdoneSurvey'])->name('doneSurvey');
Route::post('/book-layanan', [BookLayananController::class, 'storeBooking'])->name('book-layanan.storeBooking');
Route::post('/bayar-layanan', [BayarLayananController::class, 'storePayment'])->name('bayar-layanan.storePayment');


Route::post('/upload', [PaymentController::class, 'upload'])->name('upload');