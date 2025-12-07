<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru - Aplikasi Data Surat Izin</title>
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
            width: 280px;
            background: #f8f9fa;
            padding: 24px 12px;
            border-right: 1px solid #e8eaed;
            overflow-y: auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 12px;
            margin-bottom: 30px;
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

        .menu-section {
            margin-bottom: 24px;
        }

        .menu-title {
            font-size: 12px;
            font-weight: 600;
            color: #5f6368;
            padding: 8px 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
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
            transform: translateX(4px);
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
            padding-bottom: 16px;
            border-bottom: 2px solid #f1f3f4;
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            transform: scale(1.002);
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
            transform: translateY(-2px);
        }

        .btn-warning {
            background: #fbbc04;
            color: #202124;
        }

        .btn-warning:hover {
            background: #f9ab00;
            box-shadow: 0 2px 8px rgba(251, 188, 4, 0.3);
            transform: translateY(-2px);
        }

        .btn-danger {
            background: #ea4335;
            color: white;
        }

        .btn-danger:hover {
            background: #d33b2c;
            box-shadow: 0 2px 8px rgba(234, 67, 53, 0.3);
            transform: translateY(-2px);
        }

        .btn-success {
            background: #34a853;
            color: white;
        }

        .btn-success:hover {
            background: #2d8e47;
            box-shadow: 0 2px 8px rgba(52, 168, 83, 0.3);
            transform: translateY(-2px);
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

        textarea.form-control {
            min-height: 100px;
            resize: vertical;
        }

        select.form-control {
            cursor: pointer;
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

        /* ALERT / NOTIFICATIONS */
        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-success {
            background: #e8f5e9;
            color: #2e7d32;
            border-left: 4px solid #4caf50;
        }

        .alert-danger {
            background: #ffebee;
            color: #c62828;
            border-left: 4px solid #f44336;
        }

        .alert-warning {
            background: #fff3e0;
            color: #e65100;
            border-left: 4px solid #ff9800;
        }

        .alert-info {
            background: #e3f2fd;
            color: #1565c0;
            border-left: 4px solid #2196f3;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                border-radius: 16px;
                margin: 20px 10px;
            }

            .sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #e8eaed;
            }

            .header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }

            .search-box {
                width: 100%;
            }

            .main-content {
                padding: 20px;
            }

            .page-title {
                font-size: 24px;
            }
        }

        /* BADGE */
        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }

        .badge-primary {
            background: #e8f0fe;
            color: #1a73e8;
        }

        .badge-success {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .badge-warning {
            background: #fff3e0;
            color: #e65100;
        }

        .badge-danger {
            background: #ffebee;
            color: #c62828;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <div class="logo">
                <div class="logo-icon">📚</div>
                <div class="logo-text">Dashboard Guru</div>
            </div>

            <!-- MENU SURAT IZIN -->
            <div class="menu-section">
                <div class="menu-title">Surat Izin</div>
                
                <a href="{{ route('surat_izin.index') }}"
                   class="nav-item {{ request()->is('surat_izin') ? 'active' : '' }}">
                    <span class="nav-icon">📄</span>
                    <span>Data Surat Izin</span>
                </a>

                <a href="{{ route('surat_izin.create') }}"
                   class="nav-item {{ request()->is('surat_izin/create') ? 'active' : '' }}">
                    <span class="nav-icon">✏️</span>
                    <span>Tambah Surat Izin</span>
                </a>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</body>
</html>