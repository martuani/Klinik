@extends('BE.layouts.sidebar')
@section('content')

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Data Mitra Kerja</h3>
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
                                    <h4 class="card-title">Form Mitra Kerja</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>ID Mitra Kerja</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="id_mitra_kerja" class="form-control"
                                                            name="id_mitra_kerja" placeholder="ID Mitra Kerja">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>NIK</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="nik" class="form-control"
                                                            name="nik" placeholder="NIK">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Nama Mitra Kerja</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="nama_mitra_kerja" class="form-control"
                                                            name="nama_mitra_kerja" placeholder="Nama Mitra Kerja">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Perusahaan</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="perusahaan" class="form-control"
                                                            name="perusahaan" placeholder="Perusahaan">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Divisi</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="divisi" class="form-control"
                                                            name="divisi" placeholder="Divisi">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Jabatan</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="jabatan" class="form-control"
                                                            name="jabatan" placeholder="Jabatan">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>No Telepon</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="no_telepon" class="form-control"
                                                            name="no_telepon" placeholder="Jabatan">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="email" id="email" class="form-control"
                                                            name="email" placeholder="Email">
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