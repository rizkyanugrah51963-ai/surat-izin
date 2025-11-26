<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // =======================
    // TAMPILKAN FORM LOGIN
    // =======================
    public function showLogin()
    {
        return view('auth.login');
    }

    // =======================
    // PROSES LOGIN
    // =======================
    public function login(Request $request)
    {
        // validasi
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Email atau Password salah');
    }

    // =======================
    // LOGOUT
    // =======================
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // =======================
    // SHOW REGISTER
    // =======================
    public function showRegister()
    {
        return view('auth.register');
    }

    // =======================
    // PROSES REGISTER
    // =======================
    public function register(Request $request)
    {
        // Validasi
        $request->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|email|unique:users,email',
            'NISN' => 'required|min:5|confirmed',
        ]);

        // Simpan user baru
        User::create([
    'name'     => $request->name,
    'email'    => $request->email,
    'NISN'     => $request->NISN,
    'password' => Hash::make($request->NISN), // password = NISN
]);


        return redirect()->route('login')->with('success', 'Akun berhasil dibuat, silakan login');
    }
}
