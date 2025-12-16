<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6 text-blue-600">Login Admin</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.process') }}">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-600">Email</label>
            <input type="email" name="email" required
                   class="w-full p-2 border rounded mt-1">
        </div>

        <div class="mb-4">
            <label class="block text-gray-600">Password</label>
            <input type="password" name="password" required
                   class="w-full p-2 border rounded mt-1">
        </div>

        <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
            Login Admin
        </button>
    </form>
</div>

</body>
</html>
