@extends('layouts.guru')

@section('content')
<div class="content-wrapper">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <h1>Edit Kategori Izin</h1>
        <a href="{{ route('kategori-izin.index') }}" class="btn-dashboard">Kembali</a>
    </div>

    <div style="background:white; padding:25px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">

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

            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Kategori</label>
                <input type="text" name="nama" class="form-control" value="{{ $kategori->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4">{{ $kategori->deskripsi }}</textarea>
            </div>

            <button type="submit" class="btn-dashboard">Update</button>
        </form>

    </div>

</div>
@endsection
