<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOme</title>

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
                            <h3>Data Petugas</h3>
                            <p class="text-subtitle text-muted">Data Petugas</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Petugas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                    <div class="col-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Petugas</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Kategori Petugas</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="kategori_petugas" class="form-control"
                                                            name="kategori_petugas" placeholder="Kategori Petugas">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>ID Petugas</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="email" id="petugas_id" class="form-control"
                                                            name="petugas_id" placeholder="ID Petugas">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Nama Petugas</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="nama_petugas" class="form-control"
                                                            name="nama_petugas" placeholder="Nama Petugas">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>No Telepon</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="no_telepon" class="form-control"
                                                            name="no_telepon" placeholder="No Telepon">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="email" id="email" class="form-control"
                                                            name="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Jadwal Praktek</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <select class="choices form-select">
                                                        <optgroup label="Figures">
                                                            <option value="romboid">IT</option>
                                                            <option value="trapeze">HSE</option>
                                                            <option value="triangle">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        </optgroup>
                                                        <optgroup label="Colors">
                                                            
                                                        </optgroup>
                                                    </select>
                                                    </div>
                                                    <div class="col-12 col-md-8 offset-md-4 form-group">
                                                        <div class='form-check'>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="checkbox1"
                                                                    class='form-check-input' checked>
                                                                <label for="checkbox1">Remember Me</label>
                                                            </div>
                                                        </div>
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
      