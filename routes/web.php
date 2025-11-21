<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\AuthController;

// Halaman umum
Route::get('/', [pagecontroller::class, 'welcome'])->name('welcome');
Route::get('/index', [pagecontroller::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login/process', [AuthController::class, 'login'])->name('login.process');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/registrasi', [RegistrasiController::class, 'showForm'])->name('registrasi.form');
Route::post('/registrasi', [RegistrasiController::class, 'store'])->name('registrasi.store');


Route::get('/dashboard', function () {
    return 'Berhasil Login!';
})->name('dashboard')->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


