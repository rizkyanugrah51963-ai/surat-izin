<!DOCTYPE html>
<html lang="id">

<head>
    <title>Edit Siswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Liquid Glass Style -->
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f7971e, #ffd200);
            font-family: 'Inter', sans-serif;
        }

        /* Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.35);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.18);
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.35);
        }

        /* Form */
        .form-label {
            font-weight: 500;
            color: #3b3b3b;
        }

        .glass-input {
            background: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 12px;
            padding: 10px 14px;
            transition: all 0.25s ease;
        }

        .glass-input:focus {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 0 0 2px rgba(247, 151, 30, 0.6);
            outline: none;
        }

        /* Buttons */
        .btn-glass-warning {
            background: rgba(247, 151, 30, 0.9);
            color: #fff;
            border: none;
            border-radius: 12px;
            padding: 8px 18px;
            transition: all 0.3s ease;
        }

        .btn-glass-warning:hover {
            background: rgba(247, 151, 30, 1);
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.25);
        }

        .btn-glass-secondary {
            background: rgba(255, 255, 255, 0.75);
            border: none;
            border-radius: 12px;
            padding: 8px 18px;
            transition: all 0.3s ease;
        }

        .btn-glass-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>

<div class="container mt-5" style="max-width: 720px">

    <div class="glass-card">

        <div class="card-header glass-header px-4 py-3">
            <h5 class="mb-0">
                <i class="bi bi-pencil-square"></i> Edit Data Siswa
            </h5>
        </div>

        <div class="card-body p-4">

            <form action="{{ route('admin.data-siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                @foreach(['username','email','nisn','provinsi','kabupaten','kecamatan','jenjang','sekolah'] as $field)
                    <div class="mb-3">
                        <label class="form-label text-capitalize">{{ $field }}</label>
                        <input type="text"
                               name="{{ $field }}"
                               class="form-control glass-input"
                               value="{{ $siswa->$field }}"
                               required>
                    </div>
                @endforeach

                <div class="mt-4 d-flex gap-2">
                    <button class="btn btn-glass-warning">
                        <i class="bi bi-save"></i> Update
                    </button>
                    <a href="{{ route('admin.data-siswa.index') }}"
                       class="btn btn-glass-secondary">
                        Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>
