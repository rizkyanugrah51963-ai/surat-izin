<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Akses Ditolak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md text-center">
        <h1 class="text-6xl font-bold text-red-500">403</h1>
        <h2 class="text-2xl font-semibold mt-4">Akses Ditolak</h2>

        <p class="text-gray-600 mt-2">
            Maaf, Anda tidak memiliki izin untuk mengakses halaman ini.
        </p>

        <div class="mt-6 flex justify-center gap-3">
            <a href="{{ url()->previous() }}"
               class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                Kembali
            </a>

            <a href="{{ route('index') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Beranda
            </a>
        </div>
    </div>

</body>
</html>
