<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Daftar Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg sm:rounded-lg p-6">
                <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
                    <a href="{{ route('siswa.create') }}" class="px-5 py-2 bg-blue-600 text-white rounded-lg font-semibold shadow-md hover:bg-blue-700 transition-all">
                        + Tambah Siswa
                    </a>

                    <!-- Form Pencarian -->
                    <form method="GET" action="{{ route('siswa.index') }}" class="flex items-center space-x-3 mt-4 sm:mt-0">
                        <input type="text" name="search" placeholder="Cari Nama atau NISN..." value="{{ request('search') }}"
                            class="w-full sm:w-64 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm">
                        <button type="submit" class="px-5 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition-all shadow-md">
                            Cari
                        </button>
                    </form>
                </div>

                @if($siswa->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse rounded-lg overflow-hidden shadow-lg">
                            <thead>
                                <tr class="bg-gray-100 text-gray-700 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Foto</th>
                                    <th class="py-3 px-6 text-left">NISN</th>
                                    <th class="py-3 px-6 text-left">Nama</th>
                                    <th class="py-3 px-6 text-left">Kelas</th>
                                    <th class="py-3 px-6 text-left">Jurusan</th>
                                    <th class="py-3 px-6 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($siswa as $s)
                                    <tr class="border-b hover:bg-gray-100 transition">
                                        <td class="py-3 px-6">
                                            <div class="flex items-center">
                                                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-blue-400 shadow-md">
                                                    <img src="{{ $s->foto ? asset($s->foto) : asset('images/default-avatar.png') }}" 
                                                         alt="Foto {{ $s->nama }}" 
                                                         class="w-full h-full object-cover">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6">{{ $s->nisn }}</td>
                                        <td class="py-3 px-6 font-medium text-gray-900">{{ $s->nama }}</td>
                                        <td class="py-3 px-6">{{ $s->kelas->nama_kelas ?? '-' }}</td>
                                        <td class="py-3 px-6">{{ $s->jurusan->nama_jurusan ?? '-' }}</td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center space-x-3">
                                                <!-- Tombol Edit -->
                                                <a href="{{ route('siswa.edit', $s->id) }}" 
                                                   class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition-all flex items-center space-x-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4h2m0 0v16m-2-16h2M4 11h16m-16 2h16M4 11h16m-16 2h16"></path>
                                                    </svg>
                                                    <span>Edit</span>
                                                </a>
                                            
                                                <!-- Tombol Hapus -->
                                                <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="px-4 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-red-600 transition-all flex items-center space-x-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                        <span>Hapus</span>
                                                    </button>
                                                </form>
                                            
                                                <!-- Tombol Lihat Nilai -->
                                                <a href="{{ route('nilai.index', ['siswa_id' => $s->id]) }}" 
                                                   class="px-4 py-2 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 transition-all flex items-center space-x-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l4-4m0 0l4-4m-4 4V4m0 12v4"></path>
                                                    </svg>
                                                    <span>Lihat Nilai</span>
                                                </a>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                  
                @else
                    <div class="text-center py-8">
                        <p class="text-gray-500">Belum ada data siswa.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
