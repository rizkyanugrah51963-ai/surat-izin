<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\Siswa\SuratIzinController as SiswaSuratIzinController;
use App\Http\Controllers\ForgotNisnController;
use App\Http\Controllers\KategoriIzinController;
use App\Http\Controllers\LoginSiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Admin\SuratIzinController as AdminSuratIzinController;
use App\Http\Controllers\Admin\DataSiswaController;

use App\Models\User;
use App\Models\File;

/*
|--------------------------------------------------------------------------
| LOGIN USER (DEFAULT)
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])
    ->middleware('guest:admin')
    ->name('admin.login');

Route::post('/admin/login', [AdminLoginController::class, 'login'])
    ->name('admin.login.process');

Route::post('/admin/logout', [AdminLoginController::class, 'logout'])
    ->name('admin.logout');

/*
|--------------------------------------------------------------------------
| PUBLIC
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
Route::resource('kategori-izin', KategoriIzinController::class);

/*
|--------------------------------------------------------------------------
| REGISTER SISWA
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
| LOGIN SISWA (OPSIONAL, JIKA MASIH DIPAKAI)
|--------------------------------------------------------------------------
*/
Route::get('/login-siswa', [LoginSiswaController::class, 'showLogin'])
    ->middleware('guest')
    ->name('login.siswa.form');

Route::post('/login-siswa/process', [LoginSiswaController::class, 'login'])
    ->name('login.siswa.process');

/*
|--------------------------------------------------------------------------
| FILE DOWNLOAD
|--------------------------------------------------------------------------
*/
Route::get('/files/{file}/{action}', function (File $file, $action) {
    if ($action === 'download') {
        return Storage::download($file->path, $file->filename);
    }
    abort(404);
})->name('files.action');

/*
|--------------------------------------------------------------------------
| ===================== SISWA AREA =====================
|--------------------------------------------------------------------------
*/
Route::prefix('siswa')
    ->name('siswa.')
    ->middleware('auth')
    ->group(function () {

        Route::get('/dashboard-user', fn () => view('siswa.dashboard-user'))
            ->name('dashboard.user');

        Route::get('/profile', [ProfileController::class, 'showProfile'])
            ->name('profile');

        Route::post('/profile', [ProfileController::class, 'updateProfile'])
            ->name('profile.update');

        Route::delete('/profile/photo', [ProfileController::class, 'deletePhoto'])
            ->name('profile.photo.delete');

        Route::get('/surat-izin', fn () => view('siswa.surat_izin'))
            ->name('surat_izin');

        Route::post('/surat-izin', [SiswaSuratIzinController::class, 'store'])
            ->name('surat_izin.store');
    });

/*
|--------------------------------------------------------------------------
| ===================== ADMIN AREA =====================
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth:admin')
    ->group(function () {

        Route::get('/dashboard', fn () => view('admin.dashboard'))
            ->name('dashboard');

        Route::get('/surat-izin', [AdminSuratIzinController::class, 'index'])
            ->name('surat-izin.index');

        Route::get('/surat-izin/{suratIzin}/edit', [AdminSuratIzinController::class, 'edit'])
            ->name('surat-izin.edit');

        Route::put('/surat-izin/{suratIzin}', [AdminSuratIzinController::class, 'update'])
            ->name('surat-izin.update');

        Route::delete('/surat-izin/{suratIzin}', [AdminSuratIzinController::class, 'destroy'])
            ->name('surat-izin.destroy');

        Route::resource('data-siswa', DataSiswaController::class)
            ->except(['show']);
    });

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
