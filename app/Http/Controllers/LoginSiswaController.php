<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginSiswaController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nisn'  => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->nisn
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('siswa.dashboard.user');
        }

        return back()->withErrors([
            'email' => 'Email atau NISN salah.'
        ]);
    }
}
