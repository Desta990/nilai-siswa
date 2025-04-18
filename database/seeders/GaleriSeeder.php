<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('galeri')->insert([
            [
                'judul' => 'Kegiatan Sekolah',
                'deskripsi' => 'Dokumentasi kegiatan tahunan sekolah.',
                'gambar' => 'kegiatan_sekolah.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Lomba Olahraga',
                'deskripsi' => 'Foto-foto lomba olahraga antar kelas.',
                'gambar' => 'lomba_olahraga.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Perayaan Hari Guru',
                'deskripsi' => 'Momen spesial perayaan Hari Guru Nasional.',
                'gambar' => 'hari_guru.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
