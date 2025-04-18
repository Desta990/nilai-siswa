<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-4">
                            <label for="nisn" class="block text-gray-700 font-medium">NISN</label>
                            <input type="text" id="nisn" name="nisn" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="nama" class="block text-gray-700 font-medium">Nama</label>
                            <input type="text" id="nama" name="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="block text-gray-700 font-medium">Kelas</label>
                            <select id="kelas_id" name="kelas_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="jurusan_id" class="block text-gray-700 font-medium">Jurusan</label>
                            <select id="jurusan_id" name="jurusan_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                                <option value="">-- Pilih Jurusan --</option>
                                @foreach ($jurusan as $j)
                                    <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                                @endforeach
                            </select>
                        </div>

                     <!-- Tambahan Input Foto -->
                     <div class="mb-4">
                        <label for="foto" class="block text-gray-700 font-medium">Foto</label>
                        <input type="file" id="foto" name="foto" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('foto') border-red-500 @enderror" onchange="previewImage(event)">
                        @error('foto')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <div class="mt-2">
                            <img id="foto-preview" class="w-24 h-24 object-cover rounded hidden">
                        </div>
                    </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Simpan</button>
                        
                        <!-- Tombol Batal -->
                        <a href="{{ route('siswa.index') }}" class="ml-4 inline-block bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('foto-preview');
            preview.src = URL.createObjectURL(event.target.files[0]);
            preview.classList.remove('hidden');
        }
    </script>
</x-app-layout>
