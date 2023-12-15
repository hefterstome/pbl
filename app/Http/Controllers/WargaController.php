<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function warga(){
        return view('dashboard_warga.warga');
    }
    public function pengajuan(){
        return view('dashboard_warga.pengajuan.index');
    }
    public function profil(){
        return view('dashboard_warga.profil');
    }
    public function form(){
        return view('dashboard_warga.pengajuan.form');
    }
    public function home(){
        return view('dashboard_warga.warga');
    }

}
