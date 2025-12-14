<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SuratIzinController;
use App\Http\Controllers\ForgotNisnController;
use App\Http\Controllers\KategoriIzinController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginSiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;

use App\Models\User;
use App\Models\File;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/index', [PageController::class, 'index'])->name('index');

Route::resource('guru', GuruController::class)->only(['index', 'show']);
Route::resource('kategori-izin', KategoriIzinController::class)->only(['index']);

/*
|--------------------------------------------------------------------------
| REGISTER
|--------------------------------------------------------------------------
*/
Route::get('/register', [RegisterController::class, 'showForm'])
    ->name('register.form');

Route::post('/register', [RegisterController::class, 'register'])
    ->name('register.store');

/*
|--------------------------------------------------------------------------
| FORGOT NISN
|--------------------------------------------------------------------------
*/
Route::get('/forgot-nisn', [ForgotNisnController::class, 'showForm'])
    ->name('forgot.nisn.form');

Route::post('/forgot-nisn', [ForgotNisnController::class, 'sendNisn'])
    ->name('forgot.nisn.post');

/*
|--------------------------------------------------------------------------
| LOGIN & LOGOUT
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login/process', [AuthController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| LOGIN SISWA
|--------------------------------------------------------------------------
*/
Route::get('/login-siswa', [LoginSiswaController::class, 'showLogin'])
    ->name('login.siswa.form');

Route::post('/login-siswa/process', [LoginSiswaController::class, 'login'])
    ->name('login.siswa.process');

/*
|--------------------------------------------------------------------------
| FILE ACTION (⬅️ ROUTE YANG SEBELUMNYA HILANG)
|--------------------------------------------------------------------------
| Dipakai oleh App\Models\File.php
| route('files.action', [$file->id, 'download'])
*/
Route::get('/files/{file}/{action}', function (File $file, $action) {

    if ($action === 'download') {
        return Storage::download($file->path, $file->filename);
    }

    abort(404);

})->middleware('auth')->name('files.action');

/*
|--------------------------------------------------------------------------
| SISWA AREA (AUTH)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('siswa')->group(function () {

    // dashboard siswa
    Route::get('/dashboard-user', function () {
        return view('siswa.dashboard-user');
    })->name('siswa.dashboard.user');

    // profile siswa
    Route::get('/profile', [ProfileController::class, 'showProfile'])
        ->name('siswa.profile');

    Route::put('/profile', [ProfileController::class, 'updateProfile'])
        ->name('profile.update');

    // surat izin (HALAMAN)
    Route::get('/surat-izin', function () {
        return view('siswa.surat_izin');
    })->name('siswa.surat_izin');

    // surat izin (SUBMIT)
    Route::post('/surat-izin', [SuratIzinController::class, 'store'])
        ->name('surat_izin.store');
    
    Route::get('/siswa/profile', [ProfileController::class, 'showProfile'])
    ->name('profile.show');

Route::put('/siswa/profile', [ProfileController::class, 'updateProfile'])
    ->name('profile.update');

Route::delete('/siswa/profile/photo', [ProfileController::class, 'deletePhoto'])
    ->name('profile.photo.delete');
});

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('siswa', SiswaController::class);
});

/*
|--------------------------------------------------------------------------
| TEMPORARY FIX PASSWORD (DEV ONLY)
|--------------------------------------------------------------------------
*/
Route::get('/fix-password', function () {
    $user = User::find(1);
    $user->password = Hash::make('987654321');
    $user->save();

    return "Password berhasil diupdate!";
});
