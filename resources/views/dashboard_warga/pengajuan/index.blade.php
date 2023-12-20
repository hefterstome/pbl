@extends('dashboard_warga.warga')

@section('content-warga')

<div class="container">
    <h2>Tabel Data Pengajuan</h2>
    <table class="table table-bordered table-striped mt-3 text-center" id="tabel-produk">
        <thead>
            <tr>
                <th>No KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <tbody>
            @foreach ($dataPengajuan as $data)
            <tr>
                <td>{{ $data->no_kk }}</td>
                <td>{{ $data->nik }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->status }}</td>
                <td>
                    <a href="/warga/pengajuan/detail" class="btn btn-success">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection