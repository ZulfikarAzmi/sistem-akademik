<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Tambah Mahasiswa</h2>
                <p class="text-sm text-gray-600 mt-1">Tambah data mahasiswa baru ke sistem</p>
            </div>
            <a href="{{ url('dashboard/mahasiswa') }}"
               class="text-gray-600 hover:text-gray-900 transition duration-150 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <form action="{{ url('/dashboard/mahasiswa/add') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Nama & Email (2 kolom) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <input type="text"
                                       id="nama"
                                       name="nama"
                                       placeholder="Masukkan nama lengkap"
                                       class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                                       required>
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <input type="email"
                                       id="email"
                                       name="email"
                                       placeholder="email@example.com"
                                       class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                            </div>
                        </div>
                    </div>

                    <!-- Jenis Kelamin & Tanggal Lahir (2 kolom) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700 mb-2">
                                Jenis Kelamin <span class="text-red-500">*</span>
                            </label>
                            <select id="jenis_kelamin"
                                    name="jenis_kelamin"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                                    required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div>
                            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-2">
                                Tanggal Lahir <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <input type="date"
                                       id="tanggal_lahir"
                                       name="tanggal_lahir"
                                       class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                                       required>
                            </div>
                        </div>
                    </div>

                    <!-- Tahun Masuk & Prodi (2 kolom) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="tahun_masuk" class="block text-sm font-medium text-gray-700 mb-2">
                                Tahun Masuk <span class="text-red-500">*</span>
                            </label>
                            <input type="text"
                                   id="tahun_masuk"
                                   name="tahun_masuk"
                                   placeholder="2025"
                                   maxlength="4"
                                   class="px-4 py-3 w-full border border-gray-300 rounded-lg text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                                   required>
                        </div>

                        <div>
                            <label for="prodi_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Program Studi <span class="text-red-500">*</span>
                            </label>
                            <select id="prodi_id"
                                    name="prodi_id"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                                    required>
                                <option value="">Pilih Program Studi</option>
                                @foreach($prodis as $prodi)
                                    <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Tipe -->
                    <div>
                        <label for="tipe" class="block text-sm font-medium text-gray-700 mb-2">
                            Tipe Mahasiswa <span class="text-red-500">*</span>
                        </label>
                        <select id="tipe"
                                name="tipe"
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150"
                                required>
                            <option value="">Pilih Tipe</option>
                            <option value="reguler">Reguler</option>
                            <option value="transfer">Transfer</option>
                        </select>
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">
                            Alamat
                        </label>
                        <textarea id="alamat"
                                  name="alamat"
                                  placeholder="Masukkan alamat lengkap"
                                  rows="3"
                                  class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 resize-none"></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                        <a href="{{ url('dashboard/mahasiswa') }}"
                           class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition duration-150 font-medium">
                            Batal
                        </a>
                        <button type="submit"
                                class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-lg hover:from-blue-600 hover:to-purple-700 transition duration-150 font-medium shadow-sm flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
