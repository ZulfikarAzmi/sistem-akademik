{{-- resources/views/dashboard/prodi/index.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Prodi
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <a href="{{ route('prodi.create') }}"
                   class="bg-white text-indigo-700 border border-indigo-600 px-4 py-2 rounded hover:bg-indigo-50 transition">+ Tambah Prodi</a>

                <table class="table-auto w-full mt-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">#</th>
                            <th class="border px-4 py-2">Nama Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prodis as $prodi)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $prodi->nama }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
