<?php
namespace App\Http\Controllers;

class RTController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboardrt';

        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function dashboardrt()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboardrt';

        return view('rt.dashboardrt', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    
    public function pengajuan(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Pengajuan', 'Welcome']
        ];

        $activeMenu = 'pengajuan';

        return view('rt.pengajuan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpengajuan(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Laporan Pengajuan', 'Welcome']
        ];

        $activeMenu = 'laporanpengajuan';

        return view('rt.laporanpengajuan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpenerimaan(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Laporan Penerimaan', 'Welcome']
        ];

        $activeMenu = 'laporanpenerimaan';

        return view('rt.laporanpenerimaan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function pengajuanrt(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Pengajuan', 'Welcome']
        ];

        $activeMenu = 'pengajuanrt';

        return view('rt.pengajuan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpengajuandetail(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Laporan Pengajuan', 'Welcome']
        ];

        $activeMenu = 'laporanpengajuandetail';

        return view('rt.laporanpengajuanrt.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpenerimaandetail(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Laporan Penerimaan', 'Welcome']
        ];

        $activeMenu = 'laporanpenerimaandetail';

        return view('rt.laporanpenerimaanrt.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}