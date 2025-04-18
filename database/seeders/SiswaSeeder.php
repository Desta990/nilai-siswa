<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('siswa')->insert([
            ['nisn' => '001', 'nama' => 'Desta Julpaesal', 'kelas_id' => 3, 'jurusan_id' => 7],
            ['nisn' => '002', 'nama' => 'Budi Santoso', 'kelas_id' => 2, 'jurusan_id' => 6],
            ['nisn' => '003', 'nama' => 'Citra Dewi', 'kelas_id' => 1, 'jurusan_id' => 8],
            ['nisn' => '004', 'nama' => 'Dian Sari', 'kelas_id' => 4, 'jurusan_id' => 9],
            ['nisn' => '005', 'nama' => 'Eko Prasetyo', 'kelas_id' => 5, 'jurusan_id' => 10],
        ]);
    }
}