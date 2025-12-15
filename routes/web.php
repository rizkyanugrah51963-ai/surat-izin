<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\Siswa\SuratIzinController;
use App\Http\Controllers\ForgotNisnController;
use App\Http\Controllers\KategoriIzinController;
use App\Http\Controllers\LoginSiswaController;
use App\Http\Controllers\RegisterController;

/* ================= ADMIN CONTROLLERS ================= */
use App\Http\Controllers\Admin\AdminSuratIzinController;

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
Route::get('/kategori-izin', [KategoriIzinController::class, 'index'])
    ->name('kategori-izin.index');

Route::get('/kategori-izin/create', [KategoriIzinController::class, 'create'])
    ->name('kategori-izin.create');

Route::post('/kategori-izin', [KategoriIzinController::class, 'store'])
    ->name('kategori-izin.store');

Route::get('/kategori-izin/{kategoriIzin}/edit', [KategoriIzinController::class, 'edit'])
    ->name('kategori-izin.edit');

Route::put('/kategori-izin/{kategoriIzin}', [KategoriIzinController::class, 'update'])
    ->name('kategori-izin.update');

Route::delete('/kategori-izin/{kategoriIzin}', [KategoriIzinController::class, 'destroy'])
    ->name('kategori-izin.destroy');
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
| SISWA AREA
|--------------------------------------------------------------------------
*/
Route::prefix('siswa')->name('siswa.')->group(function () {

    Route::get('/dashboard-user', function () {
        return view('siswa.dashboard-user');
    })->name('dashboard.user');

    Route::get('/profile', function () {
        return view('siswa.profile', [
            'user' => Auth::user()
        ]);
    })->name('profile');
    Route::put('/profile', function (Request $request) {

        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user->name = $request->name;
        $user->save();

        return redirect()
            ->route('siswa.profile')
            ->with('success', 'Profil berhasil diperbarui');
    })->name('profile.update');

    Route::get('/surat-izin', function () {
        return view('siswa.surat_izin');
    })->name('surat_izin');

    Route::post('/surat-izin',
    [SuratIzinController::class, 'store']
)->name('surat_izin.store');

    
    Route::post('/siswa/surat-izin',[\App\Http\Controllers\Siswa\SuratIzinController::class, 'store']
    )->name('siswa.surat_izin.store');
});

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/surat-izin', [AdminSuratIzinController::class, 'index'])
        ->name('surat-izin.index');

    Route::get('/surat-izin/{suratIzin}/edit', [AdminSuratIzinController::class, 'edit'])
        ->name('surat-izin.edit');

    Route::put('/surat-izin/{suratIzin}', [AdminSuratIzinController::class, 'update'])
        ->name('surat-izin.update');

    Route::delete('/surat-izin/{suratIzin}', [AdminSuratIzinController::class, 'destroy'])
        ->name('surat-izin.destroy');

Route::get('/surat-izin', [AdminSuratIzinController::class, 'index'])
    ->name('surat-izin.index');



});

/*
|--------------------------------------------------------------------------
| SURAT IZIN SISWA
|--------------------------------------------------------------------------
*/
Route::get('/surat-izin', function () {
    return redirect()->route('admin.surat-izin.index');
});


/*
|--------------------------------------------------------------------------
| REDIRECT AMAN
|--------------------------------------------------------------------------
*/
Route::get('/surat_izin', function () {
    return redirect()->route('admin.surat-izin.index');
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
