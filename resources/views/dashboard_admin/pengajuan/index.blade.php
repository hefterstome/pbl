@extends('dashboard_admin.admin')

@section('content')

    <h2>Tabel Data Pengajuan</h2>
    <table class="table table-bordered table-striped mt-3" id="data-pengajuan1">
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
                    <form action="" method="post">
                        @csrf
                        <a href="" class="btn btn-primary">Detail</a>
                        <a href="{{ route('Diterima', $data->no_kk) }}" class="btn btn-success">Terima</a>
                        <a href="{{ route('Ditolak', $data->no_kk)  }}" class="btn btn-danger">Tolak</a>
                        
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                      </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container">
    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Konfirmasi aksi?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="" method="post">
            @csrf
            <a href="{{ route('Ditolak', $data->no_kk)  }}" class="btn btn-danger">Tolak</a>
          
          </form>
          </div>
      </div>
    </div>
  </div>
@endsection