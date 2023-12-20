@extends('dashboard_warga.warga')

@section('content-warga')
<div class="container">
    <h2>Form Pengajuan BLT</h2>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <form action="{{ route('pengajuan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="code">Nomor KK <span class="text-danger">*</span></label>
                    <input class="form-control @error('no_kk') is-invalid @enderror" type="text" name="no_kk" id="no_kk" placeholder="Masukkan Nomor KK" >
                    @error('no_kk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="nama" class="form-label">Nama<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="4" placeholder="Masukkan Alamat"></textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="pendapatan" class="form-label">Jumlah Pendapatan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('pendapatan') is-invalid @enderror" id="pendapatan" name="pendapatan" placeholder="Masukkan Jumlah Pendapatan">
                    @error('pendapatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="jumlah_kendaraan" class="form-label">Jumlah Kendaraan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('jumlah_kendaraan') is-invalid @enderror" id="jumlah_kendaraan" name="jumlah_kendaraan" placeholder="Masukkan Jumlah Kendaraan ">
                    @error('jumlah_kendaraan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>            
                <div class="form-group">
                    <label for="foto_kk" class="form-label">Foto KK<span class="text-danger">*</span></label>
                    <input type="file" class="form-control @error('foto_kk') is-invalid @enderror" id="foto_kk" name="foto_kk" accept="image/*" placeholder="Pilih File">
                    @error('foto_kk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="slip_gaji" class="form-label">Slip Gaji<span class="text-danger">*</span></label>
                    <input type="file" class="form-control @error('slip_gaji') is-invalid @enderror" id="slip_gaji" name="slip_gaji" accept="image/*,.pdf" >
                    @error('slip_gaji')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
            </div>
            <div class="col-6">
                {{-- <div class="form-group">
                    <label for="nik">NIK <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nik" id="nik" placeholder="Masukkan NIK" >                   
                </div> --}}
                <div class="form-group">
                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="pekerjaan" class="form-label">Pekerjaan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan">
                    @error('pekerjaan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="jumlah_tanggungan_anak" class="form-label">Jumlah Tanggungan Anak<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('jumlah_tanggungan_anak') is-invalid @enderror" id="jumlah_tanggungan_anak" name="jumlah_tanggungan_anak" placeholder="Masukkan Jumlah Tanggungan Anak ">
                    @error('jumlah_tanggungan_anak')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="listrik_rumah" class="form-label">Listrik Rumah<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('listrik_rumah') is-invalid @enderror" id="listrik_rumah" name="listrik_rumah" placeholder="Masukkan Jumlah Tegangan Listrik Rumah">
                    @error('listrik_rumah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="luas_bangunan" class="form-label">Luas Bangunan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('luas_bangunan') is-invalid @enderror" id="luas_bangunan" name="luas_bangunan" placeholder="Masukkan Luas Bangunan">
                    @error('luas_bangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="foto_ktp" class="form-label">Foto KTP<span class="text-danger">*</span></label>
                    <input type="file" class="form-control @error('foto_ktp') is-invalid @enderror" id="foto_ktp" name="foto_ktp" accept="image/*">
                    @error('foto_ktp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
                <div class="form-group">
                    <label for="foto_formal" class="form-label">Foto Formal<span class="text-danger">*</span></label>
                    <input type="file" class="form-control @error('foto_formal') is-invalid @enderror" id="foto_formal" name="foto_formal" accept="image/*">
                    @error('foto_formal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror                    
                </div>
            </div>
        </div>
        <div class="form-group col-12">
            <label for="surat_pendukung" class="form-label">Surat Pendukung<span class="text-danger">*</span></label>
            <input type="file" class="form-control @error('surat_pendukung') is-invalid @enderror" id="surat_pendukung" name="surat_pendukung" accept="image/*">
            @error('surat_pendukung')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror  
        </div> 
        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
</div>

@endsection