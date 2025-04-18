@extends('layouts.home')

@section('content')
<section class="py-16">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-10 text-gray-800">Gallery</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($galeri as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold">{{ $item->judul }}</h3>
                        <p class="text-gray-600 mt-2">{{ Str::limit($item->deskripsi, 80, '...') }}</p>
                        <div class="mt-4 flex justify-between items-center">
                            <a href="{{ route('user.galeri.show', $item->id) }}" class="text-orange-500">Lihat Detail</a>
                            <span class="bg-orange-500 text-white px-3 py-1 rounded-full">Galeri</span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500">Tidak ada data galeri.</p>
            @endforelse
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection
