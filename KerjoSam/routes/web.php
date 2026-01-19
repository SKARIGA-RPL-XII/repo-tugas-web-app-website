<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobCategoryController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return Auth::check() ? redirect('/dashboard') : view('welcome');
})->name('welcome');

Route::get('/about', [AboutController::class, 'index'])->name('about');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    Route::get('/profile', fn() => view('profileuser'))->name('profile');

    Route::get('/profile/perusahaan', fn() => view('profileperusahaan'));

    Route::get('/history', fn() => view('history'))->name('history');

    

    /*
    |--------------------------------------------------------------------------
    | Job Routes
    |--------------------------------------------------------------------------
    */

    Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/buat-lowongan', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs/store', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
    Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/jobs/{id}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');

    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    */

    // Admin Routes
    Route::get('/admin/tools', [JobCategoryController::class, 'index'])
        ->name('admin.tools')
        ->middleware('auth');

    Route::get('/admin/show-more-user', [JobCategoryController::class, 'showMoreUsers'])
        ->name('admin.show-more-user')
        ->middleware('auth');

    Route::get('/admin/show-more-perusahaan', [JobCategoryController::class, 'showMoreCompanies'])
        ->name('admin.show-more-perusahaan')
        ->middleware('auth');

    Route::delete('/admin/users/{id}', [JobCategoryController::class, 'destroyUser'])
        ->name('admin.users.destroy')
        ->middleware('auth');

    Route::post('/admin/categories', [JobCategoryController::class, 'store'])
        ->name('categories.store')
        ->middleware('auth');

    Route::put('/admin/categories/{id}', [JobCategoryController::class, 'update'])
        ->name('categories.update')
        ->middleware('auth');

    Route::delete('/admin/categories/{id}', [JobCategoryController::class, 'destroy'])
        ->name('categories.destroy')
        ->middleware('auth');
});
