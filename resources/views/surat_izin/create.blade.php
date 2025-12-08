@extends('layouts.main')

@section('content')
<div class="header">
    <h1 class="page-title">Tambah Surat Izin</h1>
</div>

<div class="form-container">
    <div class="card-header">
        <h2 class="card-title">Form Pengajuan Surat Izin</h2>
        <span class="badge badge-primary">Formulir Baru</span>
    </div>

    <form action="{{ route('surat_izin.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="form-label">Nama Siswa</label>
            <input type="text" 
                   name="nama_siswa" 
                   class="form-control" 
                   value="{{ old('nama_siswa') }}" 
                   placeholder="Masukkan nama lengkap siswa"
                   required>
            @error('nama_siswa')
                <small style="color: #ea4335; font-size: 12px; margin-top: 4px; display: block;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label">Kelas</label>
            <input type="text" 
                   name="kelas" 
                   class="form-control" 
                   value="{{ old('kelas') }}" 
                   placeholder="Contoh: X IPA 1"
                   required>
            @error('kelas')
                <small style="color: #ea4335; font-size: 12px; margin-top: 4px; display: block;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label">Tanggal Izin</label>
            <input type="date" 
                   name="tanggal_izin" 
                   class="form-control" 
                   value="{{ old('tanggal_izin') }}" 
                   required>
            @error('tanggal_izin')
                <small style="color: #ea4335; font-size: 12px; margin-top: 4px; display: block;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label">Alasan Izin</label>
            <textarea name="alasan" 
                      class="form-control" 
                      rows="4" 
                      placeholder="Jelaskan alasan izin secara detail..."
                      required>{{ old('alasan') }}</textarea>
            @error('alasan')
                <small style="color: #ea4335; font-size: 12px; margin-top: 4px; display: block;">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label">Status Izin</label>
            <select name="status" class="form-control" required>
                <option value="">-- Pilih Status --</option>
                <option value="Sakit" {{ old('status') == 'Sakit' ? 'selected' : '' }}>🤒 Sakit</option>
                <option value="Izin" {{ old('status') == 'Izin' ? 'selected' : '' }}>📝 Izin</option>
            </select>
            @error('status')
                <small style="color: #ea4335; font-size: 12px; margin-top: 4px; display: block;">{{ $message }}</small>
            @enderror
        </div>

        <div style="display: flex; gap: 12px; margin-top: 32px; padding-top: 24px; border-top: 2px solid #f1f3f4;">
            <button type="submit" class="btn btn-primary">
                ✓ Simpan Surat Izin
            </button>
            <a href="{{ route('surat_izin.index') }}" class="btn" style="background: #f1f3f4; color: #5f6368;">
                ← Kembali
            </a>
        </div>
    </form>
</div>

<style>
    /* Additional specific styling for this form */
    .form-control::placeholder {
        color: #9ca3af;
        font-size: 13px;
    }

    .form-group small {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .form-group small::before {
        content: "⚠️";
        font-size: 10px;
    }

    select.form-control option {
        padding: 10px;
    }

    /* Animation for form */
    .form-container {
        animation: slideUp 0.3s ease-out;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Focus state enhancement */
    .form-control:focus {
        border-color: #1a73e8 !important;
        box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1) !important;
    }

    /* Button hover enhancement */
    .btn:hover {
        transform: translateY(-2px);
    }
</style>
@endsection