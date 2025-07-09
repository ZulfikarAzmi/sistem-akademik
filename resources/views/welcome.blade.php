<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Joule University</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-white shadow p-6">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Joule University</h1>
            <div class="space-x-4">
                <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Login</a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">Register</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center justify-center text-center p-6">
        <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc" 
             alt="Campus Image" 
             class="w-full max-w-xl rounded shadow mb-6">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Selamat Datang di Joule University</h2>
        <p class="text-gray-600 max-w-md">Platform Sistem Akademik Terintegrasi untuk Mahasiswa dan Dosen.</p>
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center p-4 text-gray-500 text-sm">
        &copy; {{ date('Y') }} Joule University. All rights reserved.
    </footer>

</body>
</html>
