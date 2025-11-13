<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Surat Izin Sekolah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a2e0b7b5f1.js" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #f9fafb;
      font-family: 'Segoe UI', sans-serif;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #2563eb;
      color: white;
      position: fixed;
      left: 0;
      top: 0;
      padding: 20px;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px 12px;
      margin-bottom: 6px;
      border-radius: 8px;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #1d4ed8;
    }
    .main-content {
      margin-left: 250px;
      padding: 20px 40px;
    }
    .navbar {
      background-color: white;
      padding: 15px 25px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
      margin-left: 250px;
    }
  </style>
</head>
<body>

  {{-- Sidebar --}}
  @include('partials.sidebar')

  {{-- Navbar --}}
  @include('partials.navbar')

  {{-- Content --}}
  <div class="main-content">
    @yield('content')
  </div>

  {{-- Footer --}}
  @include('partials.footer')

</body>
</html>
