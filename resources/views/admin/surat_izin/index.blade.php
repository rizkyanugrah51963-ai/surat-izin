<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Surat Izin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #6366f1, #22d3ee);
            color: #1f2937;
        }

        /* GLASS EFFECT */
        .glass {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: 16px;
            border: 1px solid rgba(255,255,255,0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 25px;
        }

        .logo {
            text-align: center;
            margin-bottom: 35px;
        }

        .logo i {
            font-size: 42px;
            color: #fff;
            margin-bottom: 10px;
        }

        .logo h2 {
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .sidebar-nav {
            list-style: none;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 14px 18px;
            margin-bottom: 10px;
            border-radius: 12px;
            color: #fff;
            text-decoration: none;
            transition: 0.3s;
            font-weight: 500;
        }

        .sidebar-nav a:hover,
        .sidebar-nav a.active {
            background: rgba(255,255,255,0.35);
        }

        /* MAIN CONTENT */
        .main-content {
            margin-left: 260px;
            padding: 40px;
        }

        .page-header {
            margin-bottom: 30px;
            color: #fff;
        }

        .page-header h1 {
            font-size: 32px;
            font-weight: 800;
        }

        .page-header p {
            opacity: 0.9;
        }

        /* TABLE */
        .table-container {
            padding: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        thead {
            background: rgba(255,255,255,0.35);
        }

        th, td {
            padding: 14px;
            text-align: left;
        }

        th {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 12px;
        }

        tbody tr {
            border-bottom: 1px solid rgba(255,255,255,0.25);
            transition: 0.2s;
        }

        tbody tr:hover {
            background: rgba(255,255,255,0.25);
        }

        /* STATUS */
        .status {
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: #fff;
            display: inline-block;
        }

        .status.pending {
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
        }

        .status.approved {
            background: linear-gradient(135deg, #22c55e, #16a34a);
        }

        .status.rejected {
            background: linear-gradient(135deg, #ef4444, #dc2626);
        }

        a.link {
            color: #1e3a8a;
            font-weight: 700;
            text-decoration: none;
        }

        a.link:hover {
            text-decoration: underline;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar glass">
    <div class="logo">
        <i class="fas fa-file-signature"></i>
        <h2>SURAT IZIN</h2>
    </div>

    <ul class="sidebar-nav">
        <li>
            <a href="#" class="active">
                <i class="fas fa-table"></i>
                Data Surat Izin
            </a>
        </li>
    </ul>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="page-header">
        <h1>Data Surat Izin</h1>
        <p>Kelola surat izin dengan tampilan Liquid Glass modern</p>
    </div>

    <div class="table-container glass">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                    <th>Alasan</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Bukti</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($suratIzin as $izin)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $izin->nama_siswa }}</td>
                    <td>{{ $izin->kelas }}</td>
                    <td>{{ $izin->tanggal_izin }}</td>
                    <td>{{ $izin->alasan }}</td>
                    <td>{{ $izin->keterangan }}</td>
                    <td>
                        <span class="status {{ $izin->status }}">
                            {{ $izin->status }}
                        </span>
                    </td>
                    <td>
                        @if($izin->bukti)
                            <a href="{{ asset('storage/'.$izin->bukti) }}" target="_blank" class="link">
                                Lihat
                            </a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" style="text-align:center;">
                        Belum ada data surat izin
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
