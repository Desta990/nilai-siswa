<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Menampilkan Pesan Error -->
                        @if ($errors->any())
                            <div class="mb-4 p-4 bg-red-200 text-red-700 rounded-md">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <div class="mb-4">
                            <label for="nisn" class="block text-gray-700 font-medium">NISN</label>
                            <input type="text" id="nisn" name="nisn" value="{{ old('nisn', $siswa->nisn) }}" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="nama" class="block text-gray-700 font-medium">Nama</label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="block text-gray-700 font-medium">Kelas</label>
                            <select id="kelas_id" name="kelas_id" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}" {{ old('kelas_id', $siswa->kelas_id) == $k->id ? 'selected' : '' }}>
                                        {{ $k->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="jurusan_id" class="block text-gray-700 font-medium">Jurusan</label>
                            <select id="jurusan_id" name="jurusan_id" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                @foreach ($jurusan as $j)
                                    <option value="{{ $j->id }}" {{ old('jurusan_id', $siswa->jurusan_id) == $j->id ? 'selected' : '' }}>
                                        {{ $j->nama_jurusan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Menampilkan Foto Saat Ini -->
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium">Foto Saat Ini</label>
                            <div class="flex items-center gap-4">
                                @if ($siswa->foto)
                                    <img id="foto-lama" src="{{ asset('storage/' . $siswa->foto) }}" class="w-24 h-24 object-cover rounded-full">
                                @else
                                    <p class="text-gray-500">Belum ada foto.</p>
                                @endif
                            </div>
                        </div>

                        <!-- Input Foto Baru -->
                        <div class="mb-4">
                            <label for="foto" class="block text-gray-700 font-medium">Ganti Foto</label>
                            <input type="file" id="foto" name="foto" accept="image/*" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" onchange="previewImage(event)">
                            
                            <div class="mt-2">
                                <img id="foto-preview" class="w-24 h-24 object-cover rounded-full hidden">
                            </div>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('foto-preview');
            const fotoLama = document.getElementById('foto-lama');

            // Tampilkan preview foto baru
            if (event.target.files.length > 0) {
                preview.src = URL.createObjectURL(event.target.files[0]);
                preview.classList.remove('hidden');

                // Sembunyikan foto lama jika ada
                if (fotoLama) {
                    fotoLama.style.display = 'none';
                }
            } else {
                preview.classList.add('hidden');
                if (fotoLama) {
                    fotoLama.style.display = 'block';
                }
            }
        }
    </script>
</x-app-layout>
