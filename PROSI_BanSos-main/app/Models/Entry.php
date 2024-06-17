<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    // Define the table if it is not the plural of the model name
    protected $table = 'datapengguna';

    // Define fillable attributes if needed
    protected $fillable = ['nama', 'no_kartu_keluarga', 'pekerjaan', 'tanggal_pengajuan'];
}
