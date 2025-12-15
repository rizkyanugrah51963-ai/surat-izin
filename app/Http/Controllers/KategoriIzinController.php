<?php

namespace App\Http\Controllers;

use App\Models\KategoriIzin;
use Illuminate\Http\Request;

class KategoriIzinController extends Controller
{
    // ======================
    // TAMPILKAN DATA
    // ======================
    public function index()
    {
        $kategori = KategoriIzin::orderBy('created_at', 'desc')->get();
        return view('kategori_izin.index', compact('kategori'));
    }

    // ======================
    // FORM TAMBAH
    // ======================
    public function create()
    {
        return view('kategori_izin.create');
    }

    // ======================
    // SIMPAN DATA BARU
    // ======================
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:100',
            'keterangan' => 'nullable',
        ]);

        KategoriIzin::create($validated);

        return redirect()->route('kategori-izin.index')
            ->with('success', 'Kategori Izin berhasil ditambahkan');
    }

    // ======================
    // FORM EDIT
    // ======================
    public function edit($id)
    {
        $kategori = KategoriIzin::findOrFail($id);
        return view('kategori_izin.edit', compact('kategori'));
    }

    // ======================
    // UPDATE DATA
    // ======================
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|max:100',
            'keterangan' => 'nullable',
        ]);

        $kategori = KategoriIzin::findOrFail($id);
        $kategori->update($validated);

        return redirect()->route('kategori-izin.index')
            ->with('success', 'Kategori Izin berhasil diperbarui');
    }

    // ======================
    // HAPUS DATA
    // ======================
    public function destroy($id)
    {
        KategoriIzin::findOrFail($id)->delete();

        return redirect()->route('kategori-izin.index')
            ->with('success', 'Kategori Izin berhasil dihapus');
    }
}
