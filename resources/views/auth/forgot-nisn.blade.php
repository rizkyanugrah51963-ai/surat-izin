<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa NISN</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 400px;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            font-size: 14px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            border-radius: 6px;
        }

        .btn {
            width: 100%;
            background: #1976d2;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            margin-top: 15px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn:hover {
            background: #0d47a1;
        }

        .back-link {
            text-align: center;
            display: block;
            margin-top: 18px;
            color: #1976d2;
            font-size: 14px;
            text-decoration: none;
        }

        .alert {
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 12px;
        }

        .alert-success {
            background: #c8f7d3;
            color: #145a32;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
        }
    </style>

</head>
<body>

    <div class="card">

        <h2>Lupa NISN</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        <form action="{{ route('forgot.nisn.post') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Email Anda</label>
                <input type="email" name="email" placeholder="Masukkan email aktif" required>
            </div>

            <button type="submit" class="btn">Cari NISN</button>
        </form>

        <a href="{{ route('login') }}" class="back-link">
            ← Kembali ke Login
        </a>
    </div>

</body>
</html>
