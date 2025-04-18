<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeTable extends Migration
{
    public function up()
    {
        Schema::create('grade', function (Blueprint $table) {
            $table->id();
            $table->string('nama_grade');  // Nama grade (misalnya A, B, C)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grade');
    }
}
