<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class BansosController extends Controller
{
    public function konfirmasi($id)
    {
        try {
            $pengajuan = Pengajuan::findOrFail($id);
            $pengajuan->status = 1;
            $pengajuan->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}