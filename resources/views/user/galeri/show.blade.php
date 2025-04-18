@extends('layouts.home')

@section('content')
<div class="py-24 from-gray-900 to-gray-700 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-6xl mx-auto bg-white rounded-3xl shadow-xl flex overflow-hidden transform transition duration-500 hover:shadow-2xl">
        <img src="{{ asset($galeri->gambar) }}" alt="{{ $galeri->judul }}" 
            class="w-1/2 h-96 object-cover hover:scale-105 transition duration-500">
        
        <div class="p-12 w-1/2 text-gray-900 flex flex-col justify-between">
            <div>
                <h2 class="text-5xl font-extrabold text-gray-800 mb-4">{{ $galeri->judul }}</h2>
                <p class="text-gray-500 text-lg mb-6">Diposting pada {{ \Carbon\Carbon::parse($galeri->tanggal)->format('d M Y') }}</p>
                <p class="text-gray-700 text-lg leading-relaxed">{{ $galeri->deskripsi }}</p>
            </div>
            <div class="mt-8">
                <a href="{{ route('user.galeri.index') }}" 
                   class="inline-block text-lg font-semibold text-white bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                    ← Kembali ke Galeri
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
