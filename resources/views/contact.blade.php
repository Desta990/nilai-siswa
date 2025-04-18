@extends('layouts.home') 

@section('content')
<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Hubungi Kami - SMKN 4 Padalarang</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <!-- Banner -->
  <div class="relative">
   <img alt="SMKN 4 Padalarang" class="w-full h-96 object-cover" src="images/5.jpg"/>
   <div class="absolute inset-0 bg-black opacity-50"></div>
   <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
    <h1 class="text-4xl font-bold mb-4">HUBUNGI KAMI</h1>
    <p class="text-lg">Butuh bantuan? Hubungi kami melalui informasi di bawah ini.</p>
   </div>
  </div>

  <!-- Kontak -->
  <div class="bg-white py-16">
   <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
    <div>
     <i class="fas fa-map-marker-alt text-4xl text-gray-900 mb-4"></i>
     <h2 class="text-xl font-semibold mb-2">KUNJUNGI KAMI</h2>
     <p class="text-gray-600 mb-2">Alamat Sekolah:</p>
     <p class="text-gray-900">Jl. Raya Padalarang No. 123, Padalarang, Jawa Barat</p>
    </div>
    <div>
     <i class="fas fa-phone-alt text-4xl text-gray-900 mb-4"></i>
     <h2 class="text-xl font-semibold mb-2">HUBUNGI KAMI</h2>
     <p class="text-gray-600 mb-2">Telepon:</p>
     <p class="text-gray-900">(022) 123-4567</p>
    </div>
    <div>
     <i class="fas fa-envelope text-4xl text-gray-900 mb-4"></i>
     <h2 class="text-xl font-semibold mb-2">EMAIL KAMI</h2>
     <p class="text-gray-600 mb-2">Email Sekolah:</p>
     <p class="text-gray-900">info@smkn4padalarang.sch.id</p>
    </div>
   </div>
  </div>

  
  </div>
 </body>
</html>
@include('layouts.footer')
@endsection
