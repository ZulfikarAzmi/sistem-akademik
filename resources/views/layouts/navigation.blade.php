<!-- Navigation Links -->
<div class="hidden sm:flex sm:items-center sm:space-x-6 ms-10">
    <a href="{{ route('dashboard') }}"
        class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200
        {{ request()->routeIs('dashboard') ? 'bg-indigo-600 text-white shadow' : 'text-gray-600 hover:bg-gray-100 hover:text-indigo-600' }}">
        Dashboard
    </a>
    <a href="{{ url('dashboard/mahasiswa') }}"
        class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200
        {{ request()->is('mahasiswa*') ? 'bg-indigo-600 text-white shadow' : 'text-gray-600 hover:bg-gray-100 hover:text-indigo-600' }}">
        Mahasiswa
    </a>
    <a href="{{ url('dashboard/prodi') }}"
        class="px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200
        {{ request()->is('prodi*') ? 'bg-indigo-600 text-white shadow' : 'text-gray-600 hover:bg-gray-100 hover:text-indigo-600' }}">
        Prodi
    </a>
</div>
