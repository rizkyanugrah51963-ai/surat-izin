<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-100">

<div class="flex">

    <!-- SIDEBAR -->
    <aside class="w-64 h-screen bg-white shadow-lg fixed z-50">

        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-blue-600">Admin Panel</h1>
        </div>

        <nav class="p-4 space-y-2">

            <!-- Dashboard -->
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 p-3 rounded-lg font-medium
               {{ request()->routeIs('admin.dashboard') ? 'bg-blue-100 text-blue-600' : 'text-gray-700 hover:bg-blue-100' }}">
                <i class="fa-solid fa-house"></i> Dashboard
            </a>

            <!-- Data Siswa -->
            <a href="{{ url('/data-siswa') }}"
               class="flex items-center gap-3 p-3 rounded-lg font-medium
               {{ request()->is('data-siswa*') ? 'bg-blue-100 text-blue-600' : 'text-gray-700 hover:bg-blue-100' }}">
                <i class="fa-solid fa-users"></i> Data Siswa
            </a>

            <!-- Data Guru -->
            <a href="{{ url('/admin/guru') }}"
               class="flex items-center gap-3 p-3 rounded-lg font-medium
               {{ request()->is('admin/guru*') ? 'bg-blue-100 text-blue-600' : 'text-gray-700 hover:bg-blue-100' }}">
                <i class="fa-solid fa-user-tie"></i> Data Guru
            </a>

            <!-- Surat Izin -->
            <a href="{{ route('admin.surat-izin.index') }}"
               class="flex items-center gap-3 p-3 rounded-lg font-medium
               {{ request()->routeIs('admin.surat-izin.*') ? 'bg-blue-100 text-blue-600' : 'text-gray-700 hover:bg-blue-100' }}">
                <i class="fa-solid fa-envelope-open"></i> Surat Izin
            </a>

            <!-- Kategori Izin -->
            <a href="{{ route('kategori-izin.index') }}"
               class="flex items-center gap-3 p-3 rounded-lg font-medium
               {{ request()->is('kategori-izin*') ? 'bg-blue-100 text-blue-600' : 'text-gray-700 hover:bg-blue-100' }}">
                <i class="fa-solid fa-layer-group"></i> Kategori Izin
            </a>

            <hr class="my-4">

            <div class="text-gray-500 text-sm px-2">Pengaturan</div>

            <!-- Profil -->
            <a href="{{ url('/admin/profile') }}"
               class="flex items-center gap-3 p-3 rounded-lg font-medium
               {{ request()->is('admin/profile*') ? 'bg-blue-100 text-blue-600' : 'text-gray-700 hover:bg-blue-100' }}">
                <i class="fa-solid fa-user"></i> Profil
            </a>

            <!-- Logout -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                    class="flex items-center w-full gap-3 p-3 rounded-lg hover:bg-red-100 text-red-600 font-medium">
                    <i class="fa-solid fa-right-from-br"></i> Logout
                </button>
            </form>

        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="ml-64 w-full">

        <!-- NAVBAR -->
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold">@yield('page-title')</h2>

            <div class="flex items-center gap-4">
                <i class="fa-solid fa-bell text-xl text-gray-600"></i>

                <div class="w-10 h-10 rounded-full overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=0D8ABC&color=fff"
                         class="rounded-full">
                </div>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <section class="p-6">
            @yield('content')
        </section>

    </main>
</div>

</body>
</html>
