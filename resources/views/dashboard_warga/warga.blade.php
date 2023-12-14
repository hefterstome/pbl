@extends('dashboard_warga.layouts.master_dashboard_warga')
@section('content')
        <div class="container-fluid" style="background: #f3f5fa">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header">Dashboard Warga</div>
                        <div class="card-body">
                            @yield('content-warga')
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection