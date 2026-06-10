<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/proseslogin', [AuthController::class, 'prosesLogin'])
    ->name('login.proses');

Route::get('/verify-otp', [AuthController::class, 'showOtpForm'])
    ->name('otp.form');

Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])
    ->name('otp.verify');

Route::get('/change-password', [AuthController::class, 'changePassword'])
    ->name('change.password');

Route::post('/change-password', [AuthController::class, 'updatePassword'])
    ->name('change.password.update');

Route::get('/forgot-password',
    [AuthController::class, 'forgotPassword'])
    ->name('forgot.password');

Route::post('/forgot-password',
    [AuthController::class, 'sendForgotOtp'])
    ->name('forgot.password.send');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');