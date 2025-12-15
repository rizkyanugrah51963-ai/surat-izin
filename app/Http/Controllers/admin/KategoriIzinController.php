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
    $validated = $request->validate([
        'nama' => 'required|max:100',
        'deskripsi' => 'nullable'
    ]);

    KategoriIzin::create($validated);

    return redirect()->route('kategori-izin.index')
        ->with('success', 'Kategori Izin berhasil ditambahkan');
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nama' => 'required|max:100',
        'deskripsi' => 'nullable'
    ]);

    $kategori = KategoriIzin::findOrFail($id);
    $kategori->update($validated);

    return redirect()->route('kategori-izin.index')
        ->with('success', 'Kategori Izin berhasil diperbarui');
}

