<?php

namespace App\Http\Controllers;

use App\Models\KategoriIzin;
use Illuminate\Http\Request;

class KategoriIzinController extends Controller
{
    // Tampilkan semua kategori izin
    public function index()
    {
        $kategori = KategoriIzin::orderBy('created_at', 'desc')->get();
        return view('kategori_izin.index', compact('kategori'));
    }

    // Form tambah
    public function create()
    {
        return view('kategori_izin.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'keterangan' => 'nullable'
        ]);

        KategoriIzin::create($request->all());

        return redirect()->route('kategori-izin.index')
            ->with('success', 'Kategori Izin berhasil ditambahkan');
    }

    // Form edit
    public function edit($id)
    {
        $kategori = KategoriIzin::findOrFail($id);
        return view('kategori_izin.edit', compact('kategori'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'keterangan' => 'nullable'
        ]);

        $kategori = KategoriIzin::findOrFail($id);
        $kategori->update($request->all());

        return redirect()->route('kategori-izin.index')
            ->with('success', 'Kategori Izin berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        KategoriIzin::findOrFail($id)->delete();

        return redirect()->route('kategori-izin.index')
            ->with('success', 'Kategori Izin berhasil dihapus');
    }
}
