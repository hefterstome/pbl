@extends('dashboard_warga.warga')

@section('content')
<div class="container">
    <div class="d-flex flex-row pt-4 align-items-end">
        <h2 class="col-6">Detail Pengajuan</h2>
            <div class="d-flex col-6 justify-content-end">
                <a href="/warga/pengajuan" class="btn btn-primary">Kembali</a>
            </div>
    </div>
    <div class="row g-2">
        <div class="col-6">
            <div class="p-1">
                <b>Nomer KK</b>
                <p>{{ $dataPengajuan->no_kk }}</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>NIK</b>
                <p>{{ $dataPengajuan->nik}}</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Nama</b>
                <p>{{ $dataPengajuan->nama }}</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Email</b>
                <p>{{ $dataPengajuan->email }}</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Alamat</b>
                <p>{{ $dataPengajuan->alamat }}</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Pekerjaan</b>
                <p>{{ $dataPengajuan->pekerjaan }}</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Pendapatan</b>
                <p>Rp. {{ number_format($dataPengajuan->Pendapatan, 0,',','.') }}</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Luas Bangunan</b>
                <p>{{ $dataPengajuan->luas_bangunan }} m<sup>2</sup></p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Jumlah Kendaraan</b>
                <p>{{ $dataPengajuan->jumlah_kendaraan }}</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Tanggungan Anak</b>
                <p>{{ $dataPengajuan->jumlah_tanggungan_anak }}</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Daya Listrik Rumah</b>
                <p>{{ $dataPengajuan->listrik_rumah }} VA</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Status</b>
                <p>{{ $dataPengajuan->status }}</p>
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>KTP</b>
                <br>
                <img src="{{ asset('storage/'. $dataPengajuan->ktp)}}" alt="KTP" width="300" height="175">
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>KK</b>
                <br>
                <img src="{{ asset('storage/'. $dataPengajuan->kk)}}" alt="KK" width="300" height="175">
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Surat Pendukung</b>
                <br>
                <img src="{{ asset('storage/'. $dataPengajuan->surat_pendukung)}}" alt="Surat Pendukung" width="300" height="175">
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Slip Gaji</b>
                <br>
                <img src="{{ asset('storage/'. $dataPengajuan->slip_gaji)}}" alt="Slip Gaji" width="300" height="175">
            </div>
        </div>
        <div class="col-6">
            <div class="p-1">
                <b>Foto</b>
                <br>
                <img src="{{ asset('storage/'. $dataPengajuan->foto)}}" alt="Foto" width="300" height="175">
            </div>
        </div>
    </div>
</div>
@endsection