<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function home1()
    {
        return view('BE/Petugas.home1');
    }
    public function home2()
    {
        return view('BE/Petugas.home2');
    }
    public function obat()
    {
        return view('BE/Petugas.obat');
    }
    public function pemeriksaan()
    {
        return view('BE/Petugas.pemeriksaan');
    }
    public function pemeriksaan_narkoba()
    {
        return view('BE/Petugas.pemeriksaan_narkoba');
    }
    public function rawat_inap_dokter()
    {
        return view('BE/Petugas.rawat_inap_dokter');
    }
    public function rawat_inap_perawat()
    {
        return view('BE/Petugas.rawat_inap_perawat');
    }
    public function rekam_medis()
    {
        return view('BE/Petugas.rekam_medis');
    }
    public function kecelakaan_kerja()
    {
        return view('BE/Petugas.kecelakaan_kerja');
    }
    public function pemantauan_covid()
    {
        return view('BE/Petugas.pemantauan_covid');
    }
    public function permintaan_makanan_pasien()
    {
        return view('BE/Petugas.permintaan_makanan_pasien');
    }
    public function persetujuan_tindakan_medis()
    {
        return view('BE/Petugas.persetujuan_tindakan_medis');
    }
    public function pemantauan_alat_vital()
    {
        return view('BE/Petugas.pemantauan_alat_vital');
    }
    public function keterangan_berobat()
    {
        return view('BE/Petugas.keterangan_berobat');
    }
    public function izin_berobat()
    {
        return view('BE/Petugas.izin_berobat');
    }
    public function izin_istirahat()
    {
        return view('BE/Petugas.izin_istirahat');
    }
    public function surat_rujukan()
    {
        return view('BE/Petugas.surat_rujukan');
    }
    public function keterangan_sehat()
    {
        return view('BE/Petugas.keterangan_sehat');
    }
}