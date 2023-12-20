<div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height:100vh; background: #37517e;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" style="width: 40px; height: 40px;">
        <strong class="fs-4 mx-2">Sinergi Bansos</strong>
    </a>
    <hr>
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column">
            <img src="{{ asset('assets/img/profile.jpg') }}" alt="" width="100" height="100" class="rounded-circle">            
            <strong class="text-white text-center pt-3 fs-4">Admin</strong>
        </div>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/admin/beranda" class="nav-link text-white" aria-current="page">
            Beranda
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/profil" class="nav-link text-white" aria-current="page">
            Profil
            </a>
        </li>
        <li>
            <a href="/admin/pengajuan" class="nav-link text-white">
            Pengajuan
            </a>
        </li>
        <li>
            <a href="/admin/warga" class="nav-link text-white">
            Data Warga
            </a>
        </li>
        <li>
            <a href="/admin/admin" class="nav-link text-white">
            Data Admin
            </a>
        </li>
        <li>
            <a href="/admin/pesan" class="nav-link text-white">
            Data Pesan
            </a>
        </li>
    </ul>
    <br>
    <div class="container">
        <a href="/admin/logout" class="nav-link text-white">
            Logout
            </a>
    </div>
</div>