<?php

use App\Http\Controllers\PengajuanController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Dashboard Warga: Navigasi Sidebar
// Profil dan ubah profil
Route::middleware(['auth:warga'])->group(function () {
    Route::get('/warga/profil', [WargaController::class, 'profil'])->name('warga.profil');
    Route::post('warga/profil/update/{nik}', [WargaController::class, 'profilUpdate'])->name('warga.profil.update');
    
    // Route::get('/warga/beranda', [WargaController::class, 'beranda']);
    Route::get('/warga/form', [WargaController::class, 'form']);
    Route::get('/warga/logout', [WargaController::class, 'logout'])->name('logout');
    
    Route::get('/warga/pengajuan', [PengajuanController::class, 'pengajuanWarga']);
    Route::post('warga/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');
    Route::get('warga/pengajuan/detail{kk}', [PengajuanController::class, 'pengajuanDetail'])->name('pengajuan.detailwarga');
});

// Halaman Utama
Route::get('/', [HomeController::class, 'home']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/admin', [HomeController::class, 'admin']);

Route::post('/warga/profil', [LoginController::class, 'login'])->name('login');

Route::post('/login/admin', [LoginController::class, 'loginAdmin'])->name('login.admin');

Route::get('/registrasi', [HomeController::class, 'registrasi']);
Route::post('/registrasi', [WargaController::class, 'store'])->name('warga.store');


// Profil dan ubah profil
Route::middleware(['auth:admin'])->group(function () {
    
    Route::get('admin/beranda', [AdminController::class, 'beranda']);
    Route::get('admin/profil', [AdminController::class, 'profil'])->name('admin.profil');
    Route::post('admin/profil/update/{nip}', [AdminController::class, 'profilUpdate'])->name('admin.profil.update');

    Route::get('admin/admin', [AdminController::class, 'index']);
    Route::post('admin/admin', [AdminController::class, 'store'])->name('admin.store');
    Route::get('admin/admin/insert', [AdminController::class, 'create'])->name('admin.create');
    Route::post('admin/admin/delete/{nip}', [AdminController::class, 'destroy'])->name('admin.delete');
    
    Route::post('/admin/pesan', [PesanController::class, 'store'])->name('pesan.store');
    Route::get('/admin/pesan', [PesanController::class, 'index']);
    Route::post('admin/pesan/delete/{id}', [PesanController::class, 'destroy'])->name('pesan.delete');

    // Route::post('admin/warga', [WargaController::class, 'store'])->name('warga.store1');
    Route::get('admin/warga', [WargaController::class, 'index']);
    Route::post('admin/warga/delete/{nik}', [WargaController::class, 'destroy'])->name('warga.delete');

    Route::get('admin/pengajuan', [PengajuanController::class, 'index']);
    Route::get('admin/pengajuan/terima', [PengajuanController::class, 'dataDiterima']);
    Route::get('admin/pengajuan/tolak', [PengajuanController::class, 'dataDitolak']);
    Route::get('admin/pengajuan/terima/{kk}', [PengajuanController::class, 'updateTerima'])->name('Diterima');
    Route::get('admin/pengajuan/tolak/{kk}', [PengajuanController::class, 'updateTolak'])->name('Ditolak');
    Route::get('admin/pengajuan/detail/{kk}', [PengajuanController::class, 'show'])->name('pengajuan.detail');

    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');
});

// Data pesan --> Dashboard admin
// Route::get('/admin/edit/{nip}', [AdminController::class, 'edit'])->name('admin.edit');
// Route::post('/admin/edit/{nip}', [AdminController::class, 'update'])->name('admin.update');

// Data Warga --> Dashboard admin
