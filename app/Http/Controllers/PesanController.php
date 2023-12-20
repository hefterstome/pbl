<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    public function index(){
        $data = Pesan::all();
            return view('dashboard_admin.pesan.index',['dataPesan' => $data]);
    }

    public function create(){
        return view('home');
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
            'email' => 'required|email|max:255',
            'isi' => 'required|max:255'
        ], $message);
        $data = new Pesan();
        $data->id = $request->id;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->isi = $request->isi;
        $data->save();
        return redirect('/')->with('success','Pesan telah terkirim. Terima kasih!');
    }

    public function destroy($id){
        $data = Pesan::find($id);
        $data->delete();
        return redirect('/admin/pesan');
    }
}
