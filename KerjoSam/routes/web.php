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
    })->name('welcome');

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
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index')->middleware('auth');
    Route::get('/buat-lowongan', [JobController::class, 'create'])->name('jobs.create')->middleware('auth');
    Route::post('/jobs/store', [JobController::class, 'store'])->name('jobs.store')->middleware('auth');
    Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show')->middleware('auth');
    Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit')->middleware('auth');
    Route::put('/jobs/{id}', [JobController::class, 'update'])->name('jobs.update')->middleware('auth');
    Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy')->middleware('auth');
Route::get('/profile/perusahaan', function () {
    return view('profileperusahaan');
});

// Job Routes
Route::get('/job/{id}', [JobController::class, 'show'])->name('job.detail')->middleware('auth');

    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/history', function () {
        return view('history');
    })->name('history')->middleware('auth');

    Route::get('/profile', function () {
        return view('profileuser');
    });
    // Admin Routes
    Route::get('/admin/tools', function () {
        return view('tools');
    })->name('admin.tools')->middleware('auth');

    // Form profile Routes
    Route::get('/form-profile', function () {
        return view('form-profile');
    });

    Route::get('/admin/show-more-pekerjaan', function () {
        return view('show-more-pekerjaan');
    })->name('show.more.pekerjaan');


    Route::get('/profile/perusahaan', function () {
        return view('profileperusahaan');
    });
    //  Tambah Pekerjaan
    Route::get('/buat-pekerjaan', function () {
        return view('buat-pekerjaan');
    });
