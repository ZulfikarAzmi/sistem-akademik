<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Dashboard</h2>
    </x-slot>

    <div class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        {{-- Mahasiswa --}}
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-md transition">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm text-gray-500">Mahasiswa</h3>
                    <p class="text-3xl font-bold text-blue-600">{{ $jumlahMahasiswa }}</p>
                </div>
                <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20h6m-6 0a2 2 0 01-2-2H5a4 4 0 014-4h1m0 0a2 2 0 012-2h2a2 2 0 012 2m0 0v4m0 0a2 2 0 002 2" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Dosen --}}
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-md transition">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm text-gray-500">Dosen</h3>
                    <p class="text-3xl font-bold text-green-600">{{ $jumlahDosen }}</p>
                </div>
                <div class="bg-green-100 text-green-600 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 14l6.16-3.422A12.083 12.083 0 0112 21.5a12.083 12.083 0 01-6.16-10.922L12 14z" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Prodi --}}
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-md transition">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm text-gray-500">Prodi</h3>
                    <p class="text-3xl font-bold text-purple-600">{{ $jumlahProdi }}</p>
                </div>
                <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9.75 3h4.5a.75.75 0 01.75.75v.75H9v-.75a.75.75 0 01.75-.75zM3 7.5A1.5 1.5 0 014.5 6h15a1.5 1.5 0 011.5 1.5v9A1.5 1.5 0 0119.5 18h-15A1.5 1.5 0 013 16.5v-9z" />
                    </svg>
                </div>
            </div>
        </div>

        {{-- Mata Kuliah --}}
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-md transition">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm text-gray-500">Mata Kuliah</h3>
                    <p class="text-3xl font-bold text-red-600">{{ $jumlahMataKuliah }}</p>
                </div>
                <div class="bg-red-100 text-red-600 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6v6l4 2" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
