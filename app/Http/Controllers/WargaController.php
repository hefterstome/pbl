<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class WargaController extends Controller
{

    public function index(){
        $data = Warga::all();
            return view('dashboard_admin.warga.index',['dataWarga' => $data]);
    }

    // public function create(){
    //     return view('page.registrasi');
    // }

    public function store(Request $request){
        $data = new Warga();
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->no_hp = $request->no_hp;
        $data->save();
        return redirect('/login');
    }

    public function destroy($nik){
        $data = Warga::find($nik);
        $data->delete();
        return redirect('/data-warga');
    }

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
