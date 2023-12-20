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
                      <h5 class="card-txt text-left"><small><i class="fas fa-user"></i> {{ $profil->nama }}</small></h5>
                      <p class="card-text text-left"><small><i class="fas fa-envelope"></i> {{ $profil->email }}</small></p>
                      <p class="card-text text-left"><small><i class="fa-solid fa-phone"> </i> {{ $profil->no_hp }}</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form class="border px-4 pt-2 pb-3" method="post" action="{{ route('admin.profil.update',$profil->nip) }}">
                    @csrf
                    <div class="form-group">
                        <label for="nik" class="col-form-label">NIK</label>
                        <input id="nik" disabled type="text" name="nik" placeholder="Masukkan Nama" value="{{ $profil->nip }}" class="form-control @error('nik') is-invalid @enderror">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input id="nama" type="text" name="nama" placeholder="Masukkan Nama" value="{{ $profil->nama }}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input id="email" type="" name="email" placeholder="Masukkan email" value="{{ $profil->email }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror 
                    </div>
                    {{-- <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input id="password" type="password" name="password" placeholder="Masukkan Password Baru" value="{{ $profil->password }}" class="form-control @error('no_kk') is-invalid @enderror">
                    </div> --}}
                    <div class="form-group">
                        <label for="no_hp" class="col-form-label">Nomor HP</label>
                        <input id="no_hp" type="tel" name="no_hp" placeholder="Masukkan Nomor HP" value="{{ $profil->no_hp }}" class="form-control @error('no_hp') is-invalid @enderror">
                        @error('no_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror 
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
