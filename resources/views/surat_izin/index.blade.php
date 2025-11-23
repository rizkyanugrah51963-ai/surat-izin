@extends('layouts.main')
@section('page-title', 'Data Surat Izin')

@section('content')
<div class="table-card">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <h1>Data Surat Izin</h1>
        <a href="{{ route('surat_izin.create') }}" class="btn-dashboard">Tambah Surat Izin</a>
    </div>

    <div class="table-responsive">
        <table class="table-dashboard">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Tanggal Izin</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($surat as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="nama-kolom">{{ $item->nama_siswa }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->tanggal_izin }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('surat_izin.edit', $item->id) }}" class="btn-edit">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data surat izin.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<style>
/* Card Table */
.table-card {
    background: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

/* Tombol Tambah */
.btn-dashboard {
    background-color: #2563eb;
    color: white;
    padding: 8px 16px;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.2s;
}
.btn-dashboard:hover {
    background-color: #1d4ed8;
}

/* Table */
.table-responsive {
    overflow-x: auto;
}

.table-dashboard {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.95rem;
}

.table-dashboard th,
.table-dashboard td {
    border: 1px solid #e5e7eb;
    padding: 10px 12px;
    text-align: left;
}

.table-dashboard th {
    background-color: #2563eb;
    color: white;
}

.table-dashboard tbody tr:nth-child(even) {
    background-color: #f3f4f6;
}

.table-dashboard tbody tr:hover {
    background-color: #e0e7ff;
}

/* Tombol Edit */
.btn-edit {
    background-color: #2563eb;
    color: white;
    padding: 4px 10px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 0.85rem;
}
.btn-edit:hover {
    background-color: #1d4ed8;
}

/* Nama Siswa - agar wrap jika terlalu panjang */
.nama-kolom {
    max-width: 180px;
    white-space: normal;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
</style>
@endsection
