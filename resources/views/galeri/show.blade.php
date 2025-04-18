@extends('layouts.home')

@section('content')
<div class="container mx-auto py-12 px-4 lg:px-0">
    <!-- Judul Artikel -->
    <div class="text-center mb-10">
        <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-4 animate-fadeInDown">{{ $post->judul }}</h1>
        <p class="text-sm text-gray-600">{{ $post->created_at->format('d M Y') }}</p>
    </div>

    <!-- Gambar dan Konten Artikel -->
    <div class="flex flex-col lg:flex-row items-center lg:items-start lg:space-x-8 mt-8 lg:mt-12">
        <!-- Gambar -->
        <div class="lg:w-1/2 flex justify-center lg:justify-start">
            <img class="w-full lg:w-3/4 h-60 lg:h-80 object-cover rounded-lg shadow-lg transform hover:scale-105 transition duration-300" 
                 src="{{ asset('images/'.$post->url_gambar) }}" alt="Thumbnail Blog">
        </div>

        <!-- Penjelasan -->
        <div class="lg:w-1/2 mt-6 lg:mt-0 text-gray-800 leading-relaxed">
            <div class="prose lg:prose-lg max-w-none">
                {!! nl2br(e($post->konten)) !!}
            </div>
        </div>
    </div>

    <!-- Tombol Kembali -->
<div class="mt-12 text-center">
    <a href="{{ url('/blog') }}" 
       class="inline-block px-6 py-3 bg-black text-white font-semibold rounded-full shadow-md hover:shadow-lg transform hover:scale-105 transition duration-300">
       Kembali ke Blog
    </a>
</div>

</div>

<!-- Animasi -->
<style>
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeInDown {
        animation: fadeInDown 0.8s ease-out;
    }

    /* Tambahan untuk elemen kecil */
    img {
        transition: transform 0.3s ease;
    }

    img:hover {
        transform: scale(1.03);
    }
</style>
@endsection
