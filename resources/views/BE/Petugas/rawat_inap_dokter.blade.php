@extends('BE.layouts.dokter')
@section('content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Obat dan Alat Kesehatan</h3>
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
                <div class="list-group list-group-horizontal-sm mb-1 text-center" role="tablist" style="width: 50%">
                                            <a class="list-group-item list-group-item-action active"
                                                id="list-datapasien-list" data-bs-toggle="list" href="#list-datapasien"
                                                role="tab">Data Pasien</a>
                                            <a class="list-group-item list-group-item-action" id="list-pemeriksaan-list"
                                                data-bs-toggle="list" href="#list-pemeriksaan" role="tab">Pemeriksaan</a>
                                                
                                            <a class="list-group-item list-group-item-action" id="list-tindakan-list"
                                                data-bs-toggle="list" href="#list-tindakan" role="tab">Tindakan</a>
                                                <a class="list-group-item list-group-item-action" id="list-resep-list"
                                                data-bs-toggle="list" href="#list-resep" role="tab">Resep Obat</a>
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
                                                        <label>No Surat</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="no_surat" class="form-control"
                                                            name="no_surat" placeholder="No Surat" required disabled>
                                                    </div>
                                                    <div class="col-md-6">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Tempat Lahir</label>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <input type="text" id="pasien_tempat_lahir" class="form-control"
                                                                name="pasien_tempat_lahir" placeholder="Tempat Lahir" required disabled>
                                                        </div>
                                                        <div class="col-md-6">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Tanggal Lahir</label>
                                                            </div>
                                                            <div class="col-md-4 form-group">
                                                                <input type="date" id="pasien_tanggal_lahir" class="form-control"
                                                                    name="pasien_tanggal_lahir" placeholder="Tanggal Lahir" required disabled>
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
                                                        <input type="text" id="perusahaan" class="form-control"
                                                            name="perusahaan" placeholder="Perusahaan" required disabled>
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
                                                        <label>Anamnesis*</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="id_pasien" class="form-control"
                                                            name="id_pasien" placeholder="ID Pasien">
                                                    </div>
                                                    <div class="col-md-6">

                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Pemeriksa Fisik*</label>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                        </div>
                                                        <div class="col-md-6">
                                                            </div>    <br><br>

                                                        <div class="col-md-2">
                                                            <label>Tinggi Badan</label>
                                                        </div>
                                                        <div class="col-md-2 form-group">
                                                            <input type="text" id="tinggi_badan" class="form-control"
                                                                name="tinggi_badan" placeholder="tinggi badan">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Cm</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            </div>
                                                    
                                                            <div class="col-md-2">
                                                                <label>Berat Badan</label>
                                                            </div>
                                                            <div class="col-md-2 form-group">
                                                                <input type="text" id="berat_badan" class="form-control"
                                                                    name="berat_badan" placeholder="berat badan">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Kg</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                </div>

                                                            <div class="col-md-2">
                                                                    <label>Suhu Tubuh</label>
                                                            </div>
                                                            <div class="col-md-2 form-group">
                                                                <input type="text" id="suhu_tubuh" class="form-control"
                                                                        name="suhu_tubuh" placeholder="suhu tubuh">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Celcius</label>
                                                             </div>
                                                            <div class="col-md-5">
                                                             </div>    
                                                    
                                                             <div class="col-md-2">
                                                                <label>Tekanan Darah</label>
                                                        </div>
                                                        <div class="col-md-2 form-group">
                                                            <input type="text" id="tekanan_darah" class="form-control"
                                                                    name="tekanan_darah" placeholder="Tekanan Darah">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>mmHg</label>
                                                         </div>
                                                        <div class="col-md-5">
                                                         </div> 

                                                         <div class="col-md-2">
                                                            <label>Denyut Nadi</label>
                                                    </div>
                                                    <div class="col-md-2 form-group">
                                                        <input type="text" id="denyut_nadi" class="form-control"
                                                                name="denyut_nadi" placeholder="">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>per</label>
                                                     </div>
                                                     <div class="col-md-2 form-group">
                                                        <input type="text" id="satuan_nadi" class="form-control"
                                                                name="satuan_nadi" placeholder="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Menit</label>
                                                </div>
                                                    <div class="col-md-2">
                                                     </div>

                                                     <div class="col-md-2">
                                                        <label>Laju Pernapasan</label>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <input type="text" id="laju_pernapasan" class="form-control"
                                                            name="laju_pernapasan" placeholder="">
                                                </div>
                                                <div class="col-md-1">
                                                    <label>per</label>
                                                 </div>
                                                 <div class="col-md-2 form-group">
                                                    <input type="text" id="per" class="form-control"
                                                            name="per" placeholder="">
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Menit</label>
                                            </div>
                                                <div class="col-md-2">
                                                 </div>

                                                 <div class="col-md-2">
                                                    <label>Saturasi Oksigen</label>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <input type="text" id="saturasi_oksigen" class="form-control"
                                                        name="saturasi_oksigen" placeholder="">
                                            </div>
                                            <div class="col-md-7">
                                             </div> 

                                             <div class="col-md-2">
                                                <label>Pemeriksaan Penunjang</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input type="text" id="id_pasien" class="form-control"
                                                    name="id_pasien" placeholder="ID Pasien">
                                            </div>
                                            <div class="col-md-6">
                                            </div>

                                                <div class="col-md-2">
                                                    <label>Diagnosa</label>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                <select class="choices form-select">
                                                    <optgroup label="diagnosa">
                                                        <option value="romboid">IT</option>
                                                        <option value="trapeze">HSE</option>
                                                        <option value="triangle">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                                <div class="col-md-6">
                                                </div>

                                                <div class="col-md-2">
                                                    <label>Diagnosa Sekunder</label>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                <select class="choices form-select">
                                                    <optgroup label="sekunder">
                                                        <option value="romboid">IT</option>
                                                        <option value="trapeze">HSE</option>
                                                        <option value="triangle">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                                <div class="col-md-6">
                                                </div>

                                                <div class="col-md-2">
                                                    <label>Klasifikasi Penyakit</label>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                <select class="choices form-select">
                                                    <optgroup label="klasifikasi">
                                                        <option value="romboid">IT</option>
                                                        <option value="trapeze">HSE</option>
                                                        <option value="triangle">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </optgroup>
                                                </select>
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

                <div class="tab-pane fade" id="list-tindakan" role="tabpanel"
                                                aria-labelledby="list-tindakan-list">
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
                                                        <label>Nama Tindakan</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="nama_tindakan" class="form-control"
                                                            name="nama_tindakan" placeholder="Nama Tindakan">
                                                    </div>
                                                    <div class="col-md-6">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Nama Alat Kesehatan</label>
                                                        </div>
                                                        <div class="col-md-4 form-group">
                                                            <select class="choices form-select">
                                                                <optgroup label="nama_alat">
                                                                    <option value="romboid">IT</option>
                                                                    <option value="trapeze">HSE</option>
                                                                    <option value="triangle">Triangle</option>
                                                                    <option value="polygon">Polygon</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            </div>
                                                        
                                                            <div class="col-md-2">
                                                                <label>Jumlah Pengguna Alat Kesehatan</label>
                                                            </div>
                                                            <div class="col-md-2 form-group">
                                                                <input type="text" id="pengguna_alat" class="form-control"
                                                                    name="pengguna_alat" placeholder="Jumlah Pengguna Alat">
                                                            </div>
                                                            <div class="col-md-8">
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <label>Keterangan</label>
                                                                </div>
                                                                <div class="col-md-4 form-group">
                                                                    <textarea type="text" id="keterangan" class="form-control"
                                                                        name="keterangan">Keterangan</textarea>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    </div>
                                                                    <div class="col-sm-5 d-flex justify-content-end">
                                                                        <button type="submit"
                                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                                        <button type="reset"
                                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                                    </div>
                                            </div>
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </section>
                </div>


                <div class="tab-pane fade" id="list-resep" role="tabpanel"
                                                aria-labelledby="list-resep-list">
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
                                                        <label>Nama Obat</label>
                                                    </div>
                                                    <div class="col-md-4 form-group">
                                                        <input type="text" id="id_pasien" class="form-control"
                                                            name="id_pasien" placeholder="ID Pasien">
                                                    </div>
                                                    <div class="col-md-6">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Jumlah Obat</label>
                                                        </div>
                                                        <div class="col-md-2 form-group">
                                                            <input type="text" id="nama_pasien" class="form-control"
                                                                name="nama_pasien" placeholder="Nama Pasien">
                                                        </div>
                                                        <div class="col-md-2 form-group">
                                                            <select class="choices form-select">
                                                                <optgroup label="klasifikasi">
                                                                    <option value="romboid">IT</option>
                                                                    <option value="trapeze">HSE</option>
                                                                    <option value="triangle">Triangle</option>
                                                                    <option value="polygon">Polygon</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            </div>
                                                        
                                                            <div class="col-md-2">
                                                                <label>Aturan Obat</label>
                                                            </div>
                                                            <div class="col-md-4 form-group">
                                                                <input type="text" id="aturan_obat" class="form-control"
                                                                    name="aturan_obat" placeholder="Aturan Pakai">
                                                            </div>
                                                            <div class="col-md-6">
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <label>Keterangan</label>
                                                                </div>
                                                                <div class="col-md-4 form-group">
                                                                    <textarea type="text" id="keterangan" class="form-control"
                                                                        name="keterangan">Keterangan</textarea>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    </div>
                                                                    <div class="col-sm-5 d-flex justify-content-end">
                                                                        <button type="submit"
                                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                                        <button type="reset"
                                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                                    </div>
                                            </div>
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