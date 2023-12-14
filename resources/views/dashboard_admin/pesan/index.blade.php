@extends('dashboard_admin.admin')

@section('content-admin')

<div class="container">
    <h2>Tabel Data Pesan</h2>
    <table class="table table-bordered table-striped mt-3" id="data-pesan">
        <thead class="text-center">
            <tr>
                <th style="width: 1%">Nomor</th>
                <th style="width: 5%">Nama</th>
                <th style="width: 5%">Email</th>
                <th style="width: 15%">Isi Pesan</th>
                <th style="width: 5%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPesan as $data)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->isi }}</td>
                <td class="text-center">
                    <form action="{{ route('pesan.delete', $data->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection