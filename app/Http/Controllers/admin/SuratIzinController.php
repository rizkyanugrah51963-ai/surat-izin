<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuratIzin;
use Illuminate\Http\Request;

class SuratIzinController extends Controller
{
    public function index()
    {
        $suratIzin = SuratIzin::latest()->get();
        return view('admin.surat_izin.index', compact('suratIzin'));
    }

    public function edit(SuratIzin $suratIzin)
    {
        return view('admin.surat_izin.edit', compact('suratIzin'));
    }

    public function update(Request $request, SuratIzin $suratIzin)
    {
        $request->validate([
            'status' => 'required|in:menunggu,disetujui,ditolak'
        ]);

        $suratIzin->update([
            'status' => $request->status
        ]);

        return redirect()
            ->route('admin.surat-izin.index')
            ->with('success', 'Status surat izin diperbarui');
    }

    public function destroy(SuratIzin $suratIzin)
    {
        $suratIzin->delete();

        return back()->with('success', 'Surat izin dihapus');
    }
}
