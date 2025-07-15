<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Tambah Mahasiswa</h2>
    </x-slot>

    <div class="p-4 max-w-xl mx-auto">
        <form action="{{ url('/dashboard/mahasiswa/add') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="nama" placeholder="Nama" class="w-full border p-2" required>
            <input type="email" name="email" placeholder="Email" class="w-full border p-2">
            <input type="text" name="no_hp" placeholder="No HP" class="w-full border p-2">

            <select name="jenis_kelamin" class="w-full border p-2" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>

            <input type="date" name="tanggal_lahir" class="w-full border p-2" required>
            <textarea name="alamat" placeholder="Alamat" class="w-full border p-2"></textarea>

            <select name="prodi_id" class="w-full border p-2" required>
                <option value="">Pilih Prodi</option>
                @foreach($prodis as $prodi)
                    <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                @endforeach
            </select>

            <select name="tipe" class="w-full border p-2" required>
                <option value="">Pilih Tipe</option>
                <option value="reguler">Reguler</option>
                <option value="transfer">Transfer</option>
            </select>

            <input type="text" name="tahun_masuk" placeholder="Tahun Masuk (contoh: 2025)" class="w-full border p-2" required>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
