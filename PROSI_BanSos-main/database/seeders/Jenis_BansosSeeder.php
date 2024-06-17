<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Jenis_BansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
                'id_jb' => 1,
                'name' => 'BPNT',
                'deskripsi' => 'Bantuan Pangan Non Tunai (BPNT) yaitu dengan pemberian
                bantuan sebesar Rp. 200.000- (dua ratus ribu rupiah) yang dapat dipergunakan untuk membeli sembako bukan
                makanan olahan (seperti nugget,sosis,abon,telur asin, ikan, dll) dan diharapkan menggunakan potensi yang ada
                di wilayah (sayur-mayur,buah-buahan,pembuat tahu tempe di wilayah, dll).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jb' => 2,
                'name' => 'PKH',
                'deskripsi' => 'Program Keluarga Harapan (PKH) adalah program bantuan sosial 
                bersyarat yang dikelola oleh Kementerian Sosial Republik Indonesia. 
                Program ini bertujuan untuk meningkatkan kualitas hidup keluarga miskin 
                melalui peningkatan akses pendidikan, kesehatan, dan kesejahteraan sosial. 
                PKH memberikan bantuan tunai kepada keluarga yang memenuhi syarat tertentu, 
                terutama keluarga dengan ibu hamil, anak usia dini, anak sekolah, 
                penyandang disabilitas berat, dan lanjut usia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jb' => 3,
                'name' => 'BLT',
                'deskripsi' => 'Bantuan Langsung Tunai (BLT) adalah program bantuan sosial dari pemerintah 
                Indonesia yang bertujuan untuk memberikan bantuan finansial langsung kepada 
                masyarakat miskin dan rentan, terutama dalam situasi darurat atau ketika 
                menghadapi krisis ekonomi. Program ini dirancang untuk membantu penerima 
                manfaat memenuhi kebutuhan dasar mereka, seperti makanan, kesehatan, dan 
                pendidikan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jb' => 4,
                'name' => 'BSB',
                'deskripsi' => 'Bantuan Sosial Beras adalah program bantuan sosial yang diluncurkan 
                oleh pemerintah Indonesia untuk membantu keluarga miskin dan rentan dalam 
                memenuhi kebutuhan pangan mereka, khususnya beras sebagai bahan pokok utama. 
                Program ini bertujuan untuk memastikan bahwa keluarga yang kurang mampu 
                memiliki akses yang memadai terhadap pangan dan tidak mengalami kekurangan 
                gizi akibat keterbatasan ekonomi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('jenis_bansos')->insert($data);
    }
}
