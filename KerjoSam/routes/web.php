 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    }
    return view('welcome');
});

// Dashboard for authenticated users
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

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

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/history', function () {
    return view('history');
})->name('history')->middleware('auth');
