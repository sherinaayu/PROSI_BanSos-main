<?php

namespace App\Models;

use App\Events\StatusUpdated;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $primaryKey = 'id_data';
    protected $table = 'data';

    protected $fillable = [
        'id_data',
        'nama',
        'no_KK',
        'no_tlp',
        'penghasilan',
        'Pekerjaan',
        'kondisi_rumah',
        'jumlah_tanggungan',
        'jenis_bansos',
        'status',
        'sktm',
        'slip_gaji',
        'foto_depan',
        'foto_ruang_tamu',
        'foto_dapur',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_login', 'id_pengguna');
    }

    public function jenisBansos()
    {
        return $this->belongsTo(JenisBansos::class, 'jenis_bansos', 'id_jb');
    }
    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'id_data', 'id_data');
    }
    public function konfirmasiBansos($id) {
        $data = Data::find($id);
        if($data) {
            $data->status = true; // Assuming 'status' is a boolean field
            $data->save();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }
}