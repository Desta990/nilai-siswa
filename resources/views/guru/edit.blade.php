<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Guru') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('guru.update', $guru->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- NIP -->
                    <div class="mb-4">
                        <label for="nip" class="block text-sm font-medium text-gray-700">NIP</label>
                        <input type="text" name="nip" id="nip" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" value="{{ old('nip', $guru->nip) }}" required>
                        @error('nip') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <!-- Nama Guru -->
                    <div class="mb-4">
                        <label for="nama_guru" class="block text-sm font-medium text-gray-700">Nama Guru</label>
                        <input type="text" name="nama_guru" id="nama_guru" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" value="{{ old('nama_guru', $guru->nama_guru) }}" required>
                        @error('nama_guru') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <!-- Mapel -->
                    <div class="mb-4">
                        <label for="mapel_id" class="block text-sm font-medium text-gray-700">Mapel</label>
                        <select name="mapel_id" id="mapel_id" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200">
                            <option value="">Pilih Mapel</option>
                            @foreach($mapels as $mapel)
                                <option value="{{ $mapel->id }}" {{ old('mapel_id', $guru->mapel_id) == $mapel->id ? 'selected' : '' }}>{{ $mapel->nama_mapel }}</option>
                            @endforeach
                        </select>
                        @error('mapel_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
