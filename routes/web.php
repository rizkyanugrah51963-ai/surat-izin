<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SuratIzinController;

/*
|--------------------------------------------------------------------------
| Public Routes (Tanpa Login)
|--------------------------------------------------------------------------
| Semua halaman yang boleh diakses tanpa login disimpan di sini
*/
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/index', [PageController::class, 'index'])->name('index');

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

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | CRUD Guru
    |--------------------------------------------------------------------------
    */
    Route::resource('guru', GuruController::class);

    /*
    |--------------------------------------------------------------------------
    | CRUD Surat Izin
    |--------------------------------------------------------------------------
    */
    Route::resource('surat_izin', SuratIzinController::class);
});
