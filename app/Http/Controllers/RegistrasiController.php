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
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:100|unique:siswa,username',
            'email'    => 'required|email|unique:siswa,email',
            'nisn'     => 'required|string|max:20|unique:siswa,nisn',

            'provinsi'  => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',

            'jenjang' => 'required|string',
            'sekolah' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // SIMPAN LANGSUNG KE TABEL SISWA
        \App\Models\Siswa::create([
            'username'  => $request->username,
            'email'     => $request->email,
            'nisn'      => $request->nisn,
            'provinsi'  => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'jenjang'   => $request->jenjang,
            'sekolah'   => $request->sekolah,
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat, silakan login.');
    }
}
