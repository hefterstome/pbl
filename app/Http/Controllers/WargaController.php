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
        $message = [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah digunakan',
            'numeric' => ':attribute harus berupa angka',
            'min' => 'Panjang :attribute minimal :min karakter',
            'max' => 'Panjang :attribute maksimal :max karakter'
        ];
        $this->validate($request, [
            'nama' => 'required|max:255',
            'password' => 'required|min:6|max:255',
            'no_hp' => 'required|numeric|min:10|max:13'
        ], $message);
        $data = new Warga();
        $data->nama = $request->nama;
        $data->password = Hash::make($request->password);
        $data->no_hp = $request->no_hp;
        $data->save();
        return redirect('/login')->with('primary','Registrasi berhasil, silakan login!');
    }

    public function destroy($id){
        $data = Warga::find($id);
        $data->delete();
        return redirect('admin/warga');
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
        if ($request->filled('password')) {
            $data->password = Hash::make($request->password);
        }
        $data->no_hp = $request->no_hp;
        $data->update();
        return redirect('/login')->with('success','Profil berhasil diubah. Silakan login kembali');
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
