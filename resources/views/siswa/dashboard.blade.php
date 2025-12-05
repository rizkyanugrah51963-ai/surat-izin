<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
</head>

<body>
    <h1>Dashboard Siswa</h1>

    <h2>Profil</h2>
    <p><strong>Username:</strong> {{ auth()->user()->name ?? '' }}</p>
    <p><strong>Email:</strong> {{ auth()->user()->email ?? '' }}</p>
    <p><strong>NISN:</strong> {{ auth()->user()->nisn ?? '' }}</p>
    <p><strong>Provinsi:</strong> {{ auth()->user()->provinsi ?? '' }}</p>
    <p><strong>Kabupaten:</strong> {{ auth()->user()->kabupaten ?? '' }}</p>
    <p><strong>Kecamatan:</strong> {{ auth()->user()->kecamatan ?? '' }}</p>
    <p><strong>Jenjang:</strong> {{ auth()->user()->jenjang ?? '' }}</p>
    <p><strong>Sekolah:</strong> {{ auth()->user()->sekolah ?? '' }}</p>

    <hr>

    <h2>Menu</h2>
    <ul>
        <li><a href="#">Buat Surat Izin</a></li>
        <li><a href="#">Lihat Surat Izin</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
</body>

</html>
