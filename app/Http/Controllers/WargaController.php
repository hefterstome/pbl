<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function warga(){
        return view('dashboard_warga.wargapage.login');
    }
    public function pengajuan(){
        return view('dashboard_warga.pengajuan.pengajuan_data');
    }
    public function profil(){
        return view('dashboard_warga.profi');
    }
    public function form(){
        return view('dashboard_warga.pengajuan.pengajuan_form');
    }

}
