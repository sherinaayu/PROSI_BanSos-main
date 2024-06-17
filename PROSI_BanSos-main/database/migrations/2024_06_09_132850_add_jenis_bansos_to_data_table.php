<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisBansosToDataTable extends Migration
{
    public function up()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->string('jenis_bansos')->after('jumlah_tanggungan'); // Menambah kolom jenis_bansos setelah kolom jumlah_tanggungan
        });
    }

    public function down()
    {
        Schema::table('data', function (Blueprint $table) {
            $table->dropColumn('jenis_bansos'); // Menghapus kolom jenis_bansos jika rollback migration
        });
    }
}