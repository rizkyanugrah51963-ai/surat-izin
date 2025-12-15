<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

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

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/index', [PageController::class, 'index'])->name('index');

/*
|--------------------------------------------------------------------------
| GURU
|--------------------------------------------------------------------------
*/
Route::resource('guru', GuruController::class);

/*
|--------------------------------------------------------------------------
| KATEGORI IZIN
|--------------------------------------------------------------------------
*/
Route::resource('kategori-izin', KategoriIzinController::class)->only(['index']);

/*
|--------------------------------------------------------------------------
| REGISTER
|--------------------------------------------------------------------------
*/
Route::get('/register', [RegisterController::class, 'showForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');

/*
|--------------------------------------------------------------------------
| FORGOT NISN
|--------------------------------------------------------------------------
*/
Route::get('/forgot-nisn', [ForgotNisnController::class, 'showForm'])->name('forgot.nisn.form');
Route::post('/forgot-nisn', [ForgotNisnController::class, 'sendNisn'])->name('forgot.nisn.post');

/*
|--------------------------------------------------------------------------
| LOGIN & LOGOUT
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login/process', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| LOGIN SISWA
|--------------------------------------------------------------------------
*/
Route::get('/login-siswa', [LoginSiswaController::class, 'showLogin'])->name('login.siswa.form');
Route::post('/login-siswa/process', [LoginSiswaController::class, 'login'])->name('login.siswa.process');

/*
|--------------------------------------------------------------------------
| FILE DOWNLOAD (AUTH)
|--------------------------------------------------------------------------
*/
Route::get('/files/{file}/{action}', function (File $file, $action) {
    if ($action === 'download') {
        return Storage::download($file->path, $file->filename);
    }
    abort(404);
})->middleware('auth')->name('files.action');

/*
|--------------------------------------------------------------------------
| ADMIN SURAT IZIN (FIX – BISA DIKLIK)
|--------------------------------------------------------------------------
| DIARAHKAN KE DASHBOARD YANG SUDAH ADA
| TIDAK CARI VIEW LAGI
*/
Route::get('/admin/surat-izin', function () {
    return redirect()->route('admin.dashboard');
})->name('admin.surat_izin');

/*
|--------------------------------------------------------------------------
| ALIAS LINK LAMA
|--------------------------------------------------------------------------
*/
Route::get('/surat-izin', fn () => redirect()->route('admin.surat_izin'));
Route::get('/surat_izin', fn () => redirect()->route('admin.surat_izin'));

/*
|--------------------------------------------------------------------------
| SISWA AREA (WAJIB LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('siswa')->group(function () {

    Route::get('/dashboard-user', function () {
        return view('siswa.dashboard-user');
    })->name('siswa.dashboard.user');

    Route::get('/profile', [ProfileController::class, 'showProfile'])
        ->name('siswa.profile');

    Route::put('/profile', [ProfileController::class, 'updateProfile'])
        ->name('profile.update');

    Route::delete('/profile/photo', [ProfileController::class, 'deletePhoto'])
        ->name('profile.photo.delete');

    Route::get('/surat-izin', function () {
        return view('siswa.surat_izin');
    })->name('siswa.surat_izin');

    Route::post('/surat-izin', [SuratIzinController::class, 'store'])
        ->name('surat_izin.store');
});

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD TANPA LOGIN (DEV)
|--------------------------------------------------------------------------
*/
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

/*
|--------------------------------------------------------------------------
| DEV ONLY
|--------------------------------------------------------------------------
*/
Route::get('/fix-password', function () {
    $user = User::find(1);
    if ($user) {
        $user->password = Hash::make('987654321');
        $user->save();
    }
    return 'Password berhasil diupdate!';
});
