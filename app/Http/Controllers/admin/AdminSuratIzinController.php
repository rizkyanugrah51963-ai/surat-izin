<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SuratIzin;
use Illuminate\Http\Request;

class AdminSuratIzinController extends Controller
{
    // ADMIN: LIHAT SEMUA SURAT IZIN
    public function index()
    {
        $surat = SuratIzin::latest()->get();
        return view('admin.surat_izin', compact('surat'));
    }

    // ADMIN: UPDATE STATUS (APPROVE / REJECT)
    public function update(Request $request, SuratIzin $suratIzin)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $suratIzin->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'Status surat izin diperbarui');
    }

    // ADMIN: HAPUS SURAT IZIN
    public function destroy(SuratIzin $suratIzin)
    {
        $suratIzin->delete();
        return back()->with('success', 'Surat izin dihapus');
    }
}
