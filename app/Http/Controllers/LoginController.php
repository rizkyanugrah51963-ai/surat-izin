<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Proses Login
     */
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'nisn'  => 'required'
    ]);

    // Login tanpa password hashing
    $user = \App\Models\User::where('email', $request->email)
                            ->where('nisn', $request->nisn)
                            ->first();

    if ($user) {
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->route('siswa.dashboard');
    }

    return back()->withErrors([
        'email' => 'Email atau NISN salah.'
    ]);
}
}
