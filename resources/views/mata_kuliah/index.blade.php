<x-app-layout> 
    <x-slot name="header"> <div class="flex justify-between items-center"> <div> <h2 class="text-2xl font-bold text-gray-900">Data Mata Kuliah</h2> <p class="text-sm text-gray-600 mt-1">Kelola data mata kuliah akademik</p> </div> </div> </x-slot>
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-green-700 font-medium">{{ session('success') }}</span>
            </div>
        @endif

        <div class="flex justify-between items-center mb-6">
            <div class="relative flex-1 max-w-md">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" placeholder="Cari mata kuliah..." class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
            </div>
            <a href="{{ route('mata-kuliah.create') }}" class="ml-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white px-4 py-2 rounded-lg hover:from-blue-600 hover:to-purple-700 transition duration-200 flex items-center shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Tambah Mata Kuliah
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mata Kuliah</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Program Studi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dosen Pengampu</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SKS</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Semester</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipe</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($mataKuliahs as $mk)
                            <tr class="hover:bg-gray-50 transition duration-150">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded-full font-medium">{{ $mk->kode }}</span>
                                </td>

                                <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $mk->nama }}</td>

                                <td class="px-6 py-4 text-sm text-gray-700">
                                    {{ $mk->prodi->nama ?? '-' }}
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-700">
                                    {{ $mk->dosen->nama ?? '-' }}
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-700 text-center">{{ $mk->sks }}</td>

                                <td class="px-6 py-4 text-sm text-gray-700 text-center">{{ $mk->semester }}</td>

                                <td class="px-6 py-4 text-sm">
                                    <span class="px-2 py-1 rounded-full text-xs font-medium {{ $mk->tipe === 'wajib' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                        {{ ucfirst($mk->tipe) }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('mata-kuliah.edit', $mk->id) }}" class="px-3 py-1 bg-indigo-600 text-white rounded hover:bg-indigo-700">Edit</a>
                                        <form action="{{ route('mata-kuliah.destroy', $mk->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus data mata kuliah ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-8 text-center text-gray-500">
                                    Belum ada data mata kuliah.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($mataKuliahs->hasPages())
                <div class="bg-white px-6 py-4 border-t border-gray-200">
                    {{ $mataKuliahs->links() }}
                </div>
            @endif
        </div>

        <div class="mt-4 text-sm text-gray-500">
            Menampilkan {{ $mataKuliahs->count() }} mata kuliah
        </div>
    </div>
</div>

</x-app-layout>