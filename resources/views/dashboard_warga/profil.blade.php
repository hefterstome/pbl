@extends('dashboard_warga.warga')

@section('content-warga')

<br>
<div class="container">
    <h2>Di isi profil</h2>
    {{-- <a href ="{{route('produk.create')}}" class="btn btn-success">+ tambah data</a> --}}
{{-- 
    <table class="table table-bordered table-striped" id="tabel-produk">
        <thead>
            <tr>
                <th style="witdh:1%">no.</th>
                <th style="witdh:5%">kode produk</th>
                <th style="witdh:5%">nama produk</th>
                <th style="witdh:5%">kategori</th>
                <th style="witdh:5%">harga</th>
                <th style="witdh:5%">stok</th>
                <th style="witdh:5%">aksi</th>
            </tr>
        </thead> --}}
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