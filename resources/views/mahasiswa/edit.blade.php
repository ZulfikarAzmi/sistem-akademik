<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Edit Mahasiswa</h2>
    </x-slot>

    <div class="p-6">
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label>Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label>NIM</label>
                <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', $mahasiswa->email) }}" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label>Prodi</label>
                <select name="prodi_id" class="w-full border p-2 rounded" required>
                    @foreach($prodis as $prodi)
                        <option value="{{ $prodi->id }}" {{ $mahasiswa->prodi_id == $prodi->id ? 'selected' : '' }}>
                            {{ $prodi->prodi }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
