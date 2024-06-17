<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBansos extends Model
{
    use HasFactory;

    protected $table = 'jenis_bansos';
    protected $primaryKey = 'id_jb';
    public $timestamps = false;

    protected $fillable = [
        'name', 'description',
    ];
}