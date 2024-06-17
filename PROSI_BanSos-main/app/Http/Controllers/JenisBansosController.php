<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBansos;

class JenisBansosController extends Controller
{
    public function show($id)
    {
        $jenisBansos = JenisBansos::findOrFail($id);
        $activeMenu = 'informasi';
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Informasi', 'Welcome']
        ];
        
        return view('masyarakat.show', ['jenisBansos' => $jenisBansos, 'activeMenu' => $activeMenu, 'breadcrumb' => $breadcrumb]);
    }
}