<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();  // NISN siswa
            $table->string('nama');  // Nama siswa
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');  // Relasi dengan tabel kelas
            $table->foreignId('jurusan_id')->constrained('jurusan')->onDelete('cascade');  // Relasi dengan tabel jurusan
            $table->timestamps();  // Timestamp untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
