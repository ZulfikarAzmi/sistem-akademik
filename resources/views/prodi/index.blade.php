<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Prodi
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <a href="{{ route('prodi.create') }}"
                   class="bg-white text-indigo-700 border border-indigo-600 px-4 py-2 rounded hover:bg-indigo-50 transition">+ Tambah Prodi</a>

                <table class="table-auto w-full mt-4">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">#</th>
                            <th class="border px-4 py-2">Nama Prodi</th>
                            <th class="border px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prodis as $prodi)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $prodi->nama }}</td>
                                <td class="border px-4 py-2">
                                    <div class="flex space-x-4">
                                        <a href="{{ route('prodi.edit', $prodi->id) }}" 
                                           class="text-blue-600 hover:text-blue-900">Edit</a>
                                        
                                        <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="text-red-600 hover:text-red-900"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus prodi ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>