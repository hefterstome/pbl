<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data = Admin::all();
            return view('dashboard_admin.admin.index',['dataAdmin' => $data]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard_admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Admin();
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->no_hp = $request->no_hp;
        $data->save();
        return redirect('/data-admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nip)
    {
        $data = Admin::find($nip);
        $data->delete();
        return redirect('/data-admin');
    }
}
