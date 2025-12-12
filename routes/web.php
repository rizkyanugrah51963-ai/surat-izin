<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SuratIzinController;
use App\Http\Controllers\ForgotNisnController;
use App\Http\Controllers\KategoriIzinController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginSiswaController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Public Routes (TANPA LOGIN)
|--------------------------------------------------------------------------
*/

// Welcome & Index
Route::get('/', [pageController::class, 'welcome'])->name('welcome');
Route::get('/index', [pageController::class, 'index'])->name('index');

// Dashboard admin (sementara public)
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// DATA GURU (PUBLIC)
Route::resource('guru', GuruController::class);

// SURAT IZIN (PUBLIC – LANGSUNG BUKA, TANPA LOGIN)
Route::resource('surat_izin', SuratIzinController::class);

// KATEGORI IZIN (PUBLIC, kalau mau dibuka juga)
Route::resource('kategori-izin', KategoriIzinController::class);

/*
|--------------------------------------------------------------------------
| Auth Routes (Login Admin)
|--------------------------------------------------------------------------
*/
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login'); // <-- ini route login admin
    Route::post('/login/process', 'login')->name('login.process');
    Route::post('/logout', 'logout')->name('logout');
});

/*
|--------------------------------------------------------------------------
| Forgot NISN
|--------------------------------------------------------------------------
*/
Route::get('/forgot-nisn', [ForgotNisnController::class, 'showForm'])
    ->name('forgot.nisn.form');

Route::post('/forgot-nisn', [ForgotNisnController::class, 'sendNisn'])
    ->name('forgot.nisn.post');

/*
|--------------------------------------------------------------------------
| Register
|--------------------------------------------------------------------------
*/
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'showForm')->name('register.form');
    Route::post('/register', 'register')->name('register.store');
});

/*
|--------------------------------------------------------------------------
| Protected Routes (MASIH PERLU LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    // DATA SISWA SAJA YANG WAJIB LOGIN
    Route::resource('siswa', SiswaController::class);
});

/*
|--------------------------------------------------------------------------
| Login Siswa (Opsional)
|--------------------------------------------------------------------------
*/
Route::controller(LoginSiswaController::class)->group(function () {
    Route::get('/login-siswa', 'showLogin')->name('login.siswa.form');
    Route::post('/login-siswa/process', 'login')->name('login.siswa.process');
});