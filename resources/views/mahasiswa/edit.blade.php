<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Edit Mahasiswa</h2>
                <p class="text-sm text-gray-600 mt-1">Edit data mahasiswa {{ $mahasiswa->nama }}</p>
            </div>
            <a href="{{ url('dashboard/mahasiswa') }}" 
               class="text-gray-600 hover:text-gray-900 transition duration-150 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Data Mahasiswa
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Grid: Nama & NIM -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama -->
                        <div>
                            <x-input-label for="nama" value="Nama Lengkap *" />
                            <x-text-input id="nama" name="nama" type="text" 
                                class="w-full"
                                :value="old('nama', $mahasiswa->nama)" required />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>

                        <!-- NIM -->
                        <div>
                            <x-input-label for="nim" value="NIM *" />
                            <x-text-input id="nim" name="nim" type="text" 
                                class="w-full"
                                :value="old('nim', $mahasiswa->nim)" required />
                            <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Grid: Email & Prodi -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Email -->
                        <div>
                            <x-input-label for="email" value="Email *" />
                            <x-text-input id="email" name="email" type="email" 
                                class="w-full"
                                :value="old('email', $mahasiswa->email)" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Prodi -->
                        <div>
                            <x-input-label for="prodi_id" value="Program Studi *" />
                            <select id="prodi_id" name="prodi_id"
                                class="w-full border-gray-300 rounded-lg px-4 py-3 text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih Program Studi</option>
                                @foreach($prodis as $prodi)
                                    <option value="{{ $prodi->id }}" {{ old('prodi_id', $mahasiswa->prodi_id) == $prodi->id ? 'selected' : '' }}>
                                        {{ $prodi->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('prodi_id')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Grid: Jenis Kelamin & Tanggal Lahir -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Jenis Kelamin -->
                        <div>
                            <x-input-label for="jenis_kelamin" value="Jenis Kelamin" />
                            <select id="jenis_kelamin" name="jenis_kelamin"
                                class="w-full border-gray-300 rounded-lg px-4 py-3 text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div>
                            <x-input-label for="tanggal_lahir" value="Tanggal Lahir" />
                            <x-text-input id="tanggal_lahir" name="tanggal_lahir" type="date"
                                class="w-full"
                                :value="old('tanggal_lahir', $mahasiswa->tanggal_lahir)" />
                        </div>
                    </div>

                    <!-- Grid: Tahun Masuk & Tipe -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Tahun Masuk -->
                        <div>
                            <x-input-label for="tahun_masuk" value="Tahun Masuk" />
                            <x-text-input id="tahun_masuk" name="tahun_masuk" type="text"
                                maxlength="4" placeholder="2025"
                                class="w-full"
                                :value="old('tahun_masuk', $mahasiswa->tahun_masuk)" />
                        </div>

                        <!-- Tipe Mahasiswa -->
                        <div>
                            <x-input-label for="tipe" value="Tipe Mahasiswa" />
                            <select id="tipe" name="tipe"
                                class="w-full border-gray-300 rounded-lg px-4 py-3 text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih Tipe</option>
                                <option value="reguler" {{ old('tipe', $mahasiswa->tipe) == 'reguler' ? 'selected' : '' }}>Reguler</option>
                                <option value="transfer" {{ old('tipe', $mahasiswa->tipe) == 'transfer' ? 'selected' : '' }}>Transfer</option>
                            </select>
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div>
                        <x-input-label for="alamat" value="Alamat" />
                        <textarea id="alamat" name="alamat" rows="3"
                            class="w-full border-gray-300 rounded-lg px-4 py-3 text-gray-900 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none"
                            placeholder="Masukkan alamat lengkap">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                        <a href="{{ url('dashboard/mahasiswa') }}" 
                           class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition duration-150 font-medium">
                            Batal
                        </a>
                        <button type="submit" 
                                class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-lg hover:from-blue-600 hover:to-purple-700 transition duration-150 font-medium shadow-sm flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Update Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
