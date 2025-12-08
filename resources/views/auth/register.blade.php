<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('/user/assets/img/lorong.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .form-container {
            width: 60%;
            max-width: 700px;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #2F67FF;
            margin-bottom: 25px;
            font-size: 28px;
        }

        .row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }

        .row div {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 15px;
        }

        .btn-daftar {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            background: #2F67FF;
            color: white;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-daftar:hover {
            background: #1e4ed8;
        }
    </style>
</head>
<body>

    <form class="form-container" method="POST" action="{{ route('register.store') }}">
        @csrf

        <h2>Sign Up</h2>

        <!-- Baris 1 -->
        <div class="row">
            <div>
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label>Nama Lengkap</label>
                <input type="text" name="name" required>
            </div>
        </div>

        <!-- Baris 2 -->
        <div class="row">
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div>
                <label>NISN</label>
                <input type="text" name="nisn" required>
            </div>
        </div>

        <!-- Baris 3 (Konfirmasi NISN ke tengah) -->
        <div class="row">
            <div></div> <!-- Kosong kiri biar centering -->

            <div>
                <label>Konfirmasi NISN</label>
                <input type="text" name="nisn_confirmation" required>
            </div>

            <div></div> <!-- Kosong kanan biar centering -->
        </div>

        <button type="submit" class="btn-daftar">Daftar</button>

    </form>

</body>
</html>
