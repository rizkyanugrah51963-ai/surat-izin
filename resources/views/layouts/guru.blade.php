<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Google Sans', 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            background: white;
            border-radius: 28px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            display: flex;
            min-height: 90vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            background: #f8f9fa;
            padding: 24px 12px;
            border-right: 1px solid #e8eaed;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 12px;
            margin-bottom: 20px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #4285f4, #34a853);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .logo-text {
            font-size: 22px;
            font-weight: 500;
            color: #202124;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 10px 12px;
            margin: 2px 0;
            border-radius: 20px;
            color: #5f6368;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 14px;
            text-decoration: none;
        }

        .nav-item:hover {
            background: #e8f0fe;
        }

        .nav-item.active {
            background: #e8f0fe;
            color: #1a73e8;
            font-weight: 500;
        }

        .nav-icon {
            width: 20px;
            height: 20px;
            font-size: 18px;
        }

        /* MAIN CONTENT */
        .main-content {
            flex: 1;
            padding: 24px 32px;
            overflow-y: auto;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 32px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 400;
            color: #202124;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: #f1f3f4;
            padding: 8px 16px;
            border-radius: 8px;
            width: 300px;
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            margin-left: 8px;
            width: 100%;
            font-size: 14px;
        }

        /* TABLE */
        .table-container {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: linear-gradient(135deg, #667eea 0%, #0400ff 100%);
            color: white;
        }

        th {
            padding: 16px;
            text-align: left;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        td {
            padding: 14px 16px;
            font-size: 14px;
            color: #202124;
            border-bottom: 1px solid #f1f3f4;
        }

        tbody tr {
            transition: all 0.2s;
        }

        tbody tr:hover {
            background: #f8f9fa;
        }

        /* BUTTONS */
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #1a73e8;
            color: white;
        }

        .btn-primary:hover {
            background: #1557b0;
            box-shadow: 0 2px 8px rgba(26, 115, 232, 0.3);
        }

        .btn-warning {
            background: #fbbc04;
            color: #202124;
        }

        .btn-warning:hover {
            background: #f9ab00;
            box-shadow: 0 2px 8px rgba(251, 188, 4, 0.3);
        }

        .btn-danger {
            background: #ea4335;
            color: white;
        }

        .btn-danger:hover {
            background: #d33b2c;
            box-shadow: 0 2px 8px rgba(234, 67, 53, 0.3);
        }

        .btn-group {
            display: flex;
            gap: 8px;
        }

        /* FORM STYLES */
        .form-container {
            background: white;
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 500;
            color: #202124;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #dadce0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.2s;
        }

        .form-control:focus {
            outline: none;
            border-color: #1a73e8;
            box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
        }

        /* CARD */
        .card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 24px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 2px solid #f1f3f4;
        }

        .card-title {
            font-size: 20px;
            font-weight: 500;
            color: #202124;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #e8eaed;
            }

            .header {
                flex-direction: column;
                gap: 16px;
            }

            .search-box {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <div class="logo">
                <div class="logo-text">Dashboard Guru</div>
            </div>

            <a href="{{ route('kategori-izin.index') }}" 
               class="nav-item {{ request()->is('kategori-izin') ? 'active' : '' }}">
                <span class="nav-icon">📋</span>
                <span>Data Kategori Izin</span>
            </a>

            <a href="{{ route('kategori-izin.create') }}" 
               class="nav-item {{ request()->is('kategori-izin/create') ? 'active' : '' }}">
                <span class="nav-icon">➕</span>
                <span>Tambah Kategori Izin</span>
            </a>

            <a href="{{ route('guru.index') }}" 
               class="nav-item {{ request()->is('guru') ? 'active' : '' }}">
                <span class="nav-icon">👨‍🏫</span>
                <span>Data Guru</span>
            </a>

            <a href="{{ route('guru.create') }}" 
               class="nav-item {{ request()->is('guru/create') ? 'active' : '' }}">
                <span class="nav-icon">➕</span>
                <span>Tambah Guru</span>
            </a>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</body>
</html>