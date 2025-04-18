<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jurusan')->insert([
            ['nama_jurusan' => 'PPLG'],
            ['nama_jurusan' => 'Oracle'],
            ['nama_jurusan' => 'Teknik Industri'],
            ['nama_jurusan' => 'Kimia'],
            ['nama_jurusan' => 'Axio'],
            ['nama_jurusan' => 'TJKT'],
            ['nama_jurusan' => 'Pemasaran'],
            ['nama_jurusan' => 'Pertanian'],
        ]);
    }
}