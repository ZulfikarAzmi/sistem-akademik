<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-3xl mx-auto mt-20 bg-white p-8 rounded-2xl shadow">
        <h1 class="text-2xl font-bold text-gray-700 mb-4">
            Selamat Datang, {{ Auth::user()->name }}!
        </h1>

        <p class="text-gray-600 text-lg">
            Role kamu adalah: 
            <span class="font-semibold text-green-600">
                {{ Auth::user()->role }}
            </span>
        </p>

        <div class="mt-6">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="text-red-500 hover:underline">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>
    </div>
</body>
</html>
