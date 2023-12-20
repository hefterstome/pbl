@extends('dashboard_warga.warga')

@section('content-warga')

<div class="container">
    <h2>Halaman Profil</h2>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top img-fluid rounded-circle mt-4" style="height:100px;width:100px;margin:auto;" src="{{ asset('assets/img/profil.png') }}" alt="profile picture">
                    <div class="card-body mt-2 ml-2">
                      <h5 class="card-txt text-left"><small><i class="fas fa-user"></i> {{ $profil->nama }}</small></h5>
                      <p class="card-text text-left"><small><i class="fas fa-envelope"></i> {{ $profil->email }}</small></p>
                      <p class="card-text text-left"><small><i class="fa-solid fa-phone"> </i> {{ $profil->no_hp }}</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                    @endforeach
                  </ul>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
                <form class="border px-4 pt-2 pb-3" method="post" action="{{ route('warga.profil.update',$profil->nik) }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="col-form-label">NIK</label>
                        <input id="nama" readonly type="text" name="nama" placeholder="Masukkan Nama" value="{{ $profil->nik }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input id="nama" type="text" name="nama" placeholder="Masukkan Nama" value="{{ $profil->nama }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input id="email" type="email" name="email" placeholder="Masukkan email" value="{{ $profil->email }}" class="form-control">
                    </div>
                    {{-- <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input id="password" type="password" name="password" placeholder="Masukkan Password Baru" value="{{ $profil->password }}" class="form-control">
                    </div> --}}
                    <div class="form-group">
                        <label for="no_hp" class="col-form-label">Nomor HP</label>
                        <input id="no_hp" type="tel" name="no_hp" placeholder="Masukkan Nomor HP" value="{{ $profil->no_hp }}" class="form-control">
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
