@extends('dashboard_admin.layouts.master_dashboard')
@section('content')
        <div class="container-fluid" style="background: #f3f5fa">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            @yield('content-admin')
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
