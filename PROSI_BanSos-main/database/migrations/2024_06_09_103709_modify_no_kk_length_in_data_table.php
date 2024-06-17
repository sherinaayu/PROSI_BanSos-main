<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyNoKkLengthInDataTable extends Migration
{
    public function up()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->string('no_KK', 16)->change();
        });
    }

    public function down()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->string('no_KK', 50)->change();
        });
    }
}