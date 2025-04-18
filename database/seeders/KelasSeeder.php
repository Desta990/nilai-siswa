<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KelasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kelas')->insert([
            ['nama_kelas' => 'XII PPLG 1'],
            ['nama_kelas' => 'XII PPLG 2'],
            ['nama_kelas' => 'XII Oracle 1'],
            ['nama_kelas' => 'XII Teknik Industri 1'],
            ['nama_kelas' => 'XII Kimia 1'],
            ['nama_kelas' => 'XII TJKT 1'],
            ['nama_kelas' => 'XII Axio 1'],
            ['nama_kelas' => 'XII Pemasaran 1'],
        ]);
    }
}
