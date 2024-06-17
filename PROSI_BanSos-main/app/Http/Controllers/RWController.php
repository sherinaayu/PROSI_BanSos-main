<?php
namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Entry;

class RWController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboardrw';

        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function dashboardrw()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboardrw';

        return view('rw.dashboardrw', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function datapengajuan(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Pengajuan', 'Welcome']
        ];

        $activeMenu = 'datapengajuan';

        return view('rw.datapengajuan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpengajuanrw(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Laporan Pengajuan', 'Welcome']
        ];

        $activeMenu = 'laporanpengajuanrw';

        return view('rw.laporanpengajuanrw', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpenerimaanrw(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Laporan Penerimaan', 'Welcome']
        ];

        $activeMenu = 'laporanpenerimaanrw';

        return view('rw.laporanpenerimaanrw', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function validasi(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Validasi', 'Welcome']
        ];

        $activeMenu = 'validasi';

        return view('rw.validasi', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function datapengajuandetail()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Pengajuan', 'Welcome']
        ];

        $activeMenu = 'datapengajuan';

        return view('datapengajuan.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function validasidetail()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Validasi', 'Welcome']
        ];

        $activeMenu = 'validasidetail';

        return view('rw.validasi.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function delete()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'delete';

        return view('rw.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpengajuanrwdetail(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Laporan Pengajuan', 'Welcome']
        ];

        $activeMenu = 'laporanpengajuanrwdetail';

        return view('rw.laporanpengajuanrw.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpenerimaanrwdetail(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Laporan Penerimaan', 'Welcome']
        ];

        $activeMenu = 'laporanpenerimaanrwdetail';

        return view('rw.laporanpenerimaanrw.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function aras(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Aras', 'Welcome']
        ];

        $activeMenu = 'aras';

        return view('rw.aras', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function data_kriteria_aras(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['data_kriteria_aras', 'Welcome']
        ];

        $activeMenu = 'data_kriteria_aras';

        return view('rw.data_kriteria_aras', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function data_sub_kriteria(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['data_sub_kriteria', 'Welcome']
        ];

        $activeMenu = 'data_sub_kriteria';

        return view('rw.data_sub_kriteria', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function data_alternatif(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['data_alternatif', 'Welcome']
        ];

        $activeMenu = 'data_alternatif';

        return view('rw.data_alternatif', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function data_penilaian(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['data_penilaian', 'Welcome']
        ];

        $activeMenu = 'data_penilaian';

        return view('rw.data_penilaian', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function data_perhitungan(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['data_perhitungan', 'Welcome']
        ];

        $activeMenu = 'data_perhitungan';

        return view('rw.data_perhitungan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function data_hasil_akhir(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['data_hasil_akhir', 'Welcome']
        ];

        $activeMenu = 'data_hasil_akhir';

        return view('rw.data_hasil_akhir', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function validasisetuju(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Validasi', 'Welcome']
        ];

        $activeMenu = 'validasisetuju';

        return view('rw.validasiksetuju.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function validasitolak(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Validasi', 'Welcome']
        ];

        $activeMenu = 'validasitolak';

        return view('rw.validasiktolak.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function showValidationForm()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Validasi', 'Welcome']
        ];
        $dataPengajuan = Data::all();
        return view('rw.validasi', ['breadcrumb' => $breadcrumb, 'dataPengajuan'=> $dataPengajuan]);
    }
}