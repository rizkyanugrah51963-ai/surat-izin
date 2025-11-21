<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Registrasi;

class RegistrasiController extends Controller
{
    public function showForm()
    {
        return view('registrasi');
    }

    public function store(Request $request)
    {
        // Validasi input
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

        // Simpan data registrasi
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

        return redirect()->back()->with('success', 'Registrasi berhasil!');
    }
}
