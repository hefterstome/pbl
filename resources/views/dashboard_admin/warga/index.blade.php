@extends('dashboard_admin.admin')

@section('content-admin')

<div class="container">
    <h2>Tabel Data Warga</h2>
    <table class="table table-bordered table-striped mt-3" id="data-warga">
        <thead class="text-center">
            <tr>
                <th style="width: 1%">Nomor</th>
                <th style="width: 5%">NIK</th>
                <th style="width: 5%">Nama</th>
                <th style="width: 5%">Email</th>
                <!-- <th style="width: 5%">Password</th> -->
                <th style="width: 5%">No HP</th>
                <th style="width: 5%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataWarga as $data)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $data->nik }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->email }}</td>
                <!-- <td>{{ $data->password }}</td> -->
                <td>{{ $data->no_hp }}</td>
                <td class="text-center">
                    <form action="{{ route('warga.delete', $data->nik) }}" method="post">
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