<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan'; // Sesuaikan dengan nama tabel yang sesuai

    protected $fillable = [
        'id',
        'nama', 
        'no_KK', 
        'jenis_bansos', 
        'status', 
    ];

    public function jenisBansos()
    {
        return $this->belongsTo(JenisBansos::class, 'jenis_bansos');
    }
}