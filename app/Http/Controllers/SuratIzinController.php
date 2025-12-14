<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratIzin;

class SuratIzinController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_izin' => 'required|date',
            'alasan' => 'required',
            'keterangan' => 'nullable',
            'bukti_surat' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('bukti_surat')) {
            $filePath = $request->file('bukti_surat')
                ->store('bukti_surat', 'public');
        }

        SuratIzin::create([
            'user_id' => auth()->id(),
            'tanggal_izin' => $request->tanggal_izin,
            'alasan' => $request->alasan,
            'keterangan' => $request->keterangan,
            'bukti_surat' => $filePath,
            'status' => 'Menunggu',
        ]);

        return back()->with('success', 'Surat izin berhasil dikirim');
    }
}
