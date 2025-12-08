<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SuratIzinController;
use App\Http\Controllers\ForgotNisnController;
use App\Http\Controllers\KategoriIzinController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginSiswaController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Halaman welcome dan index
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/index', [PageController::class, 'index'])->name('index');

// Halaman admin dashboard (sementara tanpa middleware)
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

/*
|--------------------------------------------------------------------------
| Auth Routes (Login & Logout)
|--------------------------------------------------------------------------
*/
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login.form');
    Route::post('/login/process', 'login')->name('login.process');
    Route::post('/logout', 'logout')->name('logout');
});

/*
|--------------------------------------------------------------------------
| Forgot NISN Routes
|--------------------------------------------------------------------------
*/
Route::get('/forgot-nisn', [ForgotNisnController::class, 'showForm'])->name('forgot.nisn.form');
Route::post('/forgot-nisn', [ForgotNisnController::class, 'sendNisn'])->name('forgot.nisn.post');

/*
|--------------------------------------------------------------------------
| Register Routes
|--------------------------------------------------------------------------
*/
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'showForm')->name('register.form');
    Route::post('/register', 'register')->name('register.store');
});

/*
|--------------------------------------------------------------------------
| Protected Routes (Harus Login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Dashboard & Profile
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    /*
    |--------------------------------------------------------------------------
    | CRUD Routes (Hanya untuk user login)
    |--------------------------------------------------------------------------
    */
    Route::resource('guru', GuruController::class);
    Route::resource('surat_izin', SuratIzinController::class);
    Route::resource('kategori-izin', KategoriIzinController::class);
    Route::resource('siswa', SiswaController::class);
});

/*
|--------------------------------------------------------------------------
| Login Siswa Routes (Opsional)
|--------------------------------------------------------------------------
*/
Route::controller(LoginSiswaController::class)->group(function () {
    Route::get('/login-siswa', 'showLogin')->name('login.siswa.form');
    Route::post('/login-siswa/process', 'login')->name('login.siswa.process');
});
