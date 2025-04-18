<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Nilai Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 1.125rem;
        }
        h1, h2 {
            font-family: 'Roboto', sans-serif;
            font-size: 2rem;
        }
        nav a {
            font-family: 'Roboto', sans-serif;
            font-size: 1.125rem;
        }
        footer {
            font-family: 'Roboto', sans-serif;
            font-size: 1.125rem;
        }
    </style>
</head>
<body class="bg-grey-800 text-black-800">
    <!-- Header -->
    <header class="flex justify-between items-center p-6 bg-blue shadow-md">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/1.png') }}" class="h-20" alt="Logo"/>
            <nav class="hidden md:flex space-x-8 text-lg font-medium">
                <a href="{{ route('home') }}" class="text-gray-800 hover:text-blue-600 transition no-underline">BERANDA</a>
                <a href="{{ route('about') }}" class="text-gray-800 hover:text-blue-600 transition no-underline">TENTANG</a>
                <a href="{{ url('/siswaa') }}" class="text-gray-800 hover:text-blue-600 transition no-underline">DATA SISWA</a>
                <a href="{{ url('/galeri-user') }}" class="text-gray-800 hover:text-blue-600 transition no-underline">GALERI</a>
                <a href="{{ route('contact') }}" class="text-gray-800 hover:text-blue-600 transition no-underline">KONTAK</a>
            </nav>
        </div>
        @if (Route::has('login'))
        <div class="flex items-center space-x-4">
            <nav class="hidden md:flex space-x-8 text-lg font-medium">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-800 hover:text-gray-600  transition no-underline">DASBOR</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-800 hover:text-gray-600  transition no-underline">MASUK</a>
                   
                @endauth
            </nav>
            </div>
        @endif
    </header>

 


    <!-- Main Content -->
    @yield('content')

    
    