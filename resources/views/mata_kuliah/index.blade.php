<x-app-layout>
    <div class="p-6">
        <a href="{{ route('mata-kuliah.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Mata Kuliah</a>

        <table class="table-auto w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">Kode</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Dosen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mataKuliahs as $mk)
                    <tr>
                        <td class="border px-4 py-2">{{ $mk->kode }}</td>
                        <td class="border px-4 py-2">{{ $mk->nama }}</td>
                        <td class="border px-4 py-2">{{ $mk->dosen->nama ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
