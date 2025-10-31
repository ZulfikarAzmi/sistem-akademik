<x-app-layout> <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow"> <h1 class="text-xl font-bold mb-4">Edit Mata Kuliah</h1>
    @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mata-kuliah.update', $mataKuliah->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="kode" class="block font-medium">Kode</label>
            <input type="text" name="kode" id="kode" 
                   value="{{ old('kode', $mataKuliah->kode) }}"
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200" required>
        </div>

        <div>
            <label for="nama" class="block font-medium">Nama Mata Kuliah</label>
            <input type="text" name="nama" id="nama" 
                   value="{{ old('nama', $mataKuliah->nama) }}"
                   class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200" required>
        </div>

        <div>
            <label for="prodi_id" class="block font-medium">Program Studi</label>
            <select name="prodi_id" id="prodi_id"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200" required>
                <option value="">-- Pilih Prodi --</option>
                @foreach($prodis as $prodi)
                    <option value="{{ $prodi->id }}" 
                        {{ $prodi->id == old('prodi_id', $mataKuliah->prodi_id) ? 'selected' : '' }}>
                        {{ $prodi->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="dosen_id" class="block font-medium">Dosen Pengampu</label>
            <select name="dosen_id" id="dosen_id"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200" required>
                <option value="">-- Pilih Dosen --</option>
                @foreach($dosens as $dosen)
                    <option value="{{ $dosen->id }}" 
                        {{ $dosen->id == old('dosen_id', $mataKuliah->dosen_id) ? 'selected' : '' }}>
                        {{ $dosen->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="sks" class="block font-medium">Jumlah SKS</label>
                <input type="number" name="sks" id="sks" min="1" max="6"
                       value="{{ old('sks', $mataKuliah->sks) }}"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200" required>
            </div>
            <div>
                <label for="semester" class="block font-medium">Semester</label>
                <input type="number" name="semester" id="semester" min="1" max="8"
                       value="{{ old('semester', $mataKuliah->semester) }}"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200" required>
            </div>
        </div>

        <div>
            <label for="tipe" class="block font-medium">Tipe Mata Kuliah</label>
            <select name="tipe" id="tipe" 
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200" required>
                <option value="">-- Pilih Tipe --</option>
                <option value="wajib" {{ old('tipe', $mataKuliah->tipe) == 'wajib' ? 'selected' : '' }}>Wajib</option>
                <option value="pilihan" {{ old('tipe', $mataKuliah->tipe) == 'pilihan' ? 'selected' : '' }}>Pilihan</option>
            </select>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('mata-kuliah.index') }}" 
               class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Batal</a>
            <button type="submit" 
                    class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Update</button>
        </div>
    </form>
</div>

</x-app-layout>