<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;

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

Route::get('admin', function () {
    return view('dashboard_admin.admin');
});

Route::get('/', [HomeController::class, 'home'])->name('Home');
Route::get('/login', [HomeController::class, 'login'])->name('Login');
Route::post('/', [PesanController::class, 'store'])->name('pesan.store');


