<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\Storage;

class PengajuanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'no_KK' => 'required|string|max:16',
            'no_tlp' => 'required|string|max:15',
            'nama' => 'required|string',
            'penghasilan' => 'required|integer',
            'Pekerjaan' => 'required|string|max:150',
            'kondisi_rumah' => 'required|string',
            'jumlah_tanggungan' => 'required|integer',
            'status' => 'nullable',
            'jenis_bansos' => 'required|integer',
            'surat_keterangan_tidak_mampu' => 'required|mimes:jpeg,png,jpg|max:2048',
            'slip_gaji' => 'required|mimes:jpeg,png,jpg|max:2048',
            'foto_depan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_ruang_tamu' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_dapur' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Store files
        $sktmPath = $request->file('surat_keterangan_tidak_mampu')->store('documents');
        $slipGajiPath = $request->file('slip_gaji')->store('documents');
        $fotoDepanPath = $request->file('foto_depan')->store('images');
        $fotoRuangTamuPath = $request->file('foto_ruang_tamu')->store('images');
        $fotoDapurPath = $request->file('foto_dapur')->store('images');

        // Save data to database
        Data::create([
            'nama' => $request->nama,
            'no_KK' => $request->no_KK,
            'no_tlp' => $request->no_tlp,
            'penghasilan' => $request->penghasilan,
            'Pekerjaan' => $request->Pekerjaan,
            'kondisi_rumah' => $request->kondisi_rumah,
            'jumlah_tanggungan' => $request->jumlah_tanggungan,
            'status' => $request->status,
            'jenis_bansos' => $request->jenis_bansos,
            'sktm' => $sktmPath,
            'slip_gaji' => $slipGajiPath,
            'foto_depan' => $fotoDepanPath,
            'foto_ruang_tamu' => $fotoRuangTamuPath,
            'foto_dapur' => $fotoDapurPath,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function index()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Pengajuan', 'Welcome']
        ];

        $activeMenu = 'datapengajuan';
        $datapengajuan = Data::with('jenisBansos')->get();
        return view('rw.datapengajuan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu, 'datapengajuan' => $datapengajuan]);
    }

    public function datapengajuandetail($id)
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Pengajuan', 'Welcome']
        ];

        $activeMenu = 'datapengajuan';
        $pengajuan = Data::findOrFail($id);
        return view('datapengajuan.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu, 'pengajuan' => $pengajuan]);
    }

    public function showValidationForm()
    {
        $dataPengajuan = Data::all();
        return view('rw.validasi', compact('dataPengajuan'));
    }

    public function updateStatus(Request $request, $id)
    {
        $pengajuan = Data::findOrFail($id);
        $pengajuan->status = $request->input('status');
        $pengajuan->save();

        return redirect()->route('rw.validasi')->with('success', 'Status berhasil diperbarui.');
    }
}