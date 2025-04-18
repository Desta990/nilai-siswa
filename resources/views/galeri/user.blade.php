@extends('layouts.home')

@section('content')
<div class="container mx-auto py-12 px-0 max-w-full">
    <!-- Header -->
    <div class="text-center mb-8 px-4">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-6 animate-fadeInDown">Galeri</h1>
        <p class="text-lg text-gray-600">Lihat koleksi gambar terbaru kami.</p>
    </div>

    <!-- Daftar Galeri -->
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
        @foreach ($galeri as $item)
            <div class="bg-white p-4 shadow-lg hover:shadow-xl rounded-lg transform transition duration-300 ease-in-out hover:-translate-y-2">
                <img class="w-full h-40 object-cover mb-4 rounded-lg" src="{{ $item->gambar ? asset('storage/'.$item->gambar) : asset('images/default-image.jpg') }}" alt="{{ $item->judul }}">

                <h3 class="text-lg font-bold text-gray-800 mb-2 hover:text-blue-600 transition">{{ $item->judul }}</h3>

                <p class="text-gray-600 mt-2">{{ Str::limit($item->deskripsi, 90) }}</p>

                <div class="flex items-center space-x-2 text-sm text-gray-500 mt-2">
                    <span>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</span>
                </div>
            </div>
        @endforeach
    </section>
</div>

<!-- Animasi -->
<style>
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInDown {
        animation: fadeInDown 1s ease-out;
    }
</style>
@endsection
