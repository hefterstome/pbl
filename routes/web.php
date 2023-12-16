<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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

Route::get('dash-admin', function () {
    return view('dashboard_admin.admin');
});

// Home
Route::get('/', [HomeController::class, 'home'])->name('Home');
// Home: membuka login, login-admin, dan registrasi
Route::get('/login', [HomeController::class, 'login']);
Route::get('/admin', [HomeController::class, 'admin']);
Route::get('/registrasi', [HomeController::class, 'registrasi']);
// Home: menyimpan data registrasi ke table warga
Route::post('/login', [WargaController::class, 'store'])->name('warga.store');

// Dashboard Warga: Navigasi
Route::get('/dash-warga', [WargaController::class, 'warga']);
Route::get('/warga', [WargaController::class, 'home']);
Route::get('/warga/pengajuan', [WargaController::class, 'pengajuan']);
Route::get('/warga/profil', [WargaController::class, 'profil']);
Route::get('/warga/form', [WargaController::class, 'form']);

// Ini sudah selesai
Route::post('/', [PesanController::class, 'store'])->name('pesan.store');
Route::get('/data-pesan', [PesanController::class, 'index']);
Route::post('/pesan/delete/{id}', [PesanController::class, 'destroy'])->name('pesan.delete');

// Data pesan --> Dashboard admin
Route::post('/admin/data-pesan', [PesanController::class, 'store'])->name('pesan.store');
Route::get('/admin/data-pesan', [PesanController::class, 'index']);
Route::post('admin/data-pesan/delete/{id}', [PesanController::class, 'destroy'])->name('pesan.delete');

// Admin
Route::get('/data-admin', [AdminController::class, 'index']);
Route::get('/admin/insert', [AdminController::class, 'create'])->name('admin.create');
Route::post('/data-admin', [AdminController::class, 'store'])->name('admin.store');
Route::post('/admin/delete/{nip}', [AdminController::class, 'destroy'])->name('admin.delete');