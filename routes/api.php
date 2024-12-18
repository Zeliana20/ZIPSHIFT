<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookLayananController;
use App\Http\Controllers\BayarLayananController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('book-layanan', BookLayananController::class);
Route::apiResource('bayar-layanan', BayarLayananController::class);