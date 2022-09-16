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
                                    <li class="breadcrumb-item"><a href="{{ route('auth.register') }}">Dashboard</a></li>
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
                                                        <optgroup label="Figures">
                                                            <option value="romboid">MIP</option>
                                                            <option value="trapeze">MKP</option>
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
                                                        <label for="last-name-column">NIK</label>
                                                        <input type="text" id="nik" class="form-control"
                                                            placeholder="NIK" name="nik">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="divisi">Divisi</label>
                                                        <select class="choices form-select">
                                                        <optgroup label="Figures">
                                                            <option value="romboid">IT</option>
                                                            <option value="trapeze">HSE</option>
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
                                                        <label for="nama_pasien">Nama Pasien</label>
                                                        <input type="text" id="nama_pasien" class="form-control"
                                                            name="nama_pasien" placeholder="Nama Pasein">
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
                                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                                        <input type="date" id="tanggal_lahir" class="form-control"
                                                            name="tanggal_lahir">
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
                                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                                        
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" id="lakilaki">
                                                        <label for="lakilaki">Laki-Laki</label>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" id="perempuan">
                                                        <label for="perempuan">Perempuan</label>
                                                    </div>
                                                </div>
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
                                                        <label for="alamat_kamar">Alamat Kamar/ Nomor Mess</label>
                                                        <input type="text" id="alamat_kamar" class="form-control"
                                                            name="alamat_kamar" placeholder="Alamat Kamar/ Nomor Mess">
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
                                                        <label for="nomor_telepon">Nomor Telepon</label>
                                                        <input type="number" id="nomor_telepon" class="form-control"
                                                            name="nomor_telepon" placeholder="Nomor Telepon">
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
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="hamil">Hamil/Menyusui</label>
                                                        <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" id="yes">
                                                        <label for="yes">Ya</label>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" id="no">
                                                        <label for="no">Tidak</label>
                                                    </div>
                                                </div>
                                                    </div>
                                                </div>

                                <div class="card-header">
                                    <h4 class="card-title">Data</h4>
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