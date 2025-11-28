<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ForgotNisnController extends Controller
{
    // Tampilkan form lupa NISN
    public function showForm()
    {
        return view('auth.forgot-nisn');
    }

    // Proses pencarian NISN
    public function sendNisn(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        // Cek user berdasarkan email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan.');
        }

        // Jika Anda mau kirim via email (aktifkan mailtrap/mailgun)
        // \Mail::to($user->email)->send(new \App\Mail\SendNisnMail($user));

        return back()->with('success', 'NISN anda adalah: ' . $user->nisn);
    }
}
