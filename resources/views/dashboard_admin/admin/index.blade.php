@extends('dashboard_admin.admin')

@section('content-admin')

<div class="container">
    <h2>Tabel Data Admin</h2>
    <a href ="{{route('admin.create')}}" class="btn btn-primary mt-4 mb-2"><i class="fa-solid fa-user-plus"></i> Tambah User</a>
    <table class="table table-bordered table-striped mt-3" id="data-admin">
        <thead class="text-center">
            <tr>
                <th style="width: 1%">No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataAdmin as $data)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $data->nip }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->no_hp }}</td>
                <td class="text-center">
                    {{-- <form action="{{ route('pesan.delete', $data->id) }}" method="post">

                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                        </form> --}}
                        <form action="{{ route('admin.delete', $data->nip) }}" method="post">
                       
                        @csrf
                        {{-- <a href="{{ route('admin.update', $data->nip) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square" style="color: white;"></i></a> --}}
                        <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
