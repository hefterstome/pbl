<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class WargaController extends Controller
{

    public function index(){
        $data = Warga::all();
            return view('dashboard_admin.warga.index',['dataWarga' => $data]);
    }

    public function store(Request $request){
        $data = new Warga();
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->no_hp = $request->no_hp;
        $data->save();
        return redirect('/login');
    }

    public function destroy($id){
        $data = Warga::find($id);
        $data->delete();
        return redirect('admin/data-warga');
    }

    public function profil()
    {
        $nik = Auth::guard('warga')->user()->nik;
        $profil = Warga::find($nik);
        return view('dashboard_warga.profil.index', compact('profil'));
    }

    public function profilUpdate(Request $request,$nik){
        $data=Warga::find($nik);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->no_hp = $request->no_hp;
        $data->update();
        return redirect('/login');
    }

    public function logout()
    {
        Auth::guard('warga')->logout();
        return redirect('/login');
    }

    public function warga(){
        return view('dashboard_warga.warga');
    }


    public function form(){
        return view('dashboard_warga.pengajuan.form');
    }
    public function beranda(){
        return view('dashboard_warga.warga');
    }

}
