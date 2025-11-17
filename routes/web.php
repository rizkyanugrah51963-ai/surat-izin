<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\SiswaController;

Route::get('/', [pagecontroller::class, 'welcome'])->name('welcome');

Route::get('/index', [pagecontroller::class, 'index'])->name('index');

