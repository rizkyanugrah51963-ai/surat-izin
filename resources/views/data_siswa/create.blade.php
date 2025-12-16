<!DOCTYPE html>
<html lang="id">

<head>
    <title>Tambah Siswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Liquid Glass Style -->
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #43cea2, #185a9d);
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
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff;
        }

        /* Form */
        .form-label {
            color: #fff;
            font-weight: 500;
        }

        .glass-input {
            background: rgba(255, 255, 255, 0.75);
            border: none;
            border-radius: 12px;
            padding: 10px 14px;
            backdrop-filter: blur(6px);
            transition: all 0.25s ease;
        }

        .glass-input:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(67, 206, 162, 0.6);
            background: rgba(255, 255, 255, 0.9);
        }

        /* Buttons */
        .btn-glass-success {
            background: rgba(67, 206, 162, 0.85);
            color: #fff;
            border: none;
            border-radius: 12px;
            padding: 8px 18px;
            transition: all 0.3s ease;
        }

        .btn-glass-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: rgba(67, 206, 162, 1);
        }

        .btn-glass-secondary {
            background: rgba(255, 255, 255, 0.7);
            border: none;
            border-radius: 12px;
            padding: 8px 18px;
            transition: all 0.3s ease;
        }

        .btn-glass-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>

    <div class="container mt-5" style="max-width: 720px">

        <div class="glass-card">

            <div class="card-header glass-header px-4 py-3">
                <h5 class="mb-0">
                    <i class="bi bi-person-plus-fill"></i> Tambah Data Siswa
                </h5>
            </div>

            <div class="card-body p-4">

                <form action="{{ route('admin.data-siswa.store') }}" method="POST">
                    @csrf

                    @foreach (['username', 'email', 'nisn', 'provinsi', 'kabupaten', 'kecamatan', 'jenjang', 'sekolah'] as $field)
                        <div class="mb-3">
                            <label class="form-label text-capitalize">{{ $field }}</label>
                            <input type="text"
                                   name="{{ $field }}"
                                   class="form-control glass-input"
                                   required>
                        </div>
                    @endforeach

                    <div class="mt-4 d-flex gap-2">
                        <button class="btn btn-glass-success">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                        <a href="{{ route('admin.data-siswa.index') }}" class="btn btn-glass-secondary">
                            Kembali
                        </a>
                    </div>
                </form>

            </div>
        </div>

    </div>

</body>

</html>
