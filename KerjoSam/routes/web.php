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
    Route::get('/job/{id}', [JobController::class, 'show'])->name('job.detail')->middleware('auth');
    Route::get('/jobs', [JobController::class, 'index'])->name('job.index')->middleware('auth');
    Route::get('/job/create', [JobController::class, 'create'])->name('job.create')->middleware('auth');
    Route::post('/job/store', [JobController::class, 'store'])->name('job.store')->middleware('auth');
    Route::get('/job/{id}/edit', [JobController::class, 'edit'])->name('job.edit')->middleware('auth');
    Route::put('/job/{id}', [JobController::class, 'update'])->name('job.update')->middleware('auth');
    Route::delete('/job/{id}', [JobController::class, 'destroy'])->name('job.destroy')->middleware('auth');

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
