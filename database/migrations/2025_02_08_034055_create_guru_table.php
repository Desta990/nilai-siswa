<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nip')->unique(); // Nomor Induk Pegawai (Unique), berada di atas nama_guru
            $table->string('nama_guru'); // Nama guru
            $table->foreignId('mapel_id')->constrained('mapel')->onDelete('cascade'); // Foreign Key ke tabel mapel
            $table->timestamps(); // Timestamps created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
}
