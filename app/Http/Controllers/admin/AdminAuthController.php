<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{
    // Tampilkan form login admin
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    // Proses login admin
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            // 🔒 CEK ROLE ADMIN
            if (Auth::user()->role !== 'admin') {
                Auth::logout();

                throw ValidationException::withMessages([
                    'email' => 'Akun ini bukan admin.',
                ]);
            }

            // 🔑 REGENERATE SESSION
            $request->session()->regenerate();

            // 🔥 INI KUNCI UTAMA (WAJIB)
            // HAPUS intended URL USER
            $request->session()->forget('url.intended');

            // ✅ PAKSA KE DASHBOARD ADMIN
            return redirect()
                ->route('admin.dashboard')
                ->with('success', 'Selamat datang Admin!');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    // Logout admin
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login')
            ->with('success', 'Anda telah logout.');
    }
}
