@extends('layouts.guru')

@section('content')
<div class="content-wrapper">
    <div class="table-card">
        <table class="table-dashboard">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guru as $g)
                <tr>
                    <td>{{ $g->nama }}</td>
                    <td>{{ $g->nip }}</td>
                    <td>{{ $g->mapel }}</td>
                    <td>
                        <a href="{{ route('guru.edit', $g->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('guru.destroy', $g->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus?')" class="btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
.btn-dashboard {
    background-color: #2563eb;
    color: white;
    padding: 8px 16px;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.2s;
}
.btn-dashboard:hover { background-color: #1d4ed8; }

.table-card {
    background: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.table-dashboard {
    width: 100%;
    border-collapse: collapse;
}

.table-dashboard th, .table-dashboard td {
    padding: 12px 10px;
    text-align: left;
}

.table-dashboard thead {
    background-color: #2563eb;
    color: white;
    border-radius: 8px;
}

.table-dashboard tbody tr {
    border-bottom: 1px solid #f0f0f0;
    transition: background 0.2s;
}

.table-dashboard tbody tr:hover {
    background-color: #f3f4f6;
}

.btn-edit {
    background-color: #facc15;
    color: black;
    padding: 4px 10px;
    border-radius: 4px;
    text-decoration: none;
}

.btn-edit:hover { background-color: #eab308; }

.btn-delete {
    background-color: #ef4444;
    color: white;
    padding: 4px 10px;
    border-radius: 4px;
    border: none;
    cursor: pointer;
}

.btn-delete:hover { background-color: #b91c1c; }
</style>
@endsection
