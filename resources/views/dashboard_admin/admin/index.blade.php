@extends('dashboard_admin.admin')

@section('content-admin')

<div class="container">
    <h2>Tabel Data Admin</h2>
    <table class="table table-bordered table-striped mt-3" id="data-admin">
        <thead class="text-center">
            <tr>
                <th style="width: 1%">No</th>
                <th style="width: 5%">NIP</th>
                <th style="width: 5%">Nama</th>
                <th style="width: 5%">Email</th>
                <th style="width: 5%">Nomor HP</th>
                <th style="width: 5%">Aksi</th>
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
                    <form action="">
                        <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>
                        <button class="btn btn-warning"> <i class="fas fa-edit"></i></button>                        
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection