<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyNoTlpLengthInDataTable extends Migration
{
    public function up()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->string('no_tlp', 15)->change();
        });
    }

    public function down()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->string('no_tlp', 20)->change();
        });
    }
}