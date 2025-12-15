<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
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

