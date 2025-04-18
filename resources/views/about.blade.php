@extends('layouts.home') 

@section('content')
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Bagian Hero -->
    <section class="relative bg-gray-800 text-white text-center py-20">
        <img src="images/5.jpg" alt="Gambar latar belakang tim yang bekerja bersama" class="absolute inset-0 w-full h-full object-cover opacity-50">
        <div class="relative z-10">
            <h1 class="text-4xl font-bold">Tentang Kami</h1>
        </div>
    </section>

    <!-- Bagian Pengenalan -->
    <section class="container mx-auto py-16 px-6">
        <div class="text-center mb-12">
            <span class="text-orange-500 font-semibold">TENTANG KAMI</span>
            <h2 class="text-3xl font-bold">Pengenalan ke Agensi Digital Terbaik!</h2>
            <p class="text-gray-600 mt-4">Harum quisquam enim amet debitis pariatur quas? Nemo excepturi duis minus nostrum officiis dolorem fugiat fuga, fugit excepturi modi, porta.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="text-orange-500 text-4xl mb-4"><i class="fas fa-tags"></i></div>
                <h3 class="text-xl font-semibold mb-2">Harga Terbaik Dijamin</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="text-orange-500 text-4xl mb-4"><i class="fas fa-chart-line"></i></div>
                <h3 class="text-xl font-semibold mb-2">Analisis Keuangan</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <div class="text-orange-500 text-4xl mb-4"><i class="fas fa-users"></i></div>
                <h3 class="text-xl font-semibold mb-2">Tim Profesional</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>

    <!-- Bagian Tim Kami -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <span class="text-orange-500 font-semibold">TIM KAMI</span>
                <h2 class="text-3xl font-bold">Anggota Tim</h2>
                <p class="text-gray-600 mt-4">Sint nasetur facere, delectus conubia consequuntur, nonummy distinctio! Non officiis, id natus non nisi provident justo.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Anggota Tim 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="images/search.png" alt="Potret Sony Madison" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Sony Madison</h3>
                    <p class="text-orange-500 mb-4">CEO, Direktur</p>
                    <div class="space-x-2">
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <!-- Anggota Tim 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="images/4.png" alt="Potret John Doe" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">John Doe</h3>
                    <p class="text-orange-500 mb-4">Lead Developer</p>
                    <div class="space-x-2">
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <!-- Anggota Tim 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="images/men.png" alt="Potret Jane Smith" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Jane Smith</h3>
                    <p class="text-orange-500 mb-4">Product Manager</p>
                    <div class="space-x-2">
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <!-- Anggota Tim 4 -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="images/3.png" alt="Potret Alex Johnson" class="w-24 h-24 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Alex Johnson</h3>
                    <p class="text-orange-500 mb-4">Spesialis Pemasaran</p>
                    <div class="space-x-2">
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-600 hover:text-orange-500"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
@include('layouts.footer')
@endsection
