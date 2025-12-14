<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style(1).css') }}">

    @stack('styles')
</head>
<body class="bg-light">

<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
    <span class="navbar-brand fw-bold">
        @yield('page-title', 'Dashboard')
    </span>

    <div class="ms-auto dropdown">
        <button class="btn btn-light dropdown-toggle d-flex align-items-center gap-2"
                type="button"
                data-bs-toggle="dropdown">
            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name ?? 'User') }}"
                 width="36" height="36" class="rounded-circle">
            <span>{{ Auth::user()->name }}</span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
            <li class="px-3 py-2 small text-muted">
                {{ Auth::user()->email }}
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <a class="dropdown-item" href="{{ route('siswa.profile') }}">
                    Profil
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item text-danger">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<!-- CONTENT -->
<main class="container my-4">
    @yield('content')
</main>

<script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>
@stack('scripts')

</body>
</html>
