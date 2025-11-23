@extends('layouts.guru')

@section('content')
<div class="container">
    <h1>Edit Guru</h1>

    <form action="{{ route('guru.update', $guru->id) }}" method="POST" style="max-width:500px;">
        @csrf
        @method('PUT')
        <div style="margin-bottom:15px;">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $guru->nama }}" class="form-control" style="width:100%; padding:8px; border-radius:6px; border:1px solid #ccc;" required>
        </div>
        <div style="margin-bottom:15px;">
            <label>NIP</label>
            <input type="text" name="nip" value="{{ $guru->nip }}" class="form-control" style="width:100%; padding:8px; border-radius:6px; border:1px solid #ccc;" required>
        </div>
        <div style="margin-bottom:15px;">
            <label>Mata Pelajaran</label>
            <input type="text" name="mapel" value="{{ $guru->mapel }}" class="form-control" style="width:100%; padding:8px; border-radius:6px; border:1px solid #ccc;" required>
        </div>

        <button type="submit" class="btn btn-primary" style="background-color:#2563eb; color:white; padding:8px 15px; border-radius:6px;">Update</button>
        <a href="{{ route('guru.index') }}" class="btn btn-secondary" style="background-color:#6b7280; color:white; padding:8px 15px; border-radius:6px;">Batal</a>
    </form>
</div>
@endsection
