@extends('layouts.home')

@section('content')
<div class="container mx-auto px-6 py-12">
    <div class="flex flex-col sm:flex-row justify-between items-center mb-8">
        <h2 class="text-4xl font-extrabold text-gray-800 tracking-tight">Daftar Siswa</h2>
        <form method="GET" action="{{ route('user.siswa.index') }}" class="flex items-center space-x-3 w-full sm:w-auto mt-4 sm:mt-0">
            <input type="text" name="search" placeholder="Cari Nama atau NISN..." value="{{ request('search') }}"
                class="w-full sm:w-64 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm">
            <button type="submit" class="px-5 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition-all shadow-md">
                Cari
            </button>
        </form>
    </div>

    <div id="siswaContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($siswa as $s)
        <div class="siswa-card bg-white shadow-lg rounded-xl p-6 transition-all transform hover:scale-105 hover:shadow-xl">
            <div class="flex flex-col items-center">
                <div class="relative w-24 h-24 rounded-full overflow-hidden border-4 border-blue-400 shadow-lg">
                    <img src="{{ $s->foto ? asset($s->foto) : asset('images/avatar-placeholder.png') }}" 
                         alt="Foto {{ $s->nama }}" 
                         class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-900 mt-4">{{ $s->nama }}</h3>
                <p class="text-gray-600 font-medium mt-1">NISN: <span class="font-semibold">{{ $s->nisn }}</span></p>
                <p class="text-gray-500 text-sm">Kelas: <span class="font-semibold text-gray-700">{{ $s->kelas->nama_kelas ?? '-' }}</span></p>
                <p class="text-gray-500 text-sm">Jurusan: <span class="font-semibold text-gray-700">{{ $s->jurusan->nama_jurusan ?? '-' }}</span></p>
            </div>
            <div class="mt-5 flex justify-center">
                <a href="{{ route('user.siswa.show', $s->nisn) }}" 
                   class="bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold shadow-md hover:bg-blue-700 transition-all">
                   Lihat Nilai
                </a>
            </div>
            
        </div>
        @endforeach
    </div>

    <div class="mt-10 flex justify-center">
        {{ $siswa->links('pagination::tailwind') }}
    </div>
</div>
@include('layouts.footer')
@endsection
