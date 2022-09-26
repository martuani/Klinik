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
Route::get('/add/data/petugas', [AdminController::class, 'addpetugas'])->name('admin.adddatapetugas');
Route::post('/add/data/petugas', [AdminController::class, 'tambahpetugas'])->name('admin.tambahdatapetugas');

Route::middleware(['BeforeAuth'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('Auth.login');
    Route::post('/login', [AuthController::class, 'masuk'])->name('Auth.masuk');
    Route::get('/register', [AuthController::class, 'register'])->name('Auth.register');

});

Route::prefix('pemeriksaan')->group(function () {
    Route::get('/pemeriksaan/narkoba', [PetugasController::class, 'pemeriksaan_narkoba'])->name('petugas.pemeriksaan_narkoba');
});

Route::get('/index1', [AdminController::class, 'index1'])->name('admin.index1');
Route::get('home1', [PetugasController::class, 'home1'])->name('petugas.home1');
Route::get('/home2', [PetugasController::class, 'home2'])->name('petugas.home2');
Route::get('/obat', [PetugasController::class, 'obat'])->name('petugas.obat');
Route::get('/pemeriksaan', [PetugasController::class, 'pemeriksaan'])->name('petugas.pemeriksaan');

Route::get('/rawat/inap/dokter', [PetugasController::class, 'rawat_inap_dokter'])->name('petugas.rawat_inap_dokter');
Route::get('/rawat/inap/perawat', [PetugasController::class, 'rawat_inap_perawat'])->name('petugas.rawat_inap_perawat');
Route::get('/rekammedis', [PetugasController::class, 'rekam_medis'])->name('petugas.rekam_medis');
Route::get('/kecelakaankerja', [PetugasController::class, 'kecelakaan_kerja'])->name('petugas.kecelakaan_kerja');
Route::get('/pemantauancovid', [PetugasController::class, 'pemantauan_covid'])->name('petugas.pemantauan_covid');
Route::get('/permintaan/makananpasien', [PetugasController::class, 'permintaan_makanan_pasien'])->name('petugas.permintaan_makanan_pasien');
Route::get('/persetujuan/tindakanmedis', [PetugasController::class, 'persetujuan_tindakan_medis'])->name('petugas.persetujuan_tindakan_medis');
Route::get('/pemantauan/alatvital', [PetugasController::class, 'pemantauan_alat_vital'])->name('petugas.pemantauan_alat_vital');
Route::get('/keterangan/berobat', [PetugasController::class, 'keterangan_berobat'])->name('petugas.keterangan_berobat');
Route::get('/izin/berobat', [PetugasController::class, 'izin_berobat'])->name('petugas.izin_berobat');
Route::get('/izin/istirahat', [PetugasController::class, 'izin_istirahat'])->name('petugas.izin_istirahat');
Route::get('/surat/rujukan', [PetugasController::class, 'surat_rujukan'])->name('petugas.surat_rujukan');
Route::get('/keterangan/sehat', [PetugasController::class, 'keterangan_sehat'])->name('petugas.keterangan_sehat');