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
}
