<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GradeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('grade')->insert([
            ['nama_grade' => 'A'],
            ['nama_grade' => 'B'],
            ['nama_grade' => 'C'],
            ['nama_grade' => 'D'],
            ['nama_grade' => 'E'],
        ]);
    }
}
