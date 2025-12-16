<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::orderBy('id', 'desc')->get();
        return view('data_siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('data_siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username'   => 'required|unique:siswa,username',
            'email'      => 'required|email|unique:siswa,email',
            'nisn'       => 'required|unique:siswa,nisn',
            'provinsi'   => 'required',
            'kabupaten'  => 'required',
            'kecamatan'  => 'required',
            'jenjang'    => 'required',
            'sekolah'    => 'required',
        ]);

        Siswa::create($request->only([
            'username',
            'email',
            'nisn',
            'provinsi',
            'kabupaten',
            'kecamatan',
            'jenjang',
            'sekolah',
        ]));

        return redirect()
            ->route('admin.data-siswa.index')
            ->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('data_siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username'   => 'required|unique:siswa,username,' . $id,
            'email'      => 'required|email|unique:siswa,email,' . $id,
            'nisn'       => 'required|unique:siswa,nisn,' . $id,
            'provinsi'   => 'required',
            'kabupaten'  => 'required',
            'kecamatan'  => 'required',
            'jenjang'    => 'required',
            'sekolah'    => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->only([
            'username',
            'email',
            'nisn',
            'provinsi',
            'kabupaten',
            'kecamatan',
            'jenjang',
            'sekolah',
        ]));

        return redirect()
            ->route('admin.data-siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        Siswa::findOrFail($id)->delete();

        return redirect()
            ->route('admin.data-siswa.index')
            ->with('success', 'Data siswa berhasil dihapus');
    }
}
