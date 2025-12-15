@extends('layouts.guru')

@section('content')
<div class="oneui-wrapper">

    <!-- HEADER -->
    <div class="oneui-header">
        <div>
            <h1>Data Kategori Izin</h1>
            <p>Kelola kategori izin siswa</p>
        </div>

        <a href="{{ route('kategori-izin.create') }}" class="btn-primary">
            + Tambah
        </a>
    </div>

    <!-- CARD -->
    <div class="oneui-card">
        <table class="oneui-table">
            <thead>
                <tr>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th style="width:180px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($kategori as $item)
                <tr>
                    <td>
                        <strong>{{ $item->nama }}</strong>
                    </td>

                    <td>
                        {{ $item->keterangan ?? '-' }}
                    </td>

                    <td class="aksi">
                        <a href="{{ route('kategori-izin.edit', $item->id) }}" class="btn-edit">
                            Edit
                        </a>

                        <form action="{{ route('kategori-izin.destroy', $item->id) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')

                            <button onclick="return confirm('Yakin ingin menghapus?')" class="btn-delete">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="empty">
                        Belum ada data kategori izin
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

<style>
/* WRAPPER */
.oneui-wrapper {
    padding: 32px;
    background: #f4f6f8;
    min-height: 100vh;
    font-family: 'Segoe UI', sans-serif;
}

/* HEADER */
.oneui-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 24px;
}

.oneui-header h1 {
    font-size: 32px;
    font-weight: 800;
    color: #111827;
}

.oneui-header p {
    margin-top: 6px;
    color: #6b7280;
    font-size: 15px;
}

/* BUTTON PRIMARY */
.btn-primary {
    background: #1E5EFF;
    color: white;
    padding: 12px 20px;
    border-radius: 999px;
    font-weight: 700;
    text-decoration: none;
    transition: 0.3s;
}

.btn-primary:hover {
    background: #1a4fd8;
    box-shadow: 0 8px 20px rgba(30,94,255,0.35);
}

/* CARD */
.oneui-card {
    background: white;
    border-radius: 20px;
    padding: 20px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.08);
}

/* TABLE */
.oneui-table {
    width: 100%;
    border-collapse: collapse;
}

.oneui-table thead th {
    text-align: left;
    padding: 14px 12px;
    color: #6b7280;
    font-size: 13px;
    font-weight: 700;
}

.oneui-table tbody td {
    padding: 16px 12px;
    border-top: 1px solid #e5e7eb;
    font-size: 15px;
    color: #111827;
}

.oneui-table tbody tr:hover {
    background: #f9fafb;
}

/* AKSI */
.aksi {
    display: flex;
    gap: 10px;
    align-items: center;
}

.btn-edit {
    background: #fbbf24;
    color: #111827;
    padding: 8px 14px;
    border-radius: 999px;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
}

.btn-edit:hover {
    background: #f59e0b;
}

.btn-delete {
    background: #ef4444;
    color: white;
    padding: 8px 14px;
    border-radius: 999px;
    border: none;
    cursor: pointer;
    font-size: 13px;
    font-weight: 700;
}

.btn-delete:hover {
    background: #dc2626;
}

/* EMPTY */
.empty {
    text-align: center;
    padding: 30px;
    color: #6b7280;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .oneui-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
    }

    .aksi {
        flex-direction: column;
        align-items: stretch;
    }
}
</style>
@endsection
