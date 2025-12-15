@extends('layouts.guru')

@section('content')
<div class="content-wrapper">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <h1>Edit Kategori Izin</h1>
        <a href="{{ route('kategori-izin.index') }}" class="btn-dashboard">Kembali</a>
    </div>

    <div style="background:white; padding:25px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">

        {{-- Error Validation --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi Kesalahan:</strong>
                <ul>
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('kategori-izin.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Nama Kategori --}}
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Kategori</label>
                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    value="{{ old('nama', $kategori->nama) }}"
                    required
                >
            </div>

            {{-- Keterangan (BENER, SESUAI DATABASE) --}}
            <div class="mb-3">
                <label for="keterangan" class="form-label fw-bold">Keterangan</label>
                <textarea
                    name="keterangan"
                    class="form-control"
                    rows="4"
                >{{ old('keterangan', $kategori->keterangan) }}</textarea>
            </div>

            <button type="submit" class="btn-dashboard">
                Update
            </button>
        </form>

    </div>

</div>
@endsection
