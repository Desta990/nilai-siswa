<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    public function up(): void
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa')->onDelete('cascade'); // Relasi ke tabel siswa
            $table->foreignId('mapel_id')->constrained('mapel')->onDelete('cascade'); // Relasi ke tabel mapel
            $table->foreignId('guru_id')->constrained('guru')->onDelete('cascade');  // Relasi ke tabel guru
            $table->integer('uts');          // Nilai UTS
            $table->integer('uas');          // Nilai UAS
            $table->integer('tugas');        // Nilai tugas
            $table->float('nilai_akhir')->nullable(); // Nilai akhir (opsional)
            $table->foreignId('grade_id')->constrained('grade')->onDelete('cascade'); // Relasi ke tabel grade
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
}
