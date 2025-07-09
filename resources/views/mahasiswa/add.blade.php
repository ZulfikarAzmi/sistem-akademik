<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Tambah Mahasiswa</h2>
    </x-slot>

    <div class="p-4 max-w-xl mx-auto">
        <form action="{{ url('/dashboard/mahasiswa/add') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="nim" placeholder="NIM" class="w-full border p-2" required>
            <input type="text" name="nama" placeholder="Nama" class="w-full border p-2" required>
            <input type="email" name="email" placeholder="Email" class="w-full border p-2" required>
            <input type="text" name="no_hp" placeholder="No HP" class="w-full border p-2">
            <select name="jenis_kelamin" class="w-full border p-2" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            <input type="date" name="tanggal_lahir" class="w-full border p-2" required>
            <textarea name="alamat" placeholder="Alamat" class="w-full border p-2"></textarea>

            <button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
