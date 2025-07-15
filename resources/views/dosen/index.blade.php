<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Data Dosen</h2>
    </x-slot>

    <div class="p-6">
        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <a href="{{ route('dosen.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
            + Tambah Dosen
        </a>

        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-4 py-2">NIP</th>
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2">No HP</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dosens as $dosen)
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">{{ $dosen->nip }}</td>
                            <td class="border px-4 py-2">{{ $dosen->nama }}</td>
                            <td class="border px-4 py-2">{{ $dosen->email }}</td>
                            <td class="border px-4 py-2">{{ $dosen->no_hp ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-gray-500 py-4">Belum ada data dosen.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
