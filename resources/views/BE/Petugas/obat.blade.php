<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obat</title>

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
                            <h3>Obat dan Alat Kesehatan</h3>
                            <p class="text-subtitle text-muted">Data Mitra</p>
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
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Kode Obat</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="kode_obat" class="form-control"
                                                            name="kode_obat" placeholder="Kode Obat / Alat Kesehatan">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Nama Obat</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="nama_obat" class="form-control"
                                                            name="nama_obat" placeholder="Nama Obat">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Satuan</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <select class="choices form-select">
                                                        <optgroup label="Figures">
                                                            <option value="romboid">IT</option>
                                                            <option value="trapeze">HSE</option>
                                                            <option value="triangle">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        </optgroup>
                                                    </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Bobot</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="bobot" class="form-control"
                                                            name="bobot" placeholder="Bobot">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Komposisi</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="komposisi" class="form-control"
                                                            name="komposisi" placeholder="Komposisi">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Keterangan</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <select class="choices form-select">
                                                        <optgroup label="keterangan">
                                                            <option value="romboid">IT</option>
                                                            <option value="trapeze">HSE</option>
                                                            <option value="triangle">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        </optgroup>
                                                    </select>
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


                <section class="section">
                    <div class="row" id="table-hover-row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Hoverable rows</h4>
                                </div>
                                
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Kode</th>
                                                    <th>Nama</th>
                                                    <th>Satuan</th>
                                                    <th>Bobot</th>
                                                    <th>Komposisi</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Martuani</td>
                                                    <td>Sitohang</td>
                                                </tr>
                                                <tr>
                                                    
                                                </tr>
                                                <tr>
                                                    
                                                </tr>
                                                <tr>
                                                    
                                                </tr>
                                                <tr>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>  


@endsection