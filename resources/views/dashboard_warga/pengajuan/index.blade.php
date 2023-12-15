@extends('dashboard_warga.warga')

@section('content-warga')

<div class="container">
    <h2>Tabel Data Pengajuan</h2>
    {{-- <a href ="{{route('produk.create')}}" class="btn btn-success">+ tambah data</a> --}}
    <table class="table table-bordered table-striped mt-3" id="tabel-produk">
        <thead class="text-center">
            <tr>
                <th>No KK</th>
                <th>Verifikator</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>No KK1</td>
                <td>Verifikator1</td>
                <td>No NI1</td>
                <td>Nama1</td>
                <td>Diterima</td>
                <td class="text-center">
                    <a href="" class="btn btn-primary">Detail</a>
                </td>
            </tr>
        </tbody>
        {{-- <tbody>
            @foreach ($dataproduk as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_produk}}</td>
                <td>{{$data->kategori->nama_kategori}}</td>
                <td>{{number_format($data->harga,0,',','.')}}</td>
                <td>{{$data->stock}}</td>
                <td>
                    <form action="{{route('produk.delete', $data->id)}}" method="post">@csrf 
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Tindakan
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a href="{{route('produk.update', $data->id)}}" class="btn btn-warning">edit</a>
                        <button class="btn btn-danger">delete</button>
                        </ul>
                    </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody> --}}
    </table>
</div>
@endsection