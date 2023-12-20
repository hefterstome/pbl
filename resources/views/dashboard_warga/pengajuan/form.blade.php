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
                    <input class="form-control" type="text" name="no_kk" id="no_kk" required placeholder="Masukkan Nomor KK" >
                </div>
                <div class="form-group">
                    <label for="nama" class="form-label">Nama<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="4" required placeholder="Masukkan Alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="pendapatan" class="form-label">Jumlah Pendapatan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="pendapatan" name="pendapatan" required placeholder="Masukkan Jumlah Pendapatan">
                </div>
                <div class="form-group">
                    <label for="jumlah_kendaraan" class="form-label">Jumlah Kendaraan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="jumlah_kendaraan" name="jumlah_kendaraan" required placeholder="Masukkan Jumlah Kendaraan ">
                </div>            
                <div class="form-group">
                    <label for="foto_kk" class="form-label">Foto KK<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="foto_kk" name="foto_kk" accept="image/*" required placeholder="Pilih File">
                </div>
                <div class="form-group">
                    <label for="slip_gaji" class="form-label">Slip Gaji<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="slip_gaji" name="slip_gaji" accept="image/*,.pdf" required >
                </div>
            </div>
            <div class="col-6">
                {{-- <div class="form-group">
                    <label for="nik">NIK <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nik" id="nik" required placeholder="Masukkan NIK" >
                </div> --}}
                <div class="form-group">
                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                    <label for="pekerjaan" class="form-label">Pekerjaan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required placeholder="Masukkan Pekerjaan">
                </div>
                <div class="form-group">
                    <label for="jumlah_tanggungan_anak" class="form-label">Jumlah Tanggungan Anak<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="jumlah_tanggungan_anak" name="jumlah_tanggungan_anak" required placeholder="Masukkan Jumlah Tanggungan Anak ">
                </div>
                <div class="form-group">
                    <label for="listrik_rumah" class="form-label">Listrik Rumah<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="listrik_rumah" name="listrik_rumah" required placeholder="Masukkan Jumlah Tegangan Listrik Rumah">
                </div>
                <div class="form-group">
                    <label for="luas_bangunan" class="form-label">Luas Bangunan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="luas_bangunan" name="luas_bangunan" required placeholder="Masukkan Luas Bangunan">
                </div>
                <div class="form-group">
                    <label for="foto_ktp" class="form-label">Foto KTP<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="foto_formal" class="form-label">Foto Formal<span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="foto_formal" name="foto_formal" accept="image/*" required>
                </div>
            </div>
        </div>
        <div class="form-group col-12">
            <label for="surat_pendukung" class="form-label">Surat Pendukung<span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="surat_pendukung" name="surat_pendukung" accept="image/*" required>
        </div> 
        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
</div>

@endsection