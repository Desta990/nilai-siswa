<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriTable extends Migration
{
    public function up(): void
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->string('judul');            // Judul galeri
            $table->text('deskripsi')->nullable(); // Deskripsi galeri
            $table->string('gambar');          // Nama file/path gambar
            $table->timestamps();              // Kolom created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
}
