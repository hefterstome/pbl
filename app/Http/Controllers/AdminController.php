<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

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
        $data = new Admin();
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->no_hp = $request->no_hp;
        $data->save();
        return redirect('/admin/data-admin');
    }

    public function show(string $id){}

    public function edit($nip)
    {
        $data = Admin::find($nip);
        return view('dashboard_admin.admin.edit', compact('data'));

    }

    public function update(Request $request, $nip)
    {
        $data = Admin::findOrFail($nip);
        $data->nip = $request->nip; 
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;
        $data->update();
        return redirect('admin/data-admin');
    }

    public function destroy(string $nip)
    {
        $data = Admin::find($nip);
        $data->delete();
        return redirect('admin/data-admin');
    }
}
