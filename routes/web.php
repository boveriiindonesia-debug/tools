<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::post('/proseslogin', [App\Http\Controllers\AuthController::class, 'prosesLogin'])->name('login.proses');