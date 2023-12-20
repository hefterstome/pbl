<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengajuan::all()->where('status','sedang diproses');
        
        return view('dashboard_admin.pengajuan.index',['dataPengajuan' => $data]);
    }
    public function dataDiterima()
    {
        $data = Pengajuan::all()->where('status','diterima');
        
        return view('dashboard_admin.pengajuan.diterima',['dataPengajuan' => $data]);
    }

    public function dataDitolak()
    {
        $data = Pengajuan::all()->where('status','ditolak');
        
        return view('dashboard_admin.pengajuan.ditolak',['dataPengajuan' => $data]);
    }

    public function pengajuanWarga(){
        $nik = auth()->user()->nik;
        $data = Pengajuan::all()->where('nik', $nik);

        return view('dashboard_warga.pengajuan.index',['dataPengajuan' => $data]);
    }

    public function pengajuanDetail($id){
        $data = Pengajuan::find($id);

        return view('dashboard_warga.pengajuan.detail',['dataPengajuan' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'no_kk' => 'required|numeric|min:16',
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'pendapatan' => 'required|numeric',
            'luas_bangunan' => 'required|numeric',
            'jumlah_kendaraan' => 'required|numeric',
            'jumlah_tanggungan_anak' => 'required|numeric',
            'listrik_rumah' => 'required|numeric',
            'foto_ktp' => 'required',
            'foto_kk' => 'required',
            'surat_pendukung' => 'required',
            'slip_gaji' => 'required',
            'foto_formal' => 'required'
        ]);
        $data = new Pengajuan();
        $data->no_kk = $request->no_kk;
        $data->nik = auth()->user()->nik;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->pekerjaan = $request->pekerjaan;
        $data->pendapatan = $request->pendapatan;
        $data->luas_bangunan = $request->luas_bangunan;
        $data->jumlah_kendaraan = $request->jumlah_kendaraan;
        $data->jumlah_tanggungan_anak = $request->jumlah_tanggungan_anak;
        $data->listrik_rumah = $request->listrik_rumah;
        $data->ktp = $request->file('foto_ktp')->store('data-gambar');
        $data->kk = $request->file('foto_kk')->store('data-gambar');
        $data->surat_pendukung = $request->file('surat_pendukung')->store('data-gambar');
        $data->slip_gaji = $request->file('slip_gaji')->store('data-gambar');
        $data->foto = $request->file('foto_formal')->store('data-gambar');
        $data->save();
        return redirect('/warga/pengajuan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Pengajuan::find($id);

        return view('dashboard_admin.pengajuan.detail',['dataPengajuan' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateTerima(Request $request, String $id)
    {
        $data = Pengajuan::find($id);
        $data->status = 'diterima';
        $data->verifikator = auth()->user()->nama;
        $data->update();

        return redirect('/admin/pengajuan');
    }

    public function updateTolak(Request $request, string $id)
    {
        $data = Pengajuan::find($id);
        $data->status = 'ditolak';
        $data->verifikator = auth()->user()->nama;

        $data->update();

        return redirect('/admin/pengajuan');
    }

}
