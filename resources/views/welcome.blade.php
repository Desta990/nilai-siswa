@extends('layouts.home')

@section('content')
<section class="relative bg-center bg-no-repeat flex items-center" style="background-image: url('images/3.jpg'); background-size: cover; height: 80vh;">
    <!-- Overlay dengan Gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent backdrop-blur-sm"></div>

    <div class="container mx-auto flex flex-col md:flex-row items-center h-full px-6 relative z-10">
        <div class="text-white md:w-1/2">
            <h2 class="text-yellow-400 text-lg tracking-widest uppercase">Sistem Penilaian Siswa</h2>
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight drop-shadow-lg">
                Pantau Perkembangan Akademik dengan Mudah
            </h1>
            <p class="mt-4 text-lg opacity-90 max-w-md">
                Kelola dan lihat nilai siswa untuk setiap mata pelajaran, termasuk UTS, UAS, dan tugas secara real-time.
            </p>
            <a href="{{ route('user.siswa.index') }}" class="mt-6 inline-block bg-yellow-500 text-blue-900 px-6 py-3 rounded-lg font-semibold hover:bg-yellow-600 transition-all shadow-lg">
                Lihat Nilai
            </a>
        </div>
        
        <div class="md:w-1/2 flex justify-center items-end h-full">
            <img src="images/4.png" alt="Siswa memegang buku dan tersenyum" class="max-h-[70%] md:max-h-[80%] w-auto object-contain drop-shadow-2xl">
        </div>
        
    </div>
</section>

<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="item p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-xl transition-all" onclick="animateClick(this)">
                <div class="text-yellow-500 text-4xl mb-4">
                    <i class="fas fa-chalkboard-teacher" aria-label="Penilaian Guru"></i>
                </div>
                <h3 class="text-xl font-semibold">Penilaian Guru</h3>
                <p class="mt-2 text-gray-600">Guru dapat menginput dan mengelola nilai siswa dengan mudah.</p>
            </div>
            <div class="item p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-xl transition-all" onclick="animateClick(this)">
                <div class="text-yellow-500 text-4xl mb-4">
                    <i class="fas fa-user-graduate" aria-label="Akses Siswa"></i>
                </div>
                <h3 class="text-xl font-semibold">Akses Siswa</h3>
                <p class="mt-2 text-gray-600">Siswa dapat melihat nilai mereka secara langsung melalui sistem.</p>
            </div>
            <div class="item p-6 bg-gray-100 rounded-lg shadow-md hover:shadow-xl transition-all" onclick="animateClick(this)">
                <div class="text-yellow-500 text-4xl mb-4">
                    <i class="fas fa-chart-line" aria-label="Laporan Akademik"></i>
                </div>
                <h3 class="text-xl font-semibold">Laporan Akademik</h3>
                <p class="mt-2 text-gray-600">Orang tua dan wali dapat memantau perkembangan akademik siswa.</p>
            </div>
        </div>
    </div>
</section>

<style>
    .item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .item.clicked {
        transform: scale(1.1);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>

<script>
    function animateClick(element) {
        element.classList.add('clicked');
        setTimeout(() => {
            element.classList.remove('clicked');
        }, 300);
    }
</script>

@include('layouts.footer')

@endsection
