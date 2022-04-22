<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
<!-- Toastr -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css'); ?>">
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">

<div class="content-wrapper" style="min-height: 1302.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                        <?= $title; ?>
                    </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-md">
                                    <h3 class="card-title"><?= $subtitle; ?></h3>
                                </div>
                                <div class="col-md-8 text-right">
                                    <!-- <form action=""> -->
                                    <!-- <input required type="hidden" name="id_pendaftaran" value="<?= $di->id_pendaftaran ?>"> -->
                                    <button type="Button" class="btn btn-warning btn-sm" id_pendaftaran="<?= $di->id_pendaftaran ?>" onclick="selesaiTindakan()" style="color: white;"><i class="fas fa-check"></i> Selesai</button>
                                    <!-- </form> -->
                                    <a href="<?= base_url('TindakanRawatJalan') ?>" class="btn btn-secondary btn-sm"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <!-- colomn 1 -->
                                <div class="col">
                                    <div class="col-sm mb-3">
                                        <table>
                                            <tr class="col-sm-5 col-form-label-sm">
                                                <td>No Pendaftaran</td>
                                                <td>: <?= $di->id_pendaftaran ?></td>
                                            </tr>
                                            <tr class="col-sm-5 col-form-label-sm">
                                                <td>No RM</td>
                                                <td>: <?= $di->pasien_id ?></td>
                                            </tr>
                                            <tr class="col-sm-5 col-form-label-sm">
                                                <td>Nama Lengkap</td>
                                                <td>: <?= $di->name ?></td>
                                            </tr>
                                            <tr class="col-sm-5 col-form-label-sm">
                                                <td>TTL</td>
                                                <td>: <?= $this->MFunction->tgl_indo($di->tgl_lahir) ?></td>
                                            </tr>
                                            <tr class="col-sm-5 col-form-label-sm">
                                                <td>Jenis Kelamin / Umur</td>
                                                <td>: <?= $this->MFunction->php_jk($di->jenis_kelamin) ?> / <?= $this->MFunction->php_umur($di->tgl_lahir) ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                                <!-- colomn 2-->
                                <div class=" col">
                                    <div class="col-sm mb-3">
                                        <table>
                                            <tr class="col-sm-3 col-form-label-sm">
                                                <td>Tanggal</td>
                                                <td>: <?= $this->MFunction->tgl_indo($di->tanggal_pendaftaran) ?></td>
                                            </tr>
                                            <tr class="col-sm-3 col-form-label-sm">
                                                <td>PoliKlinik</td>
                                                <td>: <?= $di->poliklinik_name ?></td>
                                            </tr>
                                            <tr class="col-sm-3 col-form-label-sm">
                                                <td>Dokter</td>
                                                <td>: <?= $di->nama_dokter ?></td>
                                            </tr>
                                            <tr class="col-sm-3 col-form-label-sm">
                                                <td>Status</td>
                                                <td>: <?= $di->status ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr class="sidebar-divider my-0">
                            <ul class="nav nav-pills mb-3 mt-3 " id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link btn-light" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pemerikasaan Fisik</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-light" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Diagnosa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-light" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Pelayanan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-light" id="pills-resep-tab" data-toggle="pill" href="#pills-resep" role="tab" aria-controls="pills-resep" aria-selected="true">Resep</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-light" id="pills-riwayat-tab" data-toggle="pill" href="#pills-riwayat" role="tab" aria-controls="pills-riwayat" aria-selected="false">Riwayat Berobat</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col ml-4">
                                            <input required type="hidden" class="form-control form-control-sm" id="id_pendaftaran" name="id_pendaftaran" value="<?= $di->id_pendaftaran ?>">
                                            <div class="form-group row">
                                                <label class="form-label-sm" class="form-label-sm">Riwayat Alergi</label>
                                                <input required type="text" class="form-control form-control-sm" id="alergi" name="alergi" placeholder="Riwayat Alergi" value="<?= $ct['alergi'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col ml-2 mr-3">
                                            <div class="form-group row">
                                                <label class="form-label-sm" class="form-label-sm">Keluhan</label>
                                                <input required type="text" class="form-control form-control-sm" id="keluhan" name="keluhan" placeholder="Keluhan" value="<?= $ct['keluhan'] ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col ml-4">
                                            <div class="form-group row">
                                                <label class="form-label-sm">Tinggi Badan (CM)</label>

                                                <input required type="text" class="form-control form-control-sm" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi Badan (CM)" value="<?= $ct['tinggi_badan'] ?>" readonly>
                                            </div>
                                            <div class="form-group row">
                                                <label class="form-label-sm">Golongan Darah</label>
                                                <input required type="text" class="form-control form-control-sm" id="gol_darah" name="gol_darah" placeholder="gol_darah" value="<?= $ct['gol_darah'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col ml-2">
                                            <div class="form-group row">
                                                <label class="form-label-sm">Berat Badan (KG)</label>

                                                <input required type="text" class="form-control form-control-sm" id="berat_badan" name="berat_badan" placeholder="Berat Badan (KG)" value="<?= $ct['berat_badan'] ?>" readonly>

                                            </div>
                                            <div class="form-group row">
                                                <label class="form-label-sm">Nadi</label>

                                                <input required type="text" class="form-control form-control-sm" id="nadi" name="nadi" placeholder="Nadi" value="<?= $ct['nadi'] ?>" readonly>

                                            </div>
                                        </div>
                                        <div class="col ml-2">
                                            <div class="form-group row">
                                                <label class="form-label-sm">Tekanan Darah (MmHg)</label>

                                                <input required type="text" class="form-control form-control-sm" id="tekanan_darah" name="tekanan_darah" placeholder="Tekanan Darah (MmHg)" value="<?= $ct['tekanan_darah'] ?>" readonly>

                                            </div>
                                            <div class="form-group row">
                                                <label class="form-label-sm">Respirasi</label>

                                                <input required type="text" class="form-control form-control-sm" id="respirasi" name="respirasi" placeholder="Respirasi" value="<?= $ct['respirasi'] ?>" readonly>

                                            </div>
                                        </div>
                                        <div class="col ml-2">

                                            <div class="form-group row">
                                                <label class="form-label-sm">Buta Warna</label>
                                                <input required type="text" class="form-control form-control-sm" id="buta_warna" name="buta_warna" placeholder="buta_warna" value="<?= $ct['buta_warna'] ?>" readonly>
                                            </div>
                                            <div class="form-group row">
                                                <label class="form-label-sm">Suhu (Celcius)</label>

                                                <input required type="text" class="form-control form-control-sm" id="suhu" name="suhu" placeholder="Suhu (Celcius)" value="<?= $ct['suhu'] ?>" readonly>

                                            </div>

                                        </div>
                                        <div class="col ml-2 mr-3">

                                            <div class="form-group row">
                                                <label class="form-label-sm">Cacat Badan</label>
                                                <input required type="text" class="form-control form-control-sm" id="cacat_badan" name="cacat_badan" placeholder="cacat_badan" value="<?= $ct['cacat_badan'] ?>" readonly>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col ml-3 mr-2">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Catatan</label>
                                                <textarea class="form-control" id="dcatatan" name="dcatatan" rows="3" value="<?= $ct['catatan'] ?>" readonly><?= $ct['catatan'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="col-md text-right mb-3">
                                        <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#diagnosa">
                                            <i class="fas fa-plus"></i> Tambah Diagnosa
                                        </button>
                                    </div>
                                    <div>
                                        <table id="tr-diagnosa" class="table w-100 table-bordered table-striped">

                                            <thead>
                                                <tr>
                                                    <th class="col-md-1">No</th>
                                                    <th>Kode Diagnosa</th>
                                                    <th>Versi Diagnosa</th>
                                                    <th>Nama Diagnosa</th>
                                                    <th class="col-md-1 text-center">Keterangan</th>
                                                    <th class="col-md-2 text-center">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="col-md text-right mb-3">
                                        <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#tambahPelayanan">
                                            <i class="fas fa-plus"></i> Tambah Pelayanan
                                        </button>
                                    </div>
                                    <div>
                                        <table id="tr-pelayanan" class="table w-100 table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="col-md-1">No</th>
                                                    <th>Jenis Pelayanan</th>
                                                    <th class="col-md-1 text-center">Harga</th>
                                                    <th class="col-md-1 text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="col-md text-right mb-3">
                                        <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#tambahPelayanan">
                                            <i class="fas fa-plus"></i> Tambah Pelayanan
                                        </button>
                                    </div>
                                    <div>
                                        <table id="pelayanan" class="table w-100 table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="col-md-1">No</th>
                                                    <th>Jenis Pelayanan</th>
                                                    <th class="col-md-1 text-center">Harga</th>
                                                    <th class="col-md-1 text-center">Status</th>
                                                    <th class="col-md-2 text-center">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-resep" role="tabpanel" aria-labelledby="pills-resep-tab">
                                    <div class="col-md text-right mb-3">
                                        <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#tambahresep">
                                            <i class="fas fa-plus"></i> Tambah Resep
                                        </button>
                                    </div>
                                    <div>
                                        <table id="data-resep" class="table w-100 table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="col-md-1">No</th>
                                                    <th>Kode Obat</th>
                                                    <th>Nama Obat</th>
                                                    <th>Quantity</th>
                                                    <th>Satuan</th>
                                                    <th>Tuslah</th>
                                                    <th class="col-md-1 text-center">Aturan</th>
                                                    <th class="col-md-2 text-center">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-riwayat" role="tabpanel" aria-labelledby="pills-riwayat-tab">
                                    <div class="col-md text-right mb-3">
                                    </div>
                                    <div>
                                        <?php foreach ($riwayat_catatan as $cr) : ?>
                                            <div>
                                                <div class="row">
                                                    <div class="col ml-3">
                                                        <label for=""><?= $this->MFunction->tgl_indo($cr['tanggal_catatan'])  ?></label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col ml-4">
                                                        <input required type="hidden" class="form-control form-control-sm" id="id_pendaftaran" name="id_pendaftaran" value="<?= $di->id_pendaftaran ?>">
                                                        <div class="form-group row">
                                                            <label class="form-label-sm" class="form-label-sm">Riwayat Alergi</label>
                                                            <input required type="text" class="form-control form-control-sm" id="alergi" name="alergi" placeholder="Riwayat Alergi" value="<?= $cr['alergi'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col ml-2 mr-3">
                                                        <div class="form-group row">
                                                            <label class="form-label-sm" class="form-label-sm">Keluhan</label>
                                                            <input required type="text" class="form-control form-control-sm" id="keluhan" name="keluhan" placeholder="Keluhan" value="<?= $cr['keluhan'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col ml-4">
                                                        <div class="form-group row">
                                                            <label class="form-label-sm">Tinggi Badan (CM)</label>

                                                            <input required type="text" class="form-control form-control-sm" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi Badan (CM)" value="<?= $cr['tinggi_badan'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="form-label-sm">Golongan Darah</label>
                                                            <input required type="text" class="form-control form-control-sm" id="gol_darah" name="gol_darah" placeholder="gol_darah" value="<?= $cr['gol_darah'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col ml-2">
                                                        <div class="form-group row">
                                                            <label class="form-label-sm">Berat Badan (KG)</label>

                                                            <input required type="text" class="form-control form-control-sm" id="berat_badan" name="berat_badan" placeholder="Berat Badan (KG)" value="<?= $cr['berat_badan'] ?>" readonly>

                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="form-label-sm">Nadi</label>

                                                            <input required type="text" class="form-control form-control-sm" id="nadi" name="nadi" placeholder="Nadi" value="<?= $ct['nadi'] ?>" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col ml-2">
                                                        <div class="form-group row">
                                                            <label class="form-label-sm">Tekanan Darah (MmHg)</label>

                                                            <input required type="text" class="form-control form-control-sm" id="tekanan_darah" name="tekanan_darah" placeholder="Tekanan Darah (MmHg)" value="<?= $ct['tekanan_darah'] ?>" readonly>

                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="form-label-sm">Respirasi</label>

                                                            <input required type="text" class="form-control form-control-sm" id="respirasi" name="respirasi" placeholder="Respirasi" value="<?= $ct['respirasi'] ?>" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col ml-2">

                                                        <div class="form-group row">
                                                            <label class="form-label-sm">Buta Warna</label>
                                                            <input required type="text" class="form-control form-control-sm" id="buta_warna" name="buta_warna" placeholder="buta_warna" value="<?= $ct['buta_warna'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="form-label-sm">Suhu (Celcius)</label>

                                                            <input required type="text" class="form-control form-control-sm" id="suhu" name="suhu" placeholder="Suhu (Celcius)" value="<?= $ct['suhu'] ?>" readonly>

                                                        </div>

                                                    </div>
                                                    <div class="col ml-2 mr-3">

                                                        <div class="form-group row">
                                                            <label class="form-label-sm">Cacat Badan</label>
                                                            <input required type="text" class="form-control form-control-sm" id="cacat_badan" name="cacat_badan" placeholder="cacat_badan" value="<?= $cr['cacat_badan'] ?>" readonly>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col ml-3 mr-2">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Catatan</label>
                                                            <textarea class="form-control" id="dcatatan" name="dcatatan" rows="3" value="<?= $cr['catatan'] ?>" readonly><?= $cr['catatan'] ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="row">
                                            <div class="col ml-3">
                                                <label for="">Riwayat Berobat</label>
                                                <?php foreach ($riwayat_resep as $rr) : ?>
                                                    <div class="row">
                                                        <?= $rr['create_date'] ?>
                                                        <div class="col">
                                                            <?= $rr['nama_obat'] ?>
                                                        </div>
                                                        <div class="col">
                                                            <?= $rr['quantity'] ?>
                                                        </div>
                                                        <div class="col">
                                                            <?= $rr['aturan'] ?>
                                                        </div>
                                                    </div>
                                                    </table>
                                                <?php endforeach ?>
                                            </div>
                                            <div class="col">
                                                <label for="">Riwayat Pelayanan</label>
                                                <?php foreach ($riwayat_pelayanan as $rp) : ?>
                                                    <div class="row">
                                                        <?= $rp['tgl_pelayanan'] ?>
                                                        <div class="col">
                                                            <?= $rp['nama_pelayanan'] ?>
                                                        </div>
                                                    </div>
                                                <?php endforeach ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- modal -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#diagnosa">
  Launch demo modal
</button> -->

<!-- Modal diagnosa -->
<div class="modal fade" id="diagnosa" tabindex="-1" role="dialog" aria-labelledby="diagnosaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="diagnosaLabel">Diagnosa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="td-diagnosa" class="table w-100 table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th>Kode Diagnosa</th>
                            <th>Versi Diagnosa</th>
                            <th>Nama Diagnosa</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- modal pelayanan -->
<div class="modal fade" id="tambahPelayanan" tabindex="-1" role="dialog" aria-labelledby="tambahPelayananLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPelayananLabel">Pelayanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input required name="id_pendaftaran" id="id_pendaftaran" value="<?= $di->id_pendaftaran ?>" type="hidden">
                <input required name="id_dokter" id="id_dokter" value="<?= $di->id_dokter ?>" type="hidden">
                <input required name="pasien_id" id="pasien_id" value="<?= $di->pasien_id ?>" type="hidden">
                <table id="td-pelayanan" class="table w-100 table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th>Jenis Pelayanan</th>
                            <th class="col-md-1 text-center">Harga</th>
                            <th class="col-md-2 text-center">#</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahresep" tabindex="-1" role="dialog" aria-labelledby="tambahresepLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahresepLabel">Resep</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input required name="id_pendaftaran" id="id_pendaftaran" value="<?= $di->id_pendaftaran ?>" type="hidden">
                <input required name="id_dokter" id="id_dokter" value="<?= $di->id_dokter ?>" type="hidden">
                <input required name="pasien_id" id="pasien_id" value="<?= $di->pasien_id ?>" type="hidden">
                <table id="tobat" class="table w-100 table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-center">Kode Obat</th>
                            <th>Nama Item</th>
                            <th>Dosis</th>
                            <th>Satuan Dosis</th>
                            <th>Jenis Obat</th>
                            <th>Satuan Obat</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_keterangan_diagnosa">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="KeteranganLabel">Keterangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_diagnosa">
                    <div class="form-group">
                        <input required type="hidden" value="" id="diagnosa_code">
                        <input required type="hidden" value="<?= $di->id_pendaftaran ?>" id="id_pendaftaran">
                        <input required type="hidden" value="<?= $di->pasien_id ?>" id="pasien_id">
                        <input required type="hidden" value="<?= $di->id_dokter ?>" id="id_dokter">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                        <textarea class="form-control" id="keterangan" rows="3" name="keterangan"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="savetrDiagnosa()">Save</button>
            </div>
        </div>
        </form>
    </div>
</div>

<div class="modal fade" id="modal_keterangan_resep">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="KeteranganLabel">Keterangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_resep">
                    <div class="form-group">
                        <input required type="hidden" value="" id="kode_obat">
                        <input required type="hidden" value="<?= $di->id_pendaftaran ?>" id="id_pendaftaran">
                        <input required type="hidden" value="<?= $di->pasien_id ?>" id="pasien_id">
                        <input required type="hidden" value="<?= $di->id_dokter ?>" id="id_dokter">
                    </div>
                    <div class="form-group row">
                        <label for="input requiredPassword" class="col-sm-2 col-form-label-sm">Tuslah</label>
                        <div class="col-sm-10">
                            <input required type="number" name="tuslah" class="form-control form-control-sm" id="tuslah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input requiredPassword" class="col-sm-2 col-form-label-sm">Aturan</label>
                        <div class="col-sm-10">
                            <input required type="text" name="aturan" class="form-control form-control-sm" id="aturan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input requiredPassword" class="col-sm-2 col-form-label-sm">Quantity</label>
                        <div class="col-sm-10">
                            <input required type="number" name="quantity" class="form-control form-control-sm" id="quantity">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="savetrResep()">Save</button>
            </div>
        </div>
        </form>
    </div>
</div>


<!-- Page specific script -->
<script>
    $(document).ready(function() {
        //debugger
        PatchURL = _baseurl.concat('/TindakanRawatJalan/datalist_diagnosa');
        $('#td-diagnosa').DataTable({
            //"order": [2, "asc", 1, "asc"], //Initial no order.
            "destroy": true,

            ajax: {
                type: "GET",
                url: PatchURL,
                dataSrc: ""
            },
            "columns": [{
                    "data": "nomor",
                    className: "align-middle text-center small"
                },
                {
                    "data": "diagnosa_code",
                    className: "align-middle small"
                },
                {
                    "data": "diagnosa_version",
                    className: "align-middle small"
                },
                {
                    "data": "diagnosa_name",
                    className: "align-middle small"
                }
            ]
        });
    });

    $(document).ready(function() {
        // debugger
        var id_pendaftaran = $("#id_pendaftaran").val();
        PatchURL = _baseurl.concat('/TindakanRawatJalan/datalist_trdiagnosa/', id_pendaftaran);
        $('#tr-diagnosa').DataTable({
            //"order": [2, "asc", 1, "asc"], //Initial no order.
            "destroy": true,

            ajax: {
                type: "GET",
                url: PatchURL,
                dataSrc: ""
            },
            "columns": [{
                    "data": "nomor",
                    className: "align-middle text-center small"
                },
                {
                    "data": "diagnosa_code",
                    className: "align-middle small"
                },
                {
                    "data": "diagnosa_version",
                    className: "align-middle small"
                },
                {
                    "data": "diagnosa_name",
                    className: "align-middle small"
                },
                {
                    "data": "keterangan",
                    className: "align-middle small"
                },
                {
                    "data": "btn_action",
                    className: "align-middle small"
                },
            ]
        });
    });

    // menampilkan modal keterangan diagnosa
    $(document).on("click", ".btn-diagnosa", function() {
        debugger
        var diagnosa_code = $(this).attr("diagnosa_code")
        $("#modal_keterangan_diagnosa").modal('show')

        $("#diagnosa_code").val(diagnosa_code)
    });



    function savetrDiagnosa() {

        // debugger
        PatchURL = _baseurl.concat('/TindakanRawatJalan/save_diagnosa');

        var vid_pendaftaran = $("#id_pendaftaran").val();
        var vpasien_id = $("#pasien_id").val();
        var vid_dokter = $("#id_dokter").val();
        var vdiagnosa_code = $("#diagnosa_code").val();
        var vketerangan = $("#keterangan").val();

        var value = {
            id_pendaftaran: vid_pendaftaran,
            pasien_id: vpasien_id,
            id_dokter: vid_dokter,
            keterangan: vketerangan,
            diagnosa_code: vdiagnosa_code


        };

        $.ajax({
            type: "POST",
            url: PatchURL,
            data: value,
            cache: false,
            success: function(data, textStatus, jqXHR) {
                debugger
                var table = $('#tr-diagnosa').DataTable();
                table.ajax.reload();
                //var data = jQuery.parseJSON(data);
                toastr.success('Data berhasil disimpan.');
                // $("#modal_keterangan_diagnosa").hide();
                // location.reload();
                clearText();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal disimpan.');
            }
        });
    }

    $(document).on("click", "#btn_diagnosa_del", function() {
        //debugger
        var vid_tr_diagnosa = $(this).attr("vid_tr_diagnosa");

        if (!vid_tr_diagnosa) {
            toastr.error('Data gagal dihapus.');
            return
        }

        var value = {
            id_tr_diagnosa: vid_tr_diagnosa
        };

        Swal.fire({
            title: 'Apakah anda yakin.?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: _baseurl.concat('/TindakanRawatJalan/delete_diagnosa'),
                    data: value,
                    cache: false,
                    success: function(data, textStatus, jqXHR) {
                        // debugger
                        var table = $('#tr-diagnosa').DataTable();
                        table.ajax.reload();
                        toastr.success('Data berhasil dihapus.');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        toastr.error('Data gagal dihapus.');
                    }
                });
            }
        })
    });

    function clearText() {
        $("#nama_pelayanan").val("");
        $("#harga").val("");
    }

    $(document).ready(function() {
        //debugger

        PatchURL = _baseurl.concat('/TindakanRawatJalan/datalist_pelayanan');
        $('#td-pelayanan').DataTable({
            //"order": [2, "asc", 1, "asc"], //Initial no order.
            "destroy": true,

            ajax: {
                type: "GET",
                url: PatchURL,
                dataSrc: ""
            },
            "columns": [{
                    "data": "nomor",
                    className: "align-middle text-center small"
                },
                {
                    "data": "nama_pelayanan",
                    className: "align-middle small"
                },
                {
                    "data": "harga",
                    className: "align-middle text-center small"
                },
                {
                    "data": "btn_action",
                    className: "align-middle text-center small"
                }
            ]
        });
    });

    $(document).ready(function() {
        //debugger
        var id_pendaftaran = $("#id_pendaftaran").val();
        PatchURL = _baseurl.concat('/TindakanRawatJalan/tr_pelayanan/', id_pendaftaran);
        $('#tr-pelayanan').DataTable({
            //"order": [2, "asc", 1, "asc"], //Initial no order.
            "destroy": true,

            ajax: {
                type: "GET",
                url: PatchURL,
                dataSrc: ""
            },
            "columns": [{
                    "data": "nomor",
                    className: "align-middle text-center small"
                },
                {
                    "data": "nama_pelayanan",
                    className: "align-middle small"
                },
                {
                    "data": "harga",
                    className: "align-middle text-center small"
                },
                {
                    "data": "btn_action",
                    className: "align-middle text-center small"
                }
            ]
        });
    });

    $(document).ready(function() {
        //debugger
        PatchURL = _baseurl.concat('/TindakanRawatJalan/datalist_obat');
        $('#tobat').DataTable({
            //"order": [2, "asc", 1, "asc"], //Initial no order.
            "destroy": true,

            ajax: {
                type: "GET",
                url: PatchURL,
                dataSrc: ""
            },
            "columns": [{
                    "data": "nomor",
                    className: "align-middle text-center small"
                },
                {
                    "data": "kode_obat",
                    className: "align-middle small"
                },
                {
                    "data": "nama_obat",
                    className: "align-middle small"
                },
                {
                    "data": "dosis",
                    className: "align-middle small"
                },
                {
                    "data": "dosis_name",
                    className: "align-middle small"
                },
                {
                    "data": "jenis_obat_name",
                    className: "align-middle small"
                },
                {
                    "data": "satuan_name",
                    className: "align-middle small"
                },
                {
                    "data": "stock",
                    className: "align-middle small"
                }

            ]
        });
    });

    $(document).ready(function() {
        //debugger
        var id_pendaftaran = $("#id_pendaftaran").val();
        PatchURL = _baseurl.concat('/TindakanRawatJalan/datalist_trresep/', id_pendaftaran);
        $('#data-resep').DataTable({
            //"order": [2, "asc", 1, "asc"], //Initial no order.
            "destroy": true,

            ajax: {
                type: "GET",
                url: PatchURL,
                dataSrc: ""
            },
            "columns": [{
                    "data": "nomor",
                    className: "align-middle text-center small"
                },
                {
                    "data": "kode_obat",
                    className: "align-middle small"
                },
                {
                    "data": "nama_obat",
                    className: "align-middle small"
                },
                {
                    "data": "quantity",
                    className: "align-middle small"
                },
                {
                    "data": "satuan_name",
                    className: "align-middle small"
                },
                {
                    "data": "tuslah",
                    className: "align-middle small"
                },
                {
                    "data": "aturan",
                    className: "align-middle small"
                },
                {
                    "data": "btn_action",
                    className: "align-middle small"
                }

            ]
        });
    });


    function savetrResep() {

        // debugger
        PatchURL = _baseurl.concat('/TindakanRawatJalan/save_resep');

        var vid_pendaftaran = $("#id_pendaftaran").val();
        var vkode_obat = $("#kode_obat").val();
        var vpasien_id = $("#pasien_id").val();
        var vid_dokter = $("#id_dokter").val();
        var vtuslah = $("#tuslah").val();
        var vquantity = $("#quantity").val();
        var vaturan = $("#aturan").val();

        var value = {
            id_pendaftaran: vid_pendaftaran,
            kode_obat: vkode_obat,
            pasien_id: vpasien_id,
            id_dokter: vid_dokter,
            quantity: vquantity,
            tuslah: vtuslah,
            aturan: vaturan


        };

        $.ajax({
            type: "POST",
            url: PatchURL,
            data: value,
            cache: false,
            success: function(data, textStatus, jqXHR) {
                // debugger
                var table = $('#data-resep').DataTable();
                table.ajax.reload();
                //var data = jQuery.parseJSON(data);
                toastr.success('Data berhasil disimpan.');
                // $("#modal_keterangan_resep").hide();
                // location.reload();
                clearText();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal disimpan.');
            }
        });
    }

    $(document).on("click", "#btn_resep_del", function() {
        //debugger
        var vdi_tr_resep = $(this).attr("vdi_tr_resep");

        if (!vdi_tr_resep) {
            toastr.error('Data gagal dihapus.');
            return
        }

        var value = {
            id_tr_resep: vdi_tr_resep
        };

        Swal.fire({
            title: 'Apakah anda yakin.?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: _baseurl.concat('/TindakanRawatJalan/delete_resep'),
                    data: value,
                    cache: false,
                    success: function(data, textStatus, jqXHR) {
                        // debugger
                        var table = $('#data-resep').DataTable();
                        table.ajax.reload();
                        toastr.success('Data berhasil dihapus.');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        toastr.error('Data gagal dihapus.');
                    }
                });
            }
        })
    });


    $(document).on("click", ".btn-obat", function() {
        // debugger
        var kode_obat = $(this).attr("kode_obat")
        $("#modal_keterangan_resep").modal('show')

        $("#kode_obat").val(kode_obat)
    });

    $(document).on("click", "#btn_pelayanan_save", function() {
        // debugger
        var vi_pelayanan = $(this).attr("vi_pelayanan");
        var id_pendaftaran = $("#id_pendaftaran").val();
        var pasien_id = $("#pasien_id").val();
        var id_dokter = $("#id_dokter").val();
        if (!vi_pelayanan) {
            toastr.error('Data gagal ditambahakan.');
            return
        }

        var value = {
            id_pelayanan: vi_pelayanan,
            id_pendaftaran: id_pendaftaran,
            id_dokter: id_dokter,
            pasien_id: pasien_id
        };

        $.ajax({
            type: "POST",
            url: _baseurl.concat('/TindakanRawatJalan/save_pelayanan'),
            data: value,
            cache: false,
            success: function(data, textStatus, jqXHR) {
                // debugger
                //var data = jQuery.parseJSON(data);
                var table = $('#tr-pelayanan').DataTable();
                table.ajax.reload();
                // $("#tambahPelayanan").hide();
                // location.reload();
                toastr.success('Data berhasil ditambahkan.');

            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal ditambahkan.');
            }
        });
    });

    $(document).on("click", "#btn_pelayanan_del", function() {
        //debugger
        var vdi_tr_pelayanan = $(this).attr("vdi_tr_pelayanan");

        if (!vdi_tr_pelayanan) {
            toastr.error('Data gagal dihapus.');
            return
        }

        var value = {
            id_tr_pelayanan: vdi_tr_pelayanan
        };

        Swal.fire({
            title: 'Apakah anda yakin.?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: _baseurl.concat('/TindakanRawatJalan/delete_pelayanan'),
                    data: value,
                    cache: false,
                    success: function(data, textStatus, jqXHR) {
                        // debugger
                        var table = $('#tr-pelayanan').DataTable();
                        table.ajax.reload();
                        toastr.success('Data berhasil dihapus.');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        toastr.error('Data gagal dihapus.');
                    }
                });
            }
        })
    });

    function selesaiTindakan() {

        // debugger
        // PatchURL = _baseurl.concat('/TindakanRawatJalan/selesaiTindakan');

        var vid_pendaftaran = $("#id_pendaftaran").val();

        var value = {
            id_pendaftaran: vid_pendaftaran,
        };

        Swal.fire({
            title: 'Apa Anda Yakin?',
            text: "Data Yang sudah di proses Tidak Dapat di Kembalikan!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: _baseurl.concat('/TindakanRawatJalan/tindakan_selesai'),
                    data: value,
                    cache: false,
                    success: function(data, textStatus, jqXHR) {
                        // debugger
                        // var table = $('#tr-pelayanan').DataTable();
                        // table.ajax.reload();
                        toastr.success('Data berhasil diproses.');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        toastr.error('Data gagal diproses.');
                    }
                });
            }
        })


    }


    function clearText() {
        $("#tuslah").val("");
        $("#aturan").val("");
        $("#quantity").val("");
        $("#aturan").val("");
    }
</script>
<!-- SweetAlert2 -->
<script src="<?= base_url('assets/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>