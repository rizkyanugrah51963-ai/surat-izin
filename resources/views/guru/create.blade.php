@extends('layouts.guru')

@section('content')
<div class="content-wrapper">
    <div class="glass-card">
        <h1>Tambah Guru</h1>

        <form action="{{ route('guru.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Masukkan nama guru" required>
            </div>

            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" placeholder="Masukkan NIP" required>
            </div>

            <div class="form-group">
                <label>Mata Pelajaran</label>
                <input type="text" name="mapel" placeholder="Masukkan mata pelajaran" required>
            </div>

            <div class="form-action">
                <button type="submit" class="btn-submit">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('guru.index') }}" class="btn-cancel">
                    <i class="fas fa-arrow-left"></i> Batal
                </a>
            </div>
        </form>
    </div>
</div>

<style>
/* BACKGROUND AREA */
.content-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #6366f1, #22d3ee);
    padding: 40px;
    font-family: 'Segoe UI', sans-serif;
}

/* GLASS CARD */
.glass-card {
    width: 100%;
    max-width: 480px;
    padding: 30px 35px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);
    border: 1px solid rgba(255,255,255,0.35);
    box-shadow: 0 25px 50px rgba(0,0,0,0.2);
}

/* TITLE */
.glass-card h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #ffffff;
    font-size: 28px;
    font-weight: 800;
    letter-spacing: 1px;
}

/* FORM GROUP */
.form-group {
    margin-bottom: 18px;
}

.form-group label {
    display: block;
    margin-bottom: 6px;
    color: #ffffff;
    font-weight: 600;
    font-size: 14px;
}

/* INPUT GLASS */
.form-group input {
    width: 100%;
    padding: 12px 14px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.4);
    background: rgba(255,255,255,0.2);
    color: #1f2937;
    font-size: 14px;
    outline: none;
    transition: 0.3s ease;
}

.form-group input::placeholder {
    color: rgba(31,41,55,0.6);
}

.form-group input:focus {
    background: rgba(255,255,255,0.35);
    border-color: #ffffff;
    box-shadow: 0 0 0 3px rgba(255,255,255,0.35);
}

/* ACTION BUTTON */
.form-action {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-top: 25px;
}

/* BUTTONS */
.btn-submit,
.btn-cancel {
    padding: 12px 20px;
    border-radius: 999px;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    border: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}

/* SUBMIT */
.btn-submit {
    background: linear-gradient(135deg, #22c55e, #16a34a);
    color: white;
}

.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(34,197,94,0.5);
}

/* CANCEL */
.btn-cancel {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
}

.btn-cancel:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(239,68,68,0.5);
}

/* RESPONSIVE */
@media (max-width: 480px) {
    .glass-card {
        padding: 25px;
    }

    .form-action {
        flex-direction: column;
    }
}
</style>
@endsection
