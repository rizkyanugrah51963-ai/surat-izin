<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Liquid Glass Style -->
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: 'Inter', sans-serif;
        }

        /* Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff;
        }

        /* Table Glass */
        .glass-table {
            background: rgba(255, 255, 255, 0.65);
            border-radius: 14px;
            overflow: hidden;
        }

        .glass-table thead {
            background: rgba(255, 255, 255, 0.85);
        }

        .glass-table tbody tr {
            transition: all 0.25s ease;
        }

        .glass-table tbody tr:hover {
            background: rgba(102, 126, 234, 0.15);
        }

        /* Buttons */
        .btn-glass {
            background: rgba(255, 255, 255, 0.75);
            border: none;
            backdrop-filter: blur(6px);
            transition: all 0.3s ease;
        }

        .btn-glass:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
        }

        .btn-warning,
        .btn-danger {
            border-radius: 10px;
        }

        /* Alert Glass */
        .alert {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(8px);
            border: none;
            border-radius: 12px;
        }

        /* Text */
        h5, th {
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="container mt-5">

        <div class="glass-card">

            <div class="card-header glass-header d-flex justify-content-between align-items-center px-4 py-3">
                <h5 class="mb-0">
                    <i class="bi bi-people-fill"></i> Data Siswa
                </h5>
                <a href="{{ route('admin.data-siswa.create') }}" class="btn btn-glass btn-sm">
                    <i class="bi bi-plus-circle"></i> Tambah
                </a>
            </div>

            <div class="card-body p-4">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <i class="bi bi-check-circle"></i> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="table-responsive glass-table">
                    <table class="table table-borderless align-middle mb-0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>NISN</th>
                                <th>Jenjang</th>
                                <th>Sekolah</th>
                                <th width="140">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($siswas as $no => $siswa)
                                <tr>
                                    <td class="text-center">{{ $no + 1 }}</td>
                                    <td>{{ $siswa->username }}</td>
                                    <td>{{ $siswa->email }}</td>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->jenjang }}</td>
                                    <td>{{ $siswa->sekolah }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.data-siswa.edit', $siswa->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('admin.data-siswa.destroy', $siswa->id) }}"
                                            method="POST" class="d-inline"
                                            onsubmit="return confirm('Yakin hapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted py-4">
                                        <i class="bi bi-info-circle"></i> Belum ada data siswa
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
