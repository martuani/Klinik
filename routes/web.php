<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('FE.index');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/index1', [AdminController::class, 'index1'])->name('admin.index1');
Route::get('home1', [PetugasController::class, 'home1'])->name('petugas.home1');
Route::get('/home2', [PetugasController::class, 'home2'])->name('petugas.home2');
Route::get('/obat', [PetugasController::class, 'obat'])->name('petugas.obat');
Route::get('/pemeriksaan', [PetugasController::class, 'pemeriksaan'])->name('petugas.pemeriksaan');
Route::get('/pemeriksaan/narkoba', [PetugasController::class, 'pemeriksaan_narkoba'])->name('petugas.pemeriksaan_narkoba');
Route::get('/rawat/inap/dokter', [PetugasController::class, 'rawat_inap_dokter'])->name('petugas.rawat_inap_dokter');
