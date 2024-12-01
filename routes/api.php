<?php

use App\Http\Controllers\SurveyBookingController;
use App\Http\Controllers\PaymentController;

Route::post('/survey-bookings', [SurveyBookingController::class, 'store']);
Route::get('/survey-bookings', [SurveyBookingController::class, 'index']);

Route::post('/survey-payments', [PaymentController::class, 'store']);
Route::get('/survey-payments', [PaymentController::class, 'index']);
