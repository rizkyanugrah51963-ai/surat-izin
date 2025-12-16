<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // 🔒 VALIDASI DATA REGISTER
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'nisn' => 'required|string|confirmed|unique:users,nisn',
            'jenjang_sekolah' => 'required|string',
            'kelas' => 'required|string',
            'asal_sekolah' => 'required|string',
        ]);

        // 💾 SIMPAN DATA SISWA (INI KUNCINYA)
        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'nisn' => $request->nisn,
            'jenjang_sekolah' => $request->jenjang_sekolah,
            'kelas' => $request->kelas,
            'asal_sekolah' => $request->asal_sekolah,
            'password' => Hash::make($request->nisn), // password default = NISN
            'role' => 'siswa',
        ]);

        // 🔁 REDIRECT KE LOGIN
        return redirect()
            ->route('login')
            ->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
