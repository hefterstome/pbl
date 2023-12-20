@extends('dashboard_admin.admin')

@section('content-admin')
<div class="container">
    <h2>Formulir Tambah User Admin</h2>
    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data"> 
        @csrf
        <div class="form-row mt-4">
            <div class="form-group row">
                <label for="nip" class="col-2 mb-3 col-form-label">NIP<span class="text-danger">*</span></label>
                <div class="col-10">
                    <input class="form-control @error('nip') is-invalid @enderror" type="text" name="nip" id="nip" placeholder="Masukkan NIP">
                    @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-2 mb-3 col-form-label">Nama<span class="text-danger">*</span></label>
                <div class="col-10">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-2 mb-3 col-form-label">Email<span class="text-danger">*</span></label>
                <div class="col-10">
                    <input type="" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-2 mb-3 col-form-label">Password<span class="text-danger">*</span></label>
                <div class="col-10">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-2 mb-3 col-form-label">Nomor HP<span class="text-danger">*</span></label>
                <div class="col-10">
                    <input type="tel" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" placeholder="Masukkan Nomor HP">
                    @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <a href="/admin/data-admin" class="btn btn-secondary mx-2">Kembali</a>
                <button type="submit" class="btn btn-primary mx-2">Kirim</button>
            </div>
        </div>
    </form>

</div>

@endsection
    