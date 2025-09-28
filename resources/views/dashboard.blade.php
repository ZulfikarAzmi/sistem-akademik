<x-app-layout>
   <x-slot name="header">
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Dashboard Akademik</h2>
            <p class="text-sm text-gray-600 mt-1">Selamat datang, {{ Auth::user()->name }}</p>
        </div>
        
        <!-- Settings Dropdown -->
        <div class="relative ms-3">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none transition duration-150 ease-in-out">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div class="ms-1 hidden sm:block">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ Auth::user()->email }}
                    </div>

                    <div class="border-t border-gray-200"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-sign-out-alt mr-2 text-gray-400"></i>
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid Statistik -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Card Mahasiswa -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Mahasiswa</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">{{ $jumlahMahasiswa }}</p>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-xs text-green-500 ml-1">+12% dari bulan lalu</span>
                                </div>
                            </div>
                            <div class="p-3 bg-blue-50 rounded-xl">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20h6m-6 0a2 2 0 01-2-2H5a4 4 0 014-4h1m0 0a2 2 0 012-2h2a2 2 0 012 2m0 0v4m0 0a2 2 0 002 2"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Dosen -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Dosen</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">{{ $jumlahDosen }}</p>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-xs text-green-500 ml-1">+5% dari bulan lalu</span>
                                </div>
                            </div>
                            <div class="p-3 bg-green-50 rounded-xl">
                                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 016.16 10.922L12 14zm0 0l-6.16-3.422A12.083 12.083 0 002 19.5L12 14z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Prodi -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Program Studi</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">{{ $jumlahProdi }}</p>
                                <div class="flex items-center mt-1">
                                    <span class="text-xs text-gray-500 ml-1">Semua aktif</span>
                                </div>
                            </div>
                            <div class="p-3 bg-purple-50 rounded-xl">
                                <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Mata Kuliah -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Mata Kuliah</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">{{ $jumlahMataKuliah }}</p>
                                <div class="flex items-center mt-1">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-xs text-green-500 ml-1">+8% dari semester lalu</span>
                                </div>
                            </div>
                            <div class="p-3 bg-amber-50 rounded-xl">
                                <svg class="w-8 h-8 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid Informasi Tambahan -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Card Ringkasan -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Ringkasan Akademik</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600">Rasio Dosen:Mahasiswa</span>
                            <span class="font-semibold text-gray-900">1:25</span>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-gray-100">
                            <span class="text-gray-600">Rata-rata Mata Kuliah per Prodi</span>
                            <span class="font-semibold text-gray-900">42</span>
                        </div>
                        <div class="flex items-center justify-between py-3">
                            <span class="text-gray-600">Tahun Akademik</span>
                            <span class="font-semibold text-gray-900">2023/2024</span>
                        </div>
                    </div>
                </div>

                <!-- Card Status -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Status Sistem</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                                <span class="text-gray-600">Database</span>
                            </div>
                            <span class="text-sm text-green-600 font-medium">Online</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                                <span class="text-gray-600">Aplikasi</span>
                            </div>
                            <span class="text-sm text-green-600 font-medium">Normal</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                                <span class="text-gray-600">Pembaruan Terakhir</span>
                            </div>
                            <span class="text-sm text-gray-600">2 jam lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</x-app-layout>