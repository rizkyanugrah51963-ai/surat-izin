<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nisn' => 'required',
            'kelas' => 'nullable|string',
            'telepon' => 'nullable|string',
            'asal_sekolah' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
        ]);

        $user = Auth::user();

        $user->email = $request->email;
        $user->nisn = $request->nisn;
        $user->kelas = $request->kelas;
        $user->telepon = $request->telepon;
        $user->asal_sekolah = $request->asal_sekolah;
        $user->tanggal_lahir = $request->tanggal_lahir;

        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui!');
    }
}
