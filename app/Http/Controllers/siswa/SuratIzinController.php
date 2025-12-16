<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\SuratIzin;
use Illuminate\Http\Request;

class SuratIzinController extends Controller
{
    /**
     * Simpan pengajuan surat izin oleh siswa
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_izin' => 'required|date',
            'alasan'       => 'required|string',
            'keterangan'   => 'nullable|string',
            'bukti'        => 'nullable|mimes:jpg,png,pdf|max:2048'
        ]);

        $user = auth()->user();

        $buktiPath = null;
        if ($request->hasFile('bukti')) {
            $buktiPath = $request->file('bukti')->store('bukti-izin', 'public');
        }

        SuratIzin::create([
            'siswa_id'     => $user->id,
            'nama_siswa'   => $user->name,
            'kelas'        => $user->kelas,
            'tanggal_izin' => $request->tanggal_izin,
            'alasan'       => $request->alasan,
            'keterangan'   => $request->keterangan,
            'bukti'        => $buktiPath,
            'status'       => 'menunggu',
        ]);

        return redirect()->back()->with('success', 'Izin berhasil diajukan');
    }
}
