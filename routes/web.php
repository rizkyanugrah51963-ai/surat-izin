<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SuratIzinController;

// Halaman landing
Route::get('/', [PageController::class, 'welcome'])->name('welcome');

// Halaman dashboard / index
Route::get('/index', [PageController::class, 'index'])->name('index');

// CRUD Guru
Route::resource('guru', GuruController::class);

// CRUD Surat Izin
Route::resource('surat_izin', SuratIzinController::class);
