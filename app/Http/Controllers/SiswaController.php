<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    // REGISTER
    public function store(Request $request)
    {
        Siswa::create([
            'username'  => $request->username,
            'email'     => $request->email,
            'nisn'      => $request->nisn,
            'provinsi'  => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'jenjang'   => $request->jenjang,
            'sekolah'   => $request->sekolah,
            'password'  => Hash::make($request->nisn), // PASSWORD = NISN
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat');
    }

    // LOGIN
    public function loginProses(Request $request)
    {
        $data = [
            'email'    => $request->email,
            'password' => $request->nisn,  // LOGIN PAKAI NISN
        ];

        if (Auth::attempt($data)) {
            return redirect('/dashboard-siswa');
        }

        return back()->with('error', 'Email atau NISN salah');
    }

    public function dashboard()
    {
        return view('siswa.dashboard');
    }
}
