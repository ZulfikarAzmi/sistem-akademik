<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-gray-800">Dashboard Akademik</h2>
    </x-slot>

    <div class="p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card Mahasiswa -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="p-6 flex flex-col items-center text-center">
                    <div class="mb-4 p-4 bg-blue-100 rounded-full">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20h6m-6 0a2 2 0 01-2-2H5a4 4 0 014-4h1m0 0a2 2 0 012-2h2a2 2 0 012 2m0 0v4m0 0a2 2 0 002 2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-500 mb-1">Mahasiswa</h3>
                    <p class="text-3xl font-bold text-gray-800">{{ $jumlahMahasiswa }}</p>
                </div>
            </div>

            <!-- Card Dosen -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="p-6 flex flex-col items-center text-center">
                    <div class="mb-4 p-4 bg-green-100 rounded-full">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5a12.083 12.083 0 01-6.16-10.922L12 14z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-500 mb-1">Dosen</h3>
                    <p class="text-3xl font-bold text-gray-800">{{ $jumlahDosen }}</p>
                </div>
            </div>

            <!-- Card Prodi -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="p-6 flex flex-col items-center text-center">
                    <div class="mb-4 p-4 bg-purple-100 rounded-full">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 3h4.5a.75.75 0 01.75.75v.75H9v-.75a.75.75 0 01.75-.75zM3 7.5A1.5 1.5 0 014.5 6h15a1.5 1.5 0 011.5 1.5v9A1.5 1.5 0 0119.5 18h-15A1.5 1.5 0 013 16.5v-9z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-500 mb-1">Program Studi</h3>
                    <p class="text-3xl font-bold text-gray-800">{{ $jumlahProdi }}</p>
                </div>
            </div>

            <!-- Card Mata Kuliah -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="p-6 flex flex-col items-center text-center">
                    <div class="mb-4 p-4 bg-amber-100 rounded-full">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-500 mb-1">Mata Kuliah</h3>
                    <p class="text-3xl font-bold text-gray-800">{{ $jumlahMataKuliah }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>