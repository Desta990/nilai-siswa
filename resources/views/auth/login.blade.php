<x-guest-layout>
    <html lang="id">
        <head>
            <meta charset="utf-8" />
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <title>Login Nilai Siswa</title>
            <script src="https://cdn.tailwindcss.com"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
            <style>
                body {
                    font-family: 'Inter', sans-serif;
                }
            </style>
        </head>
        <body class="bg-gray-100 flex items-center justify-center min-h-screen">
            <div class="bg-white shadow-lg rounded-lg flex flex-col items-center max-w-4xl w-full">
               
                <div class="flex w-full">
                    <!-- Bagian Kiri -->
                    <div class="w-1/2 p-10">
                        <h1 class="text-3xl font-bold mb-4">Selamat Datang!</h1>
                        <p class="text-gray-600 mb-8">
                            Akses nilai akademik Anda dengan mudah dan cepat melalui sistem kami.
                        </p>

                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Alamat Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Kata Sandi -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Kata Sandi')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Ingat Saya -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">Ingat Saya</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        Lupa kata sandi?
                                    </a>
                                @endif

                                <x-primary-button class="ml-3">
                                    Masuk
                                </x-primary-button>
                            </div>
                        </form>

                        <p class="text-center text-sm text-gray-500 mt-6">
                            Belum punya akun? <a class="text-blue-500" href="{{ route('register') }}">Daftar sekarang</a>
                        </p>
                    </div>

                    <!-- Bagian Kanan -->
                    <div class="w-1/2 bg-blue-50 p-10 flex flex-col justify-center items-center">
                        <div class="relative mb-6">
                            <img src="{{ asset('images/13.png') }}" alt="Ilustrasi Siswa" />
                        </div>

                        <div class="bg-white p-4 rounded-lg shadow-md mb-6">
                            <h2 class="text-lg font-semibold">Akses Nilai Anda</h2>
                            <p class="text-gray-500">Cek perkembangan akademik Anda dengan sistem online kami.</p>
                        </div>

                        <p class="text-center text-gray-600">
                            Mudah, cepat, dan akurat dengan <span class="font-semibold">Sistem Nilai Siswa</span>
                        </p>
                    </div>
                </div>
            </div>
        </body>
    </html>
</x-guest-layout>
