@extends('dashboard_admin.admin')

@section('content-admin')

<div class="container">
    <h2>Halaman Profil</h2>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top img-fluid rounded-circle mt-4" style="height:100px;width:100px;margin:auto;" src="{{ asset('assets/img/profil.png') }}" alt="profile picture">
                    <div class="card-body mt-2 ml-2">
                      <h5 class="card-txt text-left"><small><i class="fas fa-user"></i> {{ $data->nama }}</small></h5>
                      <p class="card-text text-left"><small><i class="fas fa-envelope"></i> {{ $data->email }}</small></p>
                      <p class="card-text text-left"><small><i class="fa-solid fa-phone"> </i> {{ $data->no_hp }}</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form class="border px-4 pt-2 pb-3" method="post" action="{{ route('admin.profil.update',$data->nip) }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="col-form-label">NIP</label>
                        <input id="nama" disabled type="text" name="nama" placeholder="Masukkan Nama Baru" value="{{ $data->nip }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input id="nama" type="text" name="nama" placeholder="Masukkan Nama Baru" value="{{ $data->nama }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input id="email" disabled type="email" name="email" placeholder="Masukkan Email Baru" value="{{ $data->email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input id="password" type="password" name="password" placeholder="Masukkan Password Baru" value="{{ $data->password }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_hp" class="col-form-label">Nomor HP</label>
                        <input id="no_hp" type="tel" name="no_hp" placeholder="Masukkan Nomor HP Baru" value="{{ $data->no_hp }}" class="form-control">
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
   </div>
</div>

@endsection
