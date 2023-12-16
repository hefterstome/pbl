<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class AdminController extends Controller
{
    //
    public function index(){
        $data = Warga::all();
            return view('dashboard_admin.data_warga.index',['dataWarga' => $data]);
    }

    public function create(){
        return view('home');
    }

    public function destroy($nik){
        $data = Warga::find($nik);
        $data->delete();
        return redirect('/data-warga');
    }
}
