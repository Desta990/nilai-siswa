<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('guru')->insert([
            [
                'nip' => '197001011234001',
                'nama_guru' => 'Budi Santoso',
                'mapel_id' => 1, // Sesuaikan dengan ID mapel yang relevan
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => '198002021234002',
                'nama_guru' => 'Siti Aminah',
                'mapel_id' => 2, // Sesuaikan dengan ID mapel yang relevan
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
