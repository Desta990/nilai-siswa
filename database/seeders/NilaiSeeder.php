<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('nilai')->insert([
           
            [
                'siswa_id' => 13,       // ID siswa kedua
                'mapel_id' => 2,       // ID mapel kedua
                'guru_id' => 2,        // ID guru kedua
                'uts' => 78,           // Nilai UTS
                'uas' => 82,           // Nilai UAS
                'tugas' => 75,         // Nilai tugas
                'nilai_akhir' => 78.3, // Nilai akhir
                'grade_id' => 2,       // ID grade terkait
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
