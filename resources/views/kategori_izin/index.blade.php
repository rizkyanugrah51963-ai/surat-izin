@extends('layouts.guru')

@section('content')
<div class="content-wrapper">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <h1 style="font-size:26px; font-weight:700;">Data Kategori Izin</h1>

        <a href="{{ route('kategori-izin.create') }}" 
           style="
               background:#1E5EFF;
               color:white;
               padding:10px 16px;
               border-radius:8px;
               text-decoration:none;
               font-weight:600;
           ">
            + Tambah Kategori
        </a>
    </div>

    <div style="
        background:white; 
        padding:20px; 
        border-radius:12px; 
        box-shadow:0 2px 8px rgba(0,0,0,0.1);
    ">
        <table class="table" style="width:100%; border-collapse:collapse;">
            <thead>
                <tr style="background:#1E5EFF; color:white;">
                    <th style="padding:10px;">Nama Kategori</th>
                    <th style="padding:10px;">Deskripsi</th>
                    <th style="padding:10px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($kategori as $item)
                <tr style="border-bottom:1px solid #e5e7eb;">
                    <td style="padding:10px;">{{ $item->nama }}</td>
                    <td style="padding:10px;">{{ $item->deskripsi }}</td>

                    <td style="padding:10px;">
                        <a href="{{ route('kategori-izin.edit', $item->id) }}" 
                           style="
                               background:#fbbf24;
                               color:black;
                               padding:6px 10px;
                               border-radius:6px;
                               text-decoration:none;
                               font-size:14px;
                           ">
                           Edit
                        </a>

                        <form action="{{ route('kategori-izin.destroy', $item->id) }}"
                              method="POST"
                              style="display:inline-block;">
                            @csrf
                            @method('DELETE')

                            <button 
                                onclick="return confirm('Yakin ingin menghapus?')" 
                                style="
                                    background:#ef4444;
                                    color:white;
                                    padding:6px 10px;
                                    border:none;
                                    border-radius:6px;
                                    cursor:pointer;
                                    font-size:14px;
                                ">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" style="text-align:center; padding:20px; color:#6b7280;">
                        Belum ada data kategori izin
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
