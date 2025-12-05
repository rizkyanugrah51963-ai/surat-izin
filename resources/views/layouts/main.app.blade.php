<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <style>
        .custom-header {
            background-color: #008000;
        }
        .custom-header th {
            color: #fff !important;
            border-color: #008000;
        }
    </style>
</head>
<body>
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-4 text-2xl font-bold border-b border-gray-700">
                Admin Panel
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <a href="{{ route('dashboard') }}" class="block py-2 px-3 rounded hover:bg-gray-700">
                    Dashboard
                </a>
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('users.index') }}" class="block py-2 px-3 rounded hover:bg-gray-700">
                        Users
                    </a>
                @endif
                <a href="{{ route('anggota.index') }}" class="block py-2 px-3 rounded hover:bg-gray-700">
                    Anggota
                </a>
                <a href="{{ route('kegiatan.index') }}" class="block py-2 px-3 rounded hover:bg-gray-700">
                    Kegiatan
                </a>
            </nav>
            <div class="p-4 border-t border-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full py-2 px-3 rounded bg-red-600 text-center hover:bg-red-700">
                        Logout
                    </button>
                </form>
            </div>
        </aside>
        <div class="flex-1 flex flex-col">
            <header class="bg-white shadow p-4 flex justify-between items-center relative">
                <h1 class="text-xl font-semibold">@yield('page-title', 'Dashboard')</h1>
                <div class="relative">
                    <button id="user-menu-btn" class="flex items-center space-x-3 focus:outline-none">
                        <span class="text-gray-700 font-medium">{{ Auth::user()->name ?? 'Guest' }}</span>
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'Guest') }}"
                             class="w-10 h-10 rounded-full border" alt="profile">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="user-dropdown"
                         class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border opacity-0 scale-95 transform transition-all duration-200 ease-out pointer-events-none">
                        <div class="px-4 py-3 border-b">
                            <p class="text-sm text-gray-600">Akun anda</p>
                            <p class="text-sm font-semibold text-gray-900">{{ Auth::user()->email ?? '-' }}</p>
                        </div>
<a href="{{ route('profile') }}"
   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition">
    Profil
</a>

                        <div class="border-t"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-100 transition">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </header>
            <main class="p-6 flex-1">
                @yield('content')
            </main>
        </div>
    </div>
    @stack('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('user-menu-btn');
            const dropdown = document.getElementById('user-dropdown');
            toggleBtn.addEventListener('click', function (event) {
                event.stopPropagation();
                dropdown.classList.toggle('opacity-0');
                dropdown.classList.toggle('scale-95');
                dropdown.classList.toggle('pointer-events-none');
            });
            document.addEventListener('click', function () {
                dropdown.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
            });
        });
    </script>
</body>
</html>
