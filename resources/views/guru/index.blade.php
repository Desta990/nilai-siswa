<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Guru') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <!-- Tombol Tambah Guru -->
                <a href="{{ route('guru.create') }}" 
                   class="px-5 py-2 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 transition-all flex items-center space-x-2 w-max mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <span>Tambah Guru</span>
                </a>

                @if(session('success'))
                    <div class="bg-green-100 text-green-800 p-4 mb-4 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="min-w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border">No</th>
                            <th class="px-4 py-2 border">NIP</th>
                            <th class="px-4 py-2 border">Nama Guru</th>
                            <th class="px-4 py-2 border">Mapel</th>
                            <th class="px-4 py-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gurus as $guru)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border">{{ $loop->iteration }}</td> <!-- Menambahkan nomor urut -->
                                <td class="px-4 py-2 border">{{ $guru->nip }}</td>
                                <td class="px-4 py-2 border">{{ $guru->nama_guru }}</td>
                                <td class="px-4 py-2 border">{{ $guru->mapel->nama_mapel }}</td>
                                <td class="px-4 py-2 border flex items-center space-x-2">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('guru.edit', $guru->id) }}" 
                                       class="px-3 py-1 bg-indigo-500 text-white rounded-md shadow hover:bg-indigo-600 flex items-center space-x-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4h2m0 0v16m-2-16h2M4 11h16m-16 2h16M4 11h16m-16 2h16"></path>
                                        </svg>
                                        <span>Edit</span>
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="px-3 py-1 bg-red-500 text-white rounded-md shadow hover:bg-red-600 flex items-center space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                            <span>Hapus</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
