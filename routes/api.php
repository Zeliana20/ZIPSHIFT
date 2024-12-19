<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookLayananController;
use App\Http\Controllers\BayarLayananController;
use App\Http\Controllers\ReviewController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('book-layanan', BookLayananController::class);
Route::apiResource('bayar-layanan', BayarLayananController::class);
Route::get('/reviews', [ReviewController::class, 'index']);  // Mendapatkan semua review
Route::post('/reviews', [ReviewController::class, 'store']);  // Menyimpan review