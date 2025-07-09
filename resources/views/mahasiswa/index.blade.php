    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800">Data Mahasiswa</h2>
        </x-slot>

        <div class="p-6">
            @if(session('success'))
                <div class="mb-4 text-green-600">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ url('dashboard/mahasiswa/add') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
                + Tambah Mahasiswa
            </a>

            <table class="table-auto w-full border">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border px-4 py-2">NIM</th>
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2">No HP</th>
                        <th class="border px-4 py-2">Jenis Kelamin</th>
                        <th class="border px-4 py-2">Tanggal Lahir</th>
                        <th class="border px-4 py-2">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <td class="border px-4 py-2">{{ $mhs->nim }}</td>
                        <td class="border px-4 py-2">{{ $mhs->nama }}</td>
                        <td class="border px-4 py-2">{{ $mhs->email }}</td>
                        <td class="border px-4 py-2">{{ $mhs->no_hp ?? '-' }}</td>
                        <td class="border px-4 py-2">
                            {{ $mhs->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                        </td>
                        <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($mhs->tanggal_lahir)->format('d M Y') }}</td>
                        <td class="border px-4 py-2">{{ $mhs->alamat ?? '-' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-app-layout>
