{{-- resources/views/dashboard/mata-kuliah/add.blade.php --}}
<x-app-layout>
    <div class="p-6 max-w-2xl mx-auto">
        <h1 class="text-2xl font-semibold mb-4">Tambah Mata Kuliah</h1>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mata-kuliah.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium mb-1">Kode</label>
                <input type="text" name="kode" value="{{ old('kode') }}"
                       placeholder="Contoh: MKU101"
                       class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Nama Mata Kuliah</label>
                <input type="text" name="nama" value="{{ old('nama') }}"
                       placeholder="Nama mata kuliah"
                       class="w-full border rounded px-3 py-2" required>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Program Studi</label>
                <select name="prodi_id" class="w-full border rounded px-3 py-2" required>
                    <option value="">-- Pilih Program Studi --</option>
                    @foreach($prodis as $prodi)
                        <option value="{{ $prodi->id }}" @selected(old('prodi_id') == $prodi->id)>{{ $prodi->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Dosen (opsional)</label>
                <select name="dosen_id" class="w-full border rounded px-3 py-2">
                    <option value="">-- Pilih Dosen --</option>
                    @foreach($dosens as $dosen)
                        <option value="{{ $dosen->id }}" @selected(old('dosen_id') == $dosen->id)>{{ $dosen->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">SKS</label>
                    <input type="number" name="sks" value="{{ old('sks') }}" min="1"
                           class="w-full border rounded px-3 py-2" required>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Semester</label>
                    <input type="number" name="semester" value="{{ old('semester') }}" min="1" max="12"
                           class="w-full border rounded px-3 py-2" required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Tipe</label>
                <select name="tipe" class="w-full border rounded px-3 py-2" required>
                    <option value="">-- Pilih tipe --</option>
                    <option value="wajib" @selected(old('tipe') == 'wajib')>Wajib</option>
                    <option value="pilihan" @selected(old('tipe') == 'pilihan')>Pilihan</option>
                </select>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
                <a href="{{ route('mata-kuliah.index') }}" class="inline-block px-4 py-2 border rounded text-gray-700">Kembali</a>
            </div>
        </form>
    </div>
</x-app-layout>
