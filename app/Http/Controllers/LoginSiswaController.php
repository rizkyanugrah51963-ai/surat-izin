<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Registrasi;
use App\Models\Siswa;

class RegistrasiController extends Controller
{
    public function showForm()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validasi input form registrasi
        $validator = Validator::make($request->all(), [
            'username'   => 'required|string|max:100|unique:registrasi,username',
            'email'      => 'required|email|unique:registrasi,email',
            'nisn'       => 'required|string|max:20|unique:registrasi,nisn',

            'provinsi'   => 'required|string',
            'kabupaten'  => 'required|string',
            'kecamatan'  => 'required|string',

            'jenjang'    => 'required|string',
            'sekolah'    => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // 1️⃣ Simpan ke tabel registrasi
        Registrasi::create([
            'username'   => $request->username,
            'email'      => $request->email,
            'nisn'       => $request->nisn,
            'provinsi'   => $request->provinsi,
            'kabupaten'  => $request->kabupaten,
            'kecamatan'  => $request->kecamatan,
            'jenjang'    => $request->jenjang,
            'sekolah'    => $request->sekolah,
        ]);

        // 2️⃣ Simpan ke tabel siswa agar bisa login dengan NISN (tanpa password)
        Siswa::create([
            'nisn'  => $request->nisn,
            'email' => $request->email,
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
