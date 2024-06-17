<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'id_login' => 1,
                'nama' => 'Jennie',
                'no_KK' => '1234567890123456',
                'no_tlp' => '081234567890',
                'penghasilan' => 5000000,
                'Pekerjaan' => 'Software Engineer',
                'kondisi_rumah' => 'Layak huni',
                'jumlah_tanggungan' => 3,
                'sktm' => 'sktm_1.png',
                'slip_gaji' => 'slip_gaji_1.png',
                'foto_depan' => 'foto_depan_1.png',
                'foto_ruang_tamu' => 'foto_ruang_tamu_1.png',
                'foto_dapur' => 'foto_dapur_1.png',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
                ]
            ];
        DB::table('data')->insert($data);
    }
}

        $data = [];

        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'id_login' => $i,
                'nama' => 'User' . $i,
                'no_KK' => str_repeat($i, 16),
                'no_tlp' => '08' . str_repeat($i, 10),
                'penghasilan' => 5000000 + ($i * 10000),
                'Pekerjaan' => 'Pekerjaan' . $i,
                'kondisi_rumah' => 'Layak huni',
                'jumlah_tanggungan' => rand(1, 5),
                'sktm' => 'sktm_' . $i . '.png',
                'slip_gaji' => 'slip_gaji_' . $i . '.png',
                'foto_depan' => 'foto_depan_' . $i . '.png',
                'foto_ruang_tamu' => 'foto_ruang_tamu_' . $i . '.png',
                'foto_dapur' => 'foto_dapur_' . $i . '.png',
                'status' => rand(0, 1) == 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('data')->insert($data);