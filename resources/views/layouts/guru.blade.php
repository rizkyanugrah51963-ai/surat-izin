<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Guru</title>

    <style>
        body {
            background-color: #f9fafb;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2563eb;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            z-index: 9999;
        }

        .sidebar h2 {
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 12px;
            margin-bottom: 6px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #1d4ed8;
        }

        /* NAVBAR */
        .navbar {
            background-color: white;
            padding: 15px 25px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            margin-left: 250px;
            position: fixed;
            top: 0;
            right: 0;
            left: 250px;
            z-index: 500;
        }

        /* KONTEN */
        .main-content {
            margin-left: 250px;
            padding: 20px 40px;
            padding-top: 100px;
            min-height: 100vh;
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Menu Guru</h2>

        <a href="{{ route('guru.index') }}"
            class="{{ request()->is('guru') ? 'active' : '' }}">
            Data Guru
        </a>

        <a href="{{ route('guru.create') }}"
            class="{{ request()->is('guru/create') ? 'active' : '' }}">
            Tambah Guru
        </a>
    </div>

    <!-- NAVBAR -->
    <div class="navbar">
        <h3>Aplikasi Data Guru</h3>
    </div>

    <!-- KONTEN UTAMA -->
    <div class="main-content">
        @yield('content')
    </div>

</body>

</html>
