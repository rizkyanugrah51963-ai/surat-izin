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

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/index', [PageController::class, 'index'])->name('index');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login/process', 'login')->name('login.process');
    Route::post('/logout', 'logout')->name('logout');

    Route::get('/register', 'showRegister')->name('register');
    Route::post('/register', 'register')->name('register.post');
});

/*
|--------------------------------------------------------------------------
| Forgot NISN
|--------------------------------------------------------------------------
*/
Route::get('/forgot-nisn', [ForgotNisnController::class, 'showForm'])->name('forgot.nisn');
Route::post('/forgot-nisn', [ForgotNisnController::class, 'sendNisn'])->name('forgot.nisn.post');

/*
|--------------------------------------------------------------------------
| Registrasi
|--------------------------------------------------------------------------
*/
Route::controller(RegistrasiController::class)->group(function () {
    Route::get('/registrasi', 'showForm')->name('registrasi.form');
    Route::post('/registrasi', 'store')->name('registrasi.store');
});

/*
|--------------------------------------------------------------------------
| Protected Routes (Wajib Login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
    Route::put('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');

    /*
    |--------------------------------------------------------------------------
    | CRUD Guru, Surat Izin, dan Kategori Izin
    |--------------------------------------------------------------------------
    */
    Route::resource('guru', GuruController::class);
    Route::resource('surat_izin', SuratIzinController::class);
    Route::resource('kategori-izin', KategoriIzinController::class);
});
