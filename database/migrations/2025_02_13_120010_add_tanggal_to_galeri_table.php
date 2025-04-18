<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('galeri', function (Blueprint $table) {
            $table->date('tanggal')->after('gambar')->nullable(); // Menambahkan kolom tanggal setelah gambar
        });
    }

    public function down(): void
    {
        Schema::table('galeri', function (Blueprint $table) {
            $table->dropColumn('tanggal');
        });
    }
};
