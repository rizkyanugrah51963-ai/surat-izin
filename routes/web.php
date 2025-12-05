<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SuratIzinController;
use App\Http\Controllers\ForgotNisnController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriIzinController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginSiswaController;
/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES (TANPA LOGIN)
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/index', [PageController::class, 'index'])->name('index');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login/process', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| REGISTRASI (SISWA REGISTER)
|--------------------------------------------------------------------------
*/
Route::get('/registrasi', [RegistrasiController::class, 'showForm'])->name('registrasi.form');
Route::post('/registrasi', [RegistrasiController::class, 'store'])->name('registrasi.store');

/*
|--------------------------------------------------------------------------
| LUPA NISN
|--------------------------------------------------------------------------
*/
Route::get('/forgot-nisn', [ForgotNisnController::class, 'showForm'])->name('forgot.nisn');
Route::post('/forgot-nisn', [ForgotNisnController::class, 'sendNisn'])->name('forgot.nisn.post');

/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (WAJIB LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    // CRUD
    Route::resource('guru', GuruController::class);
    Route::resource('surat_izin', SuratIzinController::class);
    Route::resource('kategori-izin', KategoriIzinController::class);
    Route::resource('siswa', SiswaController::class);
});
// REGISTER
Route::get('/register', [RegistrasiController::class, 'showForm'])->name('register');
Route::post('/register', [RegistrasiController::class, 'store'])->name('register.post');
