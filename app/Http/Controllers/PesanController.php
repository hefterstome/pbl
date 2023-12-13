<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    public function index(){
        $data = Pesan::all();
            return view('home',['dataPesan' => $data]);
    }

    public function create(){
        return view('home');
    }

    public function store(Request $request){
        $data = new Pesan();
        $data->id = $request->id;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->isi = $request->isi;
        $data->save();
        return redirect('/');
    }
}
