@extends('layouts.main')
@section('page-title', 'Tambah Surat Izin')

@section('content')
<div class="form-card">
    <form action="{{ route('surat_izin.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control" value="{{ old('nama_siswa') }}" required>
        </div>

        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ old('kelas') }}" required>
        </div>

        <div class="form-group">
            <label>Tanggal Izin</label>
            <input type="date" name="tanggal_izin" class="form-control" value="{{ old('tanggal_izin') }}" required>
        </div>

        <div class="form-group">
            <label>Alasan</label>
            <textarea name="alasan" class="form-control" rows="3" required>{{ old('alasan') }}</textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="Sakit">Sakit</option>
                <option value="Izin">Izin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('surat_izin.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>

<style>
.form-card {
    background: #fff;
    padding: 25px 30px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    max-width: 600px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: 600;
    margin-bottom: 6px;
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    font-size: 0.95rem;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    border-color: #2563eb;
    outline: none;
}

.btn {
    padding: 8px 18px;
    border-radius: 6px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    transition: 0.2s;
}

.btn-success { background-color: #2563eb; color: white; }
.btn-success:hover { background-color: #1d4ed8; }

.btn-secondary { background-color: #6b7280; color: white; }
.btn-secondary:hover { background-color: #4b5563; }
</style>
@endsection
