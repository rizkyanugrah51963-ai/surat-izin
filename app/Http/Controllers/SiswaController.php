<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function update(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'email' => 'required|email',
        'name'  => 'required',
    ]);

    $user->email = $request->email;
    $user->name = $request->name;
    $user->save();

    return back()->with('success', 'Profil berhasil diperbarui!');
}
}
