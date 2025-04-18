@extends('layouts.home')

@section('content')
<div class="container mx-auto p-8">
    <!-- Judul -->
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-3xl font-bold text-gray-900">Daftar Nilai</h3>
        <a href="{{ route('user.siswa.index') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition-all">
            Kembali
        </a>
    </div>

    <!-- Daftar Nilai -->
    
    <div class="space-y-6">
        @forelse ($nilai as $item)
        <div class="bg-white shadow-lg rounded-xl p-6 border-l-8 border-blue-500">
            
            <div class="flex justify-between items-center">
                <div>
                    <h4 class="text-xl font-semibold text-gray-900">{{ $item->mapel->nama_mapel }}</h4>
                    <p class="text-gray-600">Guru: <span class="font-medium">{{ $item->guru->nama_guru }}</span></p>
                </div>
                <span class="text-2xl font-bold text-blue-600 bg-gray-100 px-4 py-2 rounded-lg shadow-sm">
                    {{ $item->grade->nama_grade }}
                </span>
            </div>

            <!-- Nilai -->
            <div class="mt-4 grid grid-cols-3 gap-4 text-center">
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <p class="text-gray-500 text-sm">UTS</p>
                    <p class="text-lg font-bold text-gray-900">{{ $item->uts }}</p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <p class="text-gray-500 text-sm">UAS</p>
                    <p class="text-lg font-bold text-gray-900">{{ $item->uas }}</p>
                </div>
                <div class="bg-gray-100 p-4 rounded-lg shadow">
                    <p class="text-gray-500 text-sm">Tugas</p>
                    <p class="text-lg font-bold text-gray-900">{{ $item->tugas }}</p>
                </div>
            </div>

            <!-- Nilai Akhir -->
            <div class="mt-4 flex justify-between items-center border-t pt-4">
                <p class="text-gray-700 text-lg font-semibold">Nilai Akhir: 
                    <span class="text-gray-900">{{ $item->nilai_akhir }}</span>
                </p>
            </div>
        </div>
        @empty
        <p class="text-center text-gray-500 text-lg">Tidak ada data nilai.</p>
        @endforelse
    </div>
</div>
@endsection
