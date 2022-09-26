<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data Petugas</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset ('mazer-main/dist/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset ('assets/images/favicon.svg" type="image/x-icon')}}">
</head>
@extends('BE.layouts.admin')
@section('content')

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Pendaftaran Pasien</h3>
                            <p class="text-subtitle text-muted">Data Petugas</p>
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
                                    <h4 class="card-title">Masukkan Data</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="/add/data/petugas" method="post">
                                            @csrf 
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="petugas_nama">Petugas Nama</label>
                                                        <input type="text" id="petugas_nama" class="form-control"
                                                             name="petugas_nama">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="petugas_email">Petugas Email</label>
                                                        <input type="email" id="petugas_email" class="form-control"
                                                             name="petugas_email">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    
                                                </div>
                                                

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="perusahaan">Petugas Password</label>
                                                        <input type="password" id="petugas_password" class="form-control"
                                                            name="petugas_password" >
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    
                                                </div>
                                                
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="perusahaan">Petugas Jadwal</label>
                                                        <input type="text" id="petugas_jadwal" class="form-control"
                                                            name="petugas_jadwal" >
                                                    </div>
                                                </div>

                                                
                                                <div class="col-md-6 col-12">
                                                    
                                                </div>
                                                
                                                

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nama_pasien">No Telepon</label>
                                                        <input type="number" id="petugas_telp" class="form-control"
                                                            name="petugas_telp" >
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="tempat_lahir">Petugas Level</label>
                                                        <input type="text" id="petugas_level" class="form-control"
                                                            name="petugas_level">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    
                                                </div>
                                                <div class="col-sm-6 d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                                
                                            </form>
                                                    
                                            </div>

                                                </section>
                <!-- // Basic multiple Column Form section end -->
                
            </div>

            @endsection