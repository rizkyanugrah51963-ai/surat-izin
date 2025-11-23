<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Surat Izin</title>

    <style>
        body {
            background-color: #f9fafb;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* SIDEBAR CSS */
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

        /* NAVBAR CSS */
        .navbar {
            background-color: white;
            padding: 15px 25px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
            margin-left: 250px;
            position: fixed;
            top: 0;
            right: 0;
            left: 250px;
            z-index: 100;
        }

        /* KONTEN UTAMA CSS */
        .main-content {
            margin-left: 250px;
            padding: 20px 40px;
            padding-top: 100px;
            min-height: 100vh;
            position: relative;
            z-index: 1;
        }

        /* --- CSS BARU UNTUK TABEL (Membuatnya Ringkas) --- */
        .table-responsive {
            overflow-x: auto; /* Memastikan tabel bisa digulir di layar kecil */
        }

        .data-table {
            width: 100%;
            border-collapse: collapse; 
            font-size: 0.9rem; /* Ukuran font lebih kecil */
        }

        .data-table th,
        .data-table td {
            border: 1px solid #e5e7eb;
            padding: 8px 10px; /* Mengurangi padding vertikal dan horizontal */
            text-align: left;
        }

        .data-table th {
            background-color: #3b82f6;
            color: white;
            padding: 10px 10px; /* Padding header yang disesuaikan */
        }

        .data-table tr:nth-child(even) {
            background-color: #f3f4f6; /* Warna selang-seling */
        }
        
        /* CSS untuk tombol 'Detail' agar seragam dengan gambar */
        .btn-detail {
            background-color: #3b82f6;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.8rem;
            display: inline-block;
        }
        /* --- AKHIR CSS TABEL BARU --- */

    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Menu</h2>

        <a href="{{ route('surat_izin.index') }}"
           class="{{ request()->is('surat_izin') ? 'active' : '' }}">
            Data Surat Izin
        </a>

        <a href="{{ route('surat_izin.create') }}"
           class="{{ request()->is('surat_izin/create') ? 'active' : '' }}">
            Tambah Surat Izin
        </a>
        
        </div>

    <div class="navbar">
        <h3>Data Surat Izin</h3>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>