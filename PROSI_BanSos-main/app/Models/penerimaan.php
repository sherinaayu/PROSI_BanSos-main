<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $table = 'penerimaan';

    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'id_laporan', 'id_laporan');
    }
    public function penerimaan()
    {
        return $this->hasMany(Penerimaan::class, 'id_laporan', 'id_laporan');
    }
}