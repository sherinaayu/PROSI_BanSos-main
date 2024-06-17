<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTable extends Migration
{
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->increments('id_laporan');
            $table->unsignedInteger('id_data');
            $table->foreign('id_data')->references('id_data')->on('data')->onDelete('cascade');
            $table->string('gambar')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laporan');
    }
}
