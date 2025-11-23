@extends('layouts.guru')

@section('content')
<div class="content-wrapper">
    <div class="form-card">
        <h1>Tambah Guru</h1>
        <form action="{{ route('guru.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" required>
            </div>
            <div class="form-group">
                <label>Mata Pelajaran</label>
                <input type="text" name="mapel" required>
            </div>
            <button type="submit" class="btn-submit">Simpan</button>
            <a href="{{ route('guru.index') }}" class="btn-cancel">Batal</a>
        </form>
    </div>
</div>

<style>
.form-card {
    background:white;
    border-radius:8px;
    padding:20px;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
    max-width:500px;
}

.form-group {
    margin-bottom:15px;
}

.form-group label { display:block; margin-bottom:5px; font-weight:bold; }

.form-group input {
    width:100%;
    padding:8px;
    border-radius:6px;
    border:1px solid #ccc;
}

.btn-submit {
    background-color: #2563eb;
    color:white;
    padding:8px 16px;
    border-radius:6px;
    border:none;
}

.btn-submit:hover { background-color:#1d4ed8; }

.btn-cancel {
    background-color:#6b7280;
    color:white;
    padding:8px 16px;
    border-radius:6px;
    text-decoration:none;
    margin-left:10px;
}

.btn-cancel:hover { background-color:#4b5563; }
</style>
@endsection
