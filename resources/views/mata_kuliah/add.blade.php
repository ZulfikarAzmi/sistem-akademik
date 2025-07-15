<x-app-layout>
    <div class="p-6 max-w-xl mx-auto">
        <form action="{{ route('mata-kuliah.store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="kode" placeholder="Kode Mata Kuliah" class="w-full border p-2" required>
            <input type="text" name="nama" placeholder="Nama Mata Kuliah" class="w-full border p-2" required>
            <select name="dosen_id" class="w-full border p-2" required>
                <option value="">Pilih Dosen</option>
                @foreach($dosens as $dosen)
                    <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
