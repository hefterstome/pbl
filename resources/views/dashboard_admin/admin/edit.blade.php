@extends('dashboard_admin.admin')
@section('content-admin')

<div class="container">
    <h2>Edit Data Admin</h2>
    <form action="{{ route('admin.edit', $data->nip) }}" method="POST" > 
        @csrf
        <div class="form-row mt-4">
            <div class="form-group row">
                <label for="nip">NIP<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nip" id="nip" 
                value="{{$data->nip}}">  
            </div>
            <div class="form-group row">
                <label for="nama">Nama<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nama" name="nama"
                value="{{$data->nama}}">
            </div>
            <div class="form-group row">
                <label for="email">Email<span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email"
                value="{{$data->email}}">
            </div>
            <!-- <div class="form-group row">
                <label for="password">Password<span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="password" name="password"
                value="{{$data->password}}">
            </div> -->
            <div class="form-group row">
                <label for="no_hp">Nomor HP<span class="text-danger">*</span></label>
                <input type="tel" class="form-control" id="no_hp" name="no_hp"
                value="{{$data->no_hp}}">
            </div>
            <br>
            <div class="d-flex justify-content-end mt-2">
                <a href="/data-admin" class="btn btn-secondary mx-2">Kembali</a>
                <button type="submit" class="btn btn-primary mx-2">Ubah</button>
            </div>
        </div>
    </form>
</div>

@endsection
    
