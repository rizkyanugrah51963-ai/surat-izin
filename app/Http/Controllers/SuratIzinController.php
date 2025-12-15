<?php

namespace App\Http\Controllers;

use App\Models\SuratIzin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratIzinController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_siswa'   => 'required|string|max:255',
            'kelas'        => 'required|string|max:50',
            'tanggal_izin' => 'required|date',
            'alasan'       => 'required|string',
            // kalau ada upload file:
            // 'lampiran' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        ]);

        // Jika surat izin terhubung ke user login
        $validated['user_id'] = Auth::id();

        SuratIzin::create($validated);

        return redirect()
            ->route('siswa.surat_izin')
            ->with('success', 'Surat izin berhasil diajukan');
    }
}
