<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\WargaController;

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
Route::get('/login', [HomeController::class, 'login'])->name('Login');
Route::get('/admin', [HomeController::class, 'admin'])->name('Login Admin');
Route::get('/registrasi', [HomeController::class, 'registrasi'])->name('Registrasi');


Route::get('/warga', [WargaController::class, 'warga'])->name('Warga');
Route::get('/warga-pengajuan', [WargaController::class, 'pengajuan'])->name('Data Pengajuan');
Route::get('/warga-profil', [WargaController::class, 'profil'])->name('Profil Warga');
Route::get('/warga-form-pengajuan', [WargaController::class, 'form'])->name('Formulir Pengajuan');

Route::post('/', [PesanController::class, 'store'])->name('pesan.store');


