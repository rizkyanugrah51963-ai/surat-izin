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
| Public Routes (Tanpa Login)
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
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login/process', 'login')->name('login.process');
    Route::post('/logout', 'logout')->name('logout');
});

/*
|--------------------------------------------------------------------------
| Forgot NISN Routes
|--------------------------------------------------------------------------
*/
Route::get('/forgot-nisn', [ForgotNisnController::class, 'showForm'])->name('forgot.nisn');
Route::post('/forgot-nisn', [ForgotNisnController::class, 'sendNisn'])->name('forgot.nisn.post');

/*
|--------------------------------------------------------------------------
| Registrasi Routes
|--------------------------------------------------------------------------
*/
Route::controller(RegistrasiController::class)->group(function () {
    Route::get('/registrasi', 'showForm')->name('registrasi.form');
    Route::post('/registrasi', 'store')->name('registrasi.store');
});

// Alternatif register (punya AuthController)
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

/*
|--------------------------------------------------------------------------
| Protected Routes (Wajib Login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});

/*
|--------------------------------------------------------------------------
| CRUD Guru, Surat Izin, dan Kategori Izin
|--------------------------------------------------------------------------
*/
Route::resource('guru', GuruController::class);
Route::resource('surat_izin', SuratIzinController::class);
Route::resource('kategori-izin', KategoriIzinController::class);
