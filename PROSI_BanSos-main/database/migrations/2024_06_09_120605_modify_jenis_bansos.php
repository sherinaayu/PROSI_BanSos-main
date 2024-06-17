<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyJenisBansos extends Migration
{
    public function up()
    {
        Schema::create('jenis_bansos', function (Blueprint $table) {
            $table->increments('id_jb');
            $table->string('deskripsi', 1000);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenis_bansos');
    }
}