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


Route::get('/', [HomeController::class, 'home'])->name('Home');
Route::get('/login', [HomeController::class, 'login']);
Route::get('/admin', [HomeController::class, 'admin']);
Route::get('/registrasi', [HomeController::class, 'registrasi'])->name('Registrasi');

Route::get('/warga', [WargaController::class, 'warga']);
Route::get('/', [WargaController::class, 'home']);
Route::get('/warga-pengajuan', [WargaController::class, 'pengajuan']);
Route::get('/warga-profil', [WargaController::class, 'profil']);
Route::get('/warga-form-pengajuan', [WargaController::class, 'form']);

// Ini sudah selesai
Route::post('/', [PesanController::class, 'store'])->name('pesan.store');
Route::get('/data-pesan', [PesanController::class, 'index']);
Route::post('/pesan/delete/{id}', [PesanController::class, 'destroy'])->name('pesan.delete');

Route::post('/', [AdminController::class, 'store'])->name('data_warga.store');
Route::get('/data-warga', [AdminController::class, 'index']);
Route::post('/data_warga/delete/{nik}', [AdminController::class, 'destroy'])->name('data_warga.delete');


