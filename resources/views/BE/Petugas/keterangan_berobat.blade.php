<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keterangan Berobat</title>

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
                            <h3>Keterangan Berobat</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Keterangan Berobat</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="list-group list-group-horizontal-sm mb-1 text-center" role="tablist" style="width: 50%">
                                            <a class="list-group-item list-group-item-action active"
                                                id="list-datapasien-list" data-bs-toggle="list" href="#list-datapasien"
                                                role="tab">Data Pasien</a>
                                            <a class="list-group-item list-group-item-action" id="list-pemeriksaan-list"
                                                data-bs-toggle="list" href="#list-pemeriksaan" role="tab">Pemeriksaan</a>
                                            
                                        </div>

                    <div class="tab-content text-justify">
                     <div class="tab-pane fade show active" id="list-datapasien" role="tabpanel" aria-labelledby="list-datapasien-list">                                      
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
                                                        <label>No Surat</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="search" id="id_pasien" class="form-control"
                                                            name="no_surat" placeholder="No Surat" required disabled>
                                                    </div>
                                                    <div class="col-md-6">
                                                        </div>
                                                    <div class="col-md-2">
                                                        <label>ID Pasien</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="search" id="id_pasien" class="form-control"
                                                            name="id_pasien" placeholder="ID Pasien">
                                                    </div>
                                                    <div class="col-md-6">
                                                        </div>
                                                        
                                                        <div class="col-md-2">
                                                            <label>Nama Pasien</label>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <input type="text" id="nama_pasien" class="form-control"
                                                                name="nama_pasien" placeholder="Nama Pasien" required disabled>
                                                        </div>
                                                        <div class="col-md-6">
                                                            </div>

                                                    <div class="col-md-2">
                                                        <label>Umur</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="umur" class="form-control"
                                                            name="umur" placeholder="Umur" required disabled>
                                                    </div>
                                                    <div class="col-md-6">
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
                                                            name="divisi" placeholder="Perusahaan" required disabled>
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

                                                                
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
                </div>

                <div class="tab-pane fade" id="list-pemeriksaan" role="tabpanel"
                                                aria-labelledby="list-pemeriksaan-list">
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
                                                        <label>Nama Klinik Praktek/Rumah Sakit</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="id_pasien" class="form-control"
                                                            name="id_pasien" placeholder="ID Pasien">
                                                    </div>
                                                    <div class="col-md-6">
                                                    </div>

                                                        <div class="col-md-2">
                                                            <label></label>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <input type="text" id="" class="form-control"
                                                                name="" placeholder="nama rumah sakit">
                                                        </div>
                                                        <div class="col-md-6">
                                                        </div>

                                            <div class="col-md-2">
                                                <label>Klasifikasi Penyakit</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                            <select class="choices form-select">
                                                    <option value="others">Others</option>
                                                    <option value="jantung">Jantung</option>
                                                    <option value="hati">Hati</option>
                                            </select>
                                        </div>
                                            <div class="col-md-6">
                                            </div>

                                            <div class="col-md-2">
                                                <label>Sub-Klasifikasi Penyakit</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                            <select class="choices form-select">
                                                    <option value="others">Others</option>
                                                    <option value="jantung">Jantung</option>
                                                    <option value="hati">Hati</option>
                                            </select>
                                        </div>
                                            <div class="col-md-6">
                                            </div>
                                                <div class="col-md-2">
                                                    <label>Diagnosa</label>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                <select class="choices form-select">
                                                    <option value="others">Others</option>
                                                    <option value="jantung">Jantung</option>
                                                    <option value="hati">Hati</option>
                                                </select>
                                            </div>
                                                <div class="col-md-6">
                                                </div>

                                                <div class="col-md-2">
                                                    <label>Diagnosa Sekunder</label>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                <select class="choices form-select">
                                                    <option value="others">Others</option>
                                                    <option value="jantung">Jantung</option>
                                                    <option value="hati">Hati</option>
                                                </select>
                                            </div>
                                                <div class="col-md-6">
                                                </div>

                                                <div class="col-md-2">
                                                    <label>Pasien diresepkan obat</label>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <textarea type="text" id="pasien_diresep" class="form-control"
                                                        name="pasien_diresep"> </textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Saran untuk Pasien</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <textarea type="text" id="saran_untuk_pasien" class="form-control"
                                                            name="saran_untuk_pasien">Saran untuk Pasien</textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        </div>

                                                        <div class="col-md-2">
                                                            <label>Pasien Harus Kontrol Kembali</label>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> Tidak
                                                            <label for="">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked> Ya
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            </div> 

                                                        <div class="col-md-2">
                                                            <label>Tanggal Pengembalian Surat Rujukan</label>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <input type="date" id="saran_untuk_pasien" class="form-control"
                                                                name="saran_untuk_pasien">
                                                        </div>
                                                        <div class="col-md-6">
                                                            </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </section>
                </div>

                

                

                </div>
                        </div>   
@endsection