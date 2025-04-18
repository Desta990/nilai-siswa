<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold mb-4">{{ __('Selamat Datang di Sistem Nilai Siswa') }}</h3>
                    <p class="mb-4">
                        Di dashboard ini, Anda dapat mengakses informasi terkait nilai akademik, termasuk nilai Tugas, UTS, UAS, dan performa Anda secara keseluruhan.
                    </p>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Melihat rekap nilai per semester.</li>
                        <li>Mendapatkan informasi tentang performa akademik Anda.</li>
                        <li>Memonitor progres belajar berdasarkan hasil evaluasi.</li>
                    </ul>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Pastikan Anda selalu memeriksa nilai Anda setelah guru memperbarui data untuk memastikan tidak ada kesalahan atau kekeliruan.
                    </p>
                    <div class="mt-6">
                        <a href="{{ route('siswa.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Lihat Siswa Anda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
