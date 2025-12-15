@extends('layouts.guru')

@section('content')
    <div class="content-wrapper">

        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
            <h1 style="font-size:26px; font-weight:700;">Tambah Kategori Izin</h1>

            <a href="{{ route('kategori-izin.index') }}"
                style="
               color:#2563eb; 
               text-decoration:none; 
               font-weight:600;
           ">
                ← Kembali
            </a>
        </div>

        <div
            style="
        background:white;
        padding:25px;
        border-radius:12px;
        box-shadow:0 2px 8px rgba(0,0,0,0.1);
        max-width:700px;
    ">

            <form action="{{ route('kategori-izin.store') }}" method="POST">
                @csrf

                {{-- Nama Kategori --}}
                <div style="margin-bottom:20px;">
                    <label style="font-weight:600; display:block; margin-bottom:6px;">
                        Nama Kategori
                    </label>

                    <input type="text" name="nama" placeholder="Masukkan nama kategori" required
                        style="
                        width:100%;
                        padding:10px 12px;
                        border:1px solid #d1d5db;
                        border-radius:8px;
                        font-size:15px;
                    ">
                </div>

                {{-- Deskripsi --}}
                <div style="margin-bottom:20px;">
                    <label style="font-weight:600; display:block; margin-bottom:6px;">
                        Deskripsi
                    </label>

                    <textarea name="keterangan" class="form-control" rows="4">
{{ old('keterangan', $kategori->keterangan ?? '') }}
</textarea>

                </div>

                {{-- Tombol Simpan --}}
                <button type="submit"
                    style="
                    background:#1E5EFF;
                    color:white;
                    border:none;
                    padding:10px 18px;
                    border-radius:8px;
                    font-size:15px;
                    font-weight:600;
                    cursor:pointer;
                ">
                    Simpan
                </button>

            </form>
        </div>

    </div>
@endsection
