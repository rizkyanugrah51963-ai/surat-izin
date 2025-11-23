<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SuratIzinController;

/*
|--------------------------------------------------------------------------
| Halaman Landing & Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/index', [PageController::class, 'index'])->name('index');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login/process', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Registrasi Routes
|--------------------------------------------------------------------------
*/
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/registrasi', [RegistrasiController::class, 'showForm'])->name('registrasi.form');
Route::post('/registrasi', [RegistrasiController::class, 'store'])->name('registrasi.store');

/*
|--------------------------------------------------------------------------
| Dashboard (Login Required)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return 'Berhasil Login!';
    })->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | CRUD Guru & Surat Izin
    |--------------------------------------------------------------------------
    */
    Route::resource('guru', GuruController::class);
    Route::resource('surat_izin', SuratIzinController::class);
});
