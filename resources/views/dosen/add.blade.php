<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Tambah Dosen</h2>
    </x-slot>

    <div class="p-6 max-w-xl mx-auto">
        <form action="{{ route('dosen.store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="nip" placeholder="NIP" class="w-full border p-2" required>
            <input type="text" name="nama" placeholder="Nama" class="w-full border p-2" required>
            <input type="email" name="email" placeholder="Email" class="w-full border p-2" required>
            <input type="text" name="no_hp" placeholder="No HP" class="w-full border p-2">

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
