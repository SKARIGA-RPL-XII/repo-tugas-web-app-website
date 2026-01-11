<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('welcome');
});

// Auth Routes
Route::get('/login', function () {
    return redirect('/');
})->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile')->middleware('auth');

// Job Routes
Route::get('/job/{id}', [JobController::class, 'show'])->name('job.detail')->middleware('auth');

// Admin Routes
Route::get('/admin/tools', function () {
    return view('tools');
});
