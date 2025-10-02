<x-app-layout>
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
        <h1 class="text-xl font-bold mb-4">Edit Dosen</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="nip" class="block font-medium">NIP</label>
                <input type="text" name="nip" id="nip" value="{{ old('nip', $dosen->nip) }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200" required>
            </div>

            <div>
                <label for="nama" class="block font-medium">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $dosen->nama) }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200" required>
            </div>

            <div>
                <label for="email" class="block font-medium">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $dosen->email) }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200" required>
            </div>

            <div>
                <label for="no_hp" class="block font-medium">No HP</label>
                <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', $dosen->no_hp) }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200">
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('dosen.index') }}" 
                   class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Batal</a>
                <button type="submit" 
                        class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
