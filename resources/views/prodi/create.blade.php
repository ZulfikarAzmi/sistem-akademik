<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Prodi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow-md rounded">
            <form action="{{ route('prodi.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Prodi</label>
                    <input type="text" name="nama" id="nama" required
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none">
                </div>

                <button type="submit"
                    class="bg-white text-indigo-700 border border-indigo-600 px-4 py-2 rounded hover:bg-indigo-50 transition">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
