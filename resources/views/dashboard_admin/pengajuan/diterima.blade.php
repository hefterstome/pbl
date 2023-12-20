@extends('dashboard_admin.admin')

@section('content')

<div class="container">
    <h2>Tabel Data Pengajuan</h2>
    <table class="table table-bordered table-striped mt-3" id="data-warga">
        <thead>
            <tr>
                <th style="width: 1%">Nomor</th>
                <th style="width: 5%">No_KK</th>
                <th style="width: 5%">Nik</th>
                <th style="width: 5%">Nama</th>
                <th style="width: 5%">Alamat</th>
                <th style="width: 5%">Status</th>
                <th style="width: 7%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPengajuan as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->no_kk }}</td>
                <td>{{ $data->nik }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->status }}</td>
                <td class="text-center">
                        @csrf
                        <a href="{{ route('pengajuan.detail', $data->no_kk) }}" class="btn btn-primary">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection