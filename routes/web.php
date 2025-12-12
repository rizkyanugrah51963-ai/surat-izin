<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SuratIzinController;
use App\Http\Controllers\ForgotNisnController;
use App\Http\Controllers\KategoriIzinController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginSiswaController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/index', [PageController::class, 'index'])->name('index');

Route::resource('guru', GuruController::class)->only(['index', 'show']);
Route::resource('surat_izin', SuratIzinController::class)->only(['create', 'store']);
Route::resource('kategori-izin', KategoriIzinController::class)->only(['index']);


/*
|--------------------------------------------------------------------------
| REGISTER
|--------------------------------------------------------------------------
*/

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'showForm')->name('register.form');
    Route::post('/register', 'register')->name('register.store');
});


/*
|--------------------------------------------------------------------------
| FORGOT NISN
|--------------------------------------------------------------------------
*/

Route::get('/forgot-nisn', [ForgotNisnController::class, 'showForm'])->name('forgot.nisn.form');
Route::post('/forgot-nisn', [ForgotNisnController::class, 'sendNisn'])->name('forgot.nisn.post');


/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login/process', 'login')->name('login.process');
    Route::post('/logout', 'logout')->name('logout');
});


/*
|--------------------------------------------------------------------------
| LOGIN SISWA
|--------------------------------------------------------------------------
*/

Route::controller(LoginSiswaController::class)->group(function () {
    Route::get('/login-siswa', 'showLogin')->name('login.siswa.form');
    Route::post('/login-siswa/process', 'login')->name('login.siswa.process');
});


/*
|--------------------------------------------------------------------------
| DASHBOARD SISWA (HARUS SEBELUM resource siswa)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('siswa')->group(function () {

    Route::get('/dashboard-user', function () {
        return view('siswa.dashboard-user');
    })->name('siswa.dashboard.user');

    Route::get('/profile', function () {
        return view('siswa.profile');
    })->name('siswa.profile');

    Route::put('/siswa/profile/update', [App\Http\Controllers\SiswaProfileController::class, 'update'])
    ->name('profile.update')
    ->middleware('auth');

});



/*
|--------------------------------------------------------------------------
| ADMIN PROTECTED ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    // LETAKKAN PALING BAWAH AGAR TIDAK BENTROK
    Route::resource('siswa', SiswaController::class);
});


/*
|--------------------------------------------------------------------------
| TEMPORARY PASSWORD FIX
|--------------------------------------------------------------------------
*/

Route::get('/fix-password', function () {
    $user = User::find(1);
    $user->password = Hash::make('987654321');
    $user->save();
    return "Password berhasil diupdate!";
});
