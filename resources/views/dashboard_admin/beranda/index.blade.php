@extends('dashboard_admin.admin')

@section('content-admin')

<div class="container">
    <h2>Beranda Admin</h2>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Warga</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\Warga::countWarga()}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                    <div class="col-auto mt-4">
                        <a href="/admin/warga" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Pesan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\Pesan::countPesan()}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelopes-bulk fa-2x text-gray-300"></i>
                    </div>
                    <div class="col-auto mt-4">
                        <a href="/admin/pesan" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-4 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Pengajuan</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{\App\Models\Pengajuan::countPengajuan()}}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-check-to-slot fa-2x text-gray-300"></i>
                    </div>
                    <div class="col-auto mt-4">
                        <a href="/admin/pengajuan" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
   </div>
</div>

@endsection
