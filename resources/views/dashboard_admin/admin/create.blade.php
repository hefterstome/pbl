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
                    <input class="form-control" type="text" name="nip" id="nip" required placeholder="Masukkan NIP">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-2 mb-3 col-form-label">Nama<span class="text-danger">*</span></label>
                <div class="col-10">
                    <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-2 mb-3 col-form-label">Email<span class="text-danger">*</span></label>
                <div class="col-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-2 mb-3 col-form-label">Password<span class="text-danger">*</span></label>
                <div class="col-10">
                    <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password">
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-2 mb-3 col-form-label">Nomor HP<span class="text-danger">*</span></label>
                <div class="col-10">
                    <input type="tel" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor HP">
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
    