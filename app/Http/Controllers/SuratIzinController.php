<?php

namespace App\Http\Controllers;

use App\Models\SuratIzin;
use Illuminate\Http\Request;

class SuratIzinController extends Controller
{
    public function index()
    {
        $surat = SuratIzin::all();
        return view('surat_izin.index', compact('surat'));
    }

    public function create()
    {
        return view('surat_izin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'tanggal_izin' => 'required|date',
            'alasan' => 'required|string',
        ]);

        SuratIzin::create($request->all());
        return redirect()->route('surat_izin.index')->with('success', 'Surat izin berhasil dibuat!');
    }

    public function edit(SuratIzin $suratIzin)
    {
        return view('surat_izin.edit', compact('suratIzin'));
    }

    public function update(Request $request, SuratIzin $suratIzin)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'tanggal_izin' => 'required|date',
            'alasan' => 'required|string',
            'status' => 'required|string',
        ]);

        $suratIzin->update($request->all());
        return redirect()->route('surat_izin.index')->with('success', 'Surat izin berhasil diupdate!');
    }

    public function destroy(SuratIzin $suratIzin)
    {
        $suratIzin->delete();
        return redirect()->route('surat_izin.index')->with('success', 'Surat izin berhasil dihapus!');
    }
}
