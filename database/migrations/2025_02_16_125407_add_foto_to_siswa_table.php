<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('siswa', function (Blueprint $table) {
        $table->string('foto')->nullable()->after('jurusan_id'); // Menambahkan kolom foto setelah jurusan_id
    });
}

public function down()
{
    Schema::table('siswa', function (Blueprint $table) {
        $table->dropColumn('foto'); // Menghapus kolom foto jika rollback
    });
}
};
