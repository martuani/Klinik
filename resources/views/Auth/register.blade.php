<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset ('assets/images/favicon.svg" type="image/x-icon')}}">
</head>
@extends('BE.layouts.sidebar')
@section('content')

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Pendaftaran Pasien</h3>
                            <p class="text-subtitle text-muted">Data Pasien</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('Auth.register') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Pendaftaran Pasien</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                

                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Kategori Pasien</label>
                                                        <select class="choices form-select">
                                                            <option value="romboid">MIP</option>
                                                            <option value="trapeze">MKP</option>
                                                            <option value="triangle">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="umur">Umur</label>
                                                        <input type="text" id="umur" class="form-control"
                                                            name="umur" placeholder="Umur">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">NIK</label>
                                                        <input type="text" id="nik" class="form-control"
                                                            placeholder="NIK" name="nik">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> Laki-Laki <br>
                                                    <label for="">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked> Perempuan
                                                    </label>
                                                </div>
                                                

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="perusahaan">Perusahaan</label>
                                                        <input type="text" id="perusahaan" class="form-control"
                                                            name="perusahaan" placeholder="perusahaan">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="alamat_pasien">Alamat</label>
                                                        <textarea type="text" id="alamat_pasien" class="form-control"
                                                            name="alamat_pasien" placeholder="Alamat"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="divisi">Divisi</label>
                                                        <select class="choices form-select">
                                                            <option value="romboid">IT</option>
                                                            <option value="trapeze">HSE</option>
                                                            <option value="triangle">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        
                                                    </select>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="alamat_kamar">Alamat Kamar/ Nomor Mess</label>
                                                        <input type="text" id="alamat_kamar" class="form-control"
                                                            name="alamat_kamar" placeholder="Alamat Kamar/ Nomor Mess">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="jabatan">Jabatan</label>
                                                        <select class="choices form-select">
                                                        <optgroup label="Figures">
                                                            <option value="romboid">HRD</option>
                                                            <option value="trapeze">Karyawan</option>
                                                            <option value="triangle">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        </optgroup>
                                                        <optgroup label="Colors">
                                                            <option value="red">Red</option>
                                                            <option value="green">Green</option>
                                                            <option value="blue">Blue</option>
                                                            <option value="purple">Purple</option>
                                                        </optgroup>
                                                    </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="pekerjaan">Pekerjaan</label>
                                                        <input type="text" id="pekerjaan" class="form-control"
                                                            name="pekerjaan" placeholder="Pekerjaan">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nama_pasien">Nama Pasien</label>
                                                        <input type="text" id="nama_pasien" class="form-control"
                                                            name="nama_pasien" placeholder="Nama Pasein">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nomor_telepon">Nomor Telepon</label>
                                                        <input type="number" id="nomor_telepon" class="form-control"
                                                            name="nomor_telepon" placeholder="Nomor Telepon">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="tempat_lahir">Tempat Lahir</label>
                                                        <input type="text" id="tempat_lahir" class="form-control"
                                                            name="tempat_lahir" placeholder="Tempat Lahir">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" id="email" class="form-control"
                                                            name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                                        <input type="date" id="tanggal_lahir" class="form-control"
                                                            name="tanggal_lahir">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="alergi">Alergi Obat</label>
                                                        
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" id="ya">
                                                        <label for="ya">Ya</label>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" id="tidak">
                                                        <label for="tidak">Tidak</label>
                                                    </div>
                                                </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Alergi Obat</label>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> Ya <br>
                                                    <label for="">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked> Tidak
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Hamil Menyusui</label>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> Ya <br>
                                                    <label for="">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked> Tidak
                                                    </label>
                                                </div>

                                                
                                                    </div>
                                                </div>

                                <div class="card-header">
                                    <h4 class="card-title">Data Keluarga</h4>
                                </div>
                                <div class="col-8">
                                <div class="form-group">
                                                        <label for="jabatan">Jabatan</label>
                                                        <select class="choices form-select">
                                                        <optgroup label="Figures">
                                                            <option value="romboid">HRD</option>
                                                            <option value="trapeze">Karyawan</option>
                                                            <option value="triangle">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        </optgroup>
                                                    </select>
                                                    </div>                
                                        </div>
                                                <div class="col-8">
                                                        <div class="form-group">
                                                            <label for="nama">Nama</label>
                                                            <input type="nama" id="nama_keluarga"
                                                                class="form-control" name="nama_keluarga"
                                                                placeholder="Nama">
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <label for="alamat_keluarga">Alamat</label>
                                                            <input type="alamat_keluarga" id="alamat_keluarga"
                                                                class="form-control" name="alamat_keluarga"
                                                                placeholder="Nama">
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <label for="pekerjaan">Pekerjaan</label>
                                                            <input type="pekerjaan" id="pekerjaan"
                                                                class="form-control" name="pekerjaan"
                                                                placeholder="pekerjaan">
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <label for="no_telpon">Nomor Telepon</label>
                                                            <input type="no_telpon" id="no_telpon"
                                                                class="form-control" name="no_telpon"
                                                                placeholder="no_telpon">
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" id="email"
                                                                class="form-control" name="email"
                                                                placeholder="email">
                                                        </div>
                                                    </div>
                                                
                                                <div class="col-6 d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
                <!-- // Basic multiple Column Form section end -->
                
            </div>

            @endsection