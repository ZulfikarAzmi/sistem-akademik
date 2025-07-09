<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans">

  <!-- Navbar -->
  <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Dashboard</h1>
    <form method="POST" action="/logout">
  @csrf
  <button type="submit" class="text-gray-700 hover:text-blue-500">
    Logout
  </button>
</form>
  </nav>

  <!-- Sidebar + Content -->
  <div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow h-screen p-4">
      <ul class="space-y-2">
        <li><a href="#" class="block text-gray-800 hover:text-blue-500">Home</a></li>
        <li><a href="/dashboard/mahasiswa" class="block text-gray-800 hover:text-blue-500">Mahasiswa</a></li>
        <li><a href="#" class="block text-gray-800 hover:text-blue-500">Settings</a></li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <h2 class="text-2xl font-semibold mb-4">Selamat Datang!</h2>
      <p class="text-gray-700 mb-6">Silakan pilih menu di sidebar.</p>

      <!-- Tombol ke /dashboard/mahasiswa -->
      <a href="/dashboard/mahasiswa" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Kelola Mahasiswa
      </a>
    </main>
  </div>

</body>
</html>
