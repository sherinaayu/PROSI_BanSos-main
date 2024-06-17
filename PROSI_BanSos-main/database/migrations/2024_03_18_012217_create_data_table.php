<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id_data');
            $table->string('nama');
            $table->string('no_KK', 50);
            $table->string('no_tlp', 20);
            $table->integer('penghasilan');
            $table->string('Pekerjaan', 150);
            $table->text('kondisi_rumah');
            $table->integer('jumlah_tanggungan');
            $table->integer('jenis_bansos');
            $table->boolean('status')->nullable();
            $table->string('sktm')->nullable();
            $table->string('slip_gaji')->nullable();
            $table->string('foto_depan')->nullable();
            $table->string('foto_ruang_tamu')->nullable();
            $table->string('foto_dapur')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data');
    }
}