<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Galeri</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md sm:rounded-lg p-6">
                <!-- Tombol Tambah Galeri -->
                <div class="mb-4 flex justify-end">
                    <a href="{{ route('galeri.create') }}" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Tambah Galeri
                    </a>
                </div>
                
                <!-- Tabel Galeri -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="px-4 py-2 border">No</th>
                                <th class="px-4 py-2 border">Gambar</th>
                                <th class="px-4 py-2 border">Judul</th>
                                <th class="px-4 py-2 border">Deskripsi</th>
                                <th class="px-4 py-2 border">Tanggal</th>
                                <th class="px-4 py-2 border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galeri as $index => $item)
                                <tr class="border hover:bg-gray-50 transition">
                                    <td class="px-4 py-2 text-center">{{ $index + 1 }}</td>
                                    <td class="px-4 py-2 text-center">
                                        <img src="{{ asset($item->gambar) }}" class="rounded-md shadow-md w-24 h-24 object-cover">
                                    </td>
                                    <td class="px-4 py-2">{{ $item->judul }}</td>
                                    <td class="px-4 py-2">{{ Str::limit($item->deskripsi, 50, '...') }}</td>
                                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
                                    <td class="px-4 py-2 flex space-x-2 justify-center">
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('galeri.edit', $item->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded-md shadow hover:bg-yellow-600 flex items-center space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4h2m0 0v16m-2-16h2M4 11h16m-16 2h16"></path>
                                            </svg>
                                            <span>Edit</span>
                                        </a>
                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md shadow hover:bg-red-600 flex items-center space-x-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                                <span>Hapus</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-4 py-2 text-center">Tidak ada data galeri.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>