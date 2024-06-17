<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisBansosController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\RTController;
use App\Http\Controllers\RWController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Show Login Form
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Handle login
Route::post('/login', [LoginController::class, 'login']);

// Define routes for each role's dashboard
// Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/dashboardm', [MasyarakatController::class, 'dashboardm'])->name('dashboardm');
Route::get('/dashboardrt', [RtController::class, 'dashboardrt'])->name('dashboardrt');
Route::get('/dashboardrw', [RwController::class, 'dashboardrw'])->name('dashboardrw');
Route::get('/dashboardk', [KelurahanController::class, 'dashboardk'])->name('dashboardk');

// Home route
Route::get('/home', [HomeController::class, 'showHome'])->name('home');

//Show register form
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Masyarakat
Route::get('/informasi', [MasyarakatController::class,'informasi']);
Route::get('/informasi/detail/{id}', [MasyarakatController::class,'informasidetail']);
Route::get('/informasi2/detail/{id}', [MasyarakatController::class,'informasidetail2']);
Route::get('/informasi3/detail/{id}', [MasyarakatController::class,'informasidetail3']);
Route::get('/informasi4/detail/{id}', [MasyarakatController::class,'informasidetail4']);
Route::get('/konfirmasi', [MasyarakatController::class,'konfirmasi']);
Route::get('/konfirmasi/detail/{id}', [MasyarakatController::class,'konfirmasidetail']);
Route::get('/pengajuanm', [MasyarakatController::class,'pengajuanm']);
// Rute untuk menyimpan data formulir
Route::post('/pengajuan-bantuan-sosial', [PengajuanController::class, 'store'])->name('pengajuan.store');

// RT
Route::get('/pengajuanrt', [RTController::class,'pengajuanrt']);
Route::get('/laporanpengajuan', [RTController::class,'laporanpengajuan']);
Route::get('/laporanpengajuan/detail/{id}', [RTController::class,'laporanpengajuandetail']);
Route::get('/laporanpenerimaan', [RTController::class,'laporanpenerimaan']);
Route::get('/laporanpenerimaan/detail/{id}', [RTController::class,'laporanpenerimaandetail']);

// RW
Route::get('/datapengajuan', [RWController::class,'datapengajuan']);
Route::get('/datapengajuan/detail/{id}', [RWController::class,'datapengajuandetail']);
Route::get('/laporanpengajuanrw', [RWController::class,'laporanpengajuanrw']);
Route::get('/laporanpengajuanrw/detail/{id}', [RWController::class,'laporanpengajuanrwdetail']);
Route::get('/laporanpenerimaanrw', [RWController::class,'laporanpenerimaanrw']);
Route::get('/laporanpenerimaanrw/detail/{id}', [RWController::class,'laporanpenerimaanrwdetail']);
Route::get('/validasi', [RWController::class,'validasi']);
Route::get('/validasi/detail/{id}', [RWController::class,'validasidetail']);
Route::delete('/validasi/delete/{id}', [RWController::class,'delete']);
Route::get('/lihat_pengajuan_disetujui/{id}', [RWController::class,'validasisetuju']);
Route::get('/lihat_pengajuan_ditolak/{id}', [RWController::class,'validasitolak']);

// Kelurahan
Route::get('/informasik', [KelurahanController::class,'informasik']);
Route::get('/informasik/detail/{id}', [KelurahanController::class,'informasikdetail']);
Route::get('/laporanpenerimaank', [KelurahanController::class,'laporanpenerimaank']);

Route::get('/validasik', [KelurahanController::class,'validasik']);

Route::get('/laporanpenerimaank/detail/{id}', [KelurahanController::class,'laporanpenerimaankdetail']);
Route::get('/validasik', [KelurahanController::class,'validasik']);
Route::get('/validasik/detail/{id}', [KelurahanController::class,'validasikdetail']);
Route::get('/lihat_pengajuan_disetujui/{id}', [KelurahanController::class,'validasiksetuju']);
Route::get('/lihat_pengajuan_ditolak/{id}', [KelurahanController::class,'validasiktolak']);

// Logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Define routes for each role's dashboard
// Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/dashboardm', [MasyarakatController::class, 'dashboardm'])->name('dashboardm');
Route::get('/dashboardrt', [RtController::class, 'dashboardrt'])->name('dashboardrt');
Route::get('/dashboardrw', [RwController::class, 'dashboardrw'])->name('dashboardrw');
Route::get('/dashboardk', [KelurahanController::class, 'dashboardk'])->name('dashboardk');

// Home route
// Route::get('/home', [HomeController::class, 'index'])->name('home');

//Show register form

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Handle login

Route::post('/login', [LoginController::class, 'login']);

Route::get('/datapengajuan', 'PengajuanController@index');
Route::get('/datapengajuan', [PengajuanController::class, 'index']);

Route::get('/datapengajuan/detail/{id}', [PengajuanController::class, 'datapengajuandetail'])->name('datapengajuan.detail');

Route::get('/informasi/detail/{id}', [JenisBansosController::class, 'show']);

// routes/web.php
Route::post('/konfirmasi_bansos/{id}', 'BansosController@konfirmasi')->name('konfirmasi_bansos');
Route::post('/konfirmasi_bansos/{id}', 'DataController@konfirmasiBansos');

Route::get('/validasi', [RWController::class, 'showValidationForm'])->name('validasi');

Route::post('/store-pengajuan', [PengajuanController::class, 'store'])->name('store.pengajuan');