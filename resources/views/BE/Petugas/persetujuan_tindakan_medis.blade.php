<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persetujuan Tindakan Medis</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset ('assets/images/favicon.svg" type="image/x-icon')}}">
</head>

@extends('BE.layouts.dokter')
@section('content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Persetujuan Tindakan Medis</h3>
                            <p class="text-subtitle text-muted">Data Mitra</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Persetujuan Tindakan Medis</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                    <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label>ID Pasien</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="seacrh" id="id_pasien" class="form-control"
                                                            name="id_pasien" placeholder="No Surat">
                                                    </div>
                                                    <div class="col-md-2">
                                                        
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                    </div>
                                                    <br>
                                                    <div class="col-md-2">
                                                        <label>No Rekam Medis</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="no_rekam_medis" class="form-control"
                                                            name="no_rekam_medis" placeholder="" required disabled>
                                                    </div> 
                                                    <div class="col-md-2">
                                                        
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                            
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label>Nama Pasien</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="nama_pasien" class="form-control"
                                                            name="nama_pasien"  required disabled>
                                                    </div>

                                                    <div class="col-md-2">               
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label>Tanggal Lahir</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="tanggal_lahir" class="form-control"
                                                            name="tanggal_lahir"  required disabled>
                                                    </div>
                                                        <div class="col-md-2">
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label>Umur</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="umur" class="form-control"
                                                            name="umur"  required disabled>
                                                    </div>
                                                        <div class="col-md-2">
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label>Pekerjaan</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="pekerjaan" class="form-control"
                                                            name="pekerjaan" placeholder="Pekerjaan" required disabled>
                                                    </div>
                                                    <div class="col-md-6">
                                                        </div>
                                                    <div class="col-md-2">
                                                        <label>Perusahaan</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="perusahaan" class="form-control"
                                                            name="perusahaan" placeholder="Perusahaan" required disabled>
                                                    </div>
                                                    <div class="col-md-6">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Divisi</label>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <input type="text" id="divisi" class="form-control"
                                                                name="divisi" placeholder="Divisi" required disabled>
                                                        </div>
                                                        <div class="col-md-6">
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label>Jabatan</label>
                                                            </div>
                                                            <div class="col-md-4 form-group">
                                                                <input type="text" id="jabatan" class="form-control"
                                                                    name="jabatan" placeholder="Jabatan" required disabled>
                                                            </div>
                                                            <div class="col-md-6">
                                                                </div>

                                                                

                                                                    <div class="col-md-2">
                                                                        <label>Riwayat Perjalanan Penyakit</label>
                                                                    </div>
                                                                    <div class="col-md-4 form-group">
                                                                        <textarea type="text" id="permintaan_makanan" class="form-control"
                                                                            name="permintaan_makanan" ></textarea>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label>Hasil Pernyataan</label>
                                                                        </div>
                                                                        <div class="col-md-4 form-group">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> Setuju
                                                                            <label for="">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked> Tidak Setuju
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            </div> 
                                                                                    

                                                                                        <div class="col-md-2">
                                                                                            <label>Dokter Yang Memeriksa</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 form-group">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> Tanda Tangan
                                                                                            <label for="">
                                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked> Tanda Tangan Tersimpan
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            </div> 

                                                                                            <div class="col-md-2">
                                                                                                
                                                                                            </div>
                                                                                            <div class="col-md-4 form-group">
                                                                                                <textarea type="text" id="tanda_tangan" class="form-control"
                                                                                                    name="tanda_tangan"  style="width: 100%"></textarea>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                </div> 
                                                    

                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>

@endsection