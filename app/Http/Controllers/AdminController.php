<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $data = Admin::all();
            return view('dashboard_admin.admin.index',['dataAdmin' => $data]);
    }

    public function create()
    {
        return view('dashboard_admin.admin.create');
    }

    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah digunakan',
            'numeric' => ':attribute harus berupa angka',
            'min' => 'Panjang :attribute minimal :min karakter',
            'max' => 'Panjang :attribute maksimal :max karakter'
        ];
        $this->validate($request, [
            'nip' => 'required|unique:admin,nip|numeric|min:18|max:18',
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:admin,email|max:255',
            'password' => 'required|min:6|max:255',
            'no_hp' => 'required|numeric|min:10|max:13'
        ], $message);
        $data = new Admin();
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->no_hp = $request->no_hp;
        $data->save();
        return redirect('/admin/admin')->with('success','Data berhasil ditambah!');
    }

    // public function show(string $id){}

    // public function edit($nip)
    // {
    //     $data = Admin::find($nip);
    //     return view('dashboard_admin.admin.edit', compact('data'));

    // }

    // public function update(Request $request, $nip)
    // {
    //     $data = Admin::findOrFail($nip);
    //     $data->nip = $request->nip; 
    //     $data->nama = $request->nama;
    //     $data->email = $request->email;
    //     $data->no_hp = $request->no_hp;
    //     $data->update();
    //     return redirect('admin/admin');
    // }

    public function destroy(string $nip)
    {
        $data = Admin::find($nip);
        $data->delete();
        return redirect('admin/admin');
    }

    public function profil()
    {
        $nip = Auth::guard('admin')->user()->nip;
        $data = Admin::find($nip);
        return view('dashboard_admin.profil.index', compact('data'));
    }
    
    public function profilUpdate(Request $request,$nip){
        $data=Admin::find($nip);
        $data->nama = $request->nama;
        $data->password = Hash::make($request->password);
        $data->no_hp = $request->no_hp;
        $data->update();
        return redirect('/admin')->with('success','Profil berhasil diubah. Silakan login kembali');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    public function beranda(){
        return view('dashboard_admin.beranda.index');
    }

}
