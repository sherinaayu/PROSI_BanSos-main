<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id_laporan';

    public function data()
    {
        return $this->belongsTo(Data::class, 'id_data', 'id_data');
    }
}