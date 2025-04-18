<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mapel')->insert([
            [
                'nama_mapel' => 'Bahasa Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mapel' => 'Biologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mapel' => 'Geografi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mapel' => 'Sosiologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mapel' => 'Ekonomi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mapel' => 'Sejarah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mapel' => 'Pendidikan Agama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mapel' => 'Pendidikan Jasmani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_mapel' => 'TIK',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
