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
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'isi' => 'required'
        ]);
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
        return redirect('/admin/pesan')->with('success','Data berhasil dihapus!');
    }
}
