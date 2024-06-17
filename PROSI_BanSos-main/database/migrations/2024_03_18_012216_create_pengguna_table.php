<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration
{
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->increments('id_pengguna');
            $table->string('Name', 250);
            $table->string('Email')->unique();
            $table->string('Username', 150)->unique();
            $table->integer('role');
            $table->string('Password', 250);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
}