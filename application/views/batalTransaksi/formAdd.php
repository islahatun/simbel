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
                    <h1><?= $title; ?></h1>
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
                                <div class="col-md-6">
                                    <h3 class="card-title"><?= $subtitle; ?></h3>
                                </div>
                                <div class="col-md-6 text-right">
                                    <form action="" id="form_batal_transaksi">
                                        <input type="hidden" value="<?= $di->id_pendaftaran ?>" name="id_pendaftaran" id="id_pendaftaran">
                                        <input type="hidden" value="<?= $di->pasien_id ?>" name="pasien_id" id="pasien_id">
                                        <input type="hidden" value="<?= $di->tanggal_pendaftaran ?>" name="tanggal_pendaftaran" id="tanggal_pendaftaran">
                                        <button type="button" class="btn btn-sm btn-danger" onclick="save()">
                                            <i class="fas fa-eraser"></i> Batalkan Transaksi
                                        </button>
                                        <a href="<?= base_url('Bataltransaksi') ?>" class="btn btn-secondary btn-sm"><i class="fas fa-reply"></i></a>
                                    </form>
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
                                                <td>Jenis Kelamin</td>
                                                <td>: <?= $this->MFunction->php_jk($di->jenis_kelamin) ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr class="sidebar-divider my-0">
                                    <div class="mt-1 mb-1 col-sm-5 col-form-label-sm">
                                        <i class=" fas fa-stethoscope "></i> Tindakan
                                    </div>
                                    <table id="tindakan" class="table w-100  table-striped">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">No</th>
                                                <th>Nama Tindakan</th>
                                                <th>Harga</th>
                                                <!-- <th class="col-md-2 text-center">#</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- colomn 2-->
                                <div class=" col">
                                    <div class="col-sm mb-3">
                                        <table>
                                            <tr class="col-sm-3 col-form-label-sm">
                                                <td>Tanggal</td>
                                                <td>: <?= $di->tanggal_pendaftaran ?></td>
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

<!-- Page specific script -->
<script>
    $(document).ready(function() {
        // debugger
        var id_pendaftaran = $("#id_pendaftaran").val();
        PatchURL = _baseurl.concat('/BatalTransaksi/list_tindakan/', id_pendaftaran);
        $('#tindakan').DataTable({
            //"order": [2, "asc", 1, "asc"], //Initial no order.
            "paging": false,
            "info": false,
            "searching": false,
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
                    className: "align-middle small"
                }
            ]
        });
    });

    function save() {
        //debugger
        PatchURL = _baseurl.concat('/BatalTransaksi/save');

        var vpasien_id = $("#pasien_id").val();
        var vid_pendaftaran = $("#id_pendaftaran").val();
        var vtanggal_pendaftaran = $("#tanggal_pendaftaran").val();
        var value = {
            pasien_id: vpasien_id,
            id_pendaftaran: vid_pendaftaran,
            tanggal_pendaftaran: vtanggal_pendaftaran
        };

        $.ajax({
            type: "POST",
            url: PatchURL,
            data: value,
            cache: false,
            success: function(data, textStatus, jqXHR) {
                debugger
                //var data = jQuery.parseJSON(data);
                toastr.success('Data berhasil disimpan.');
                window.location.assign("<?php echo base_url(); ?>/BatalTransaksi");
                clearText();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal disimpan.');
            }
        });
    }

    function clearText() {
        $("#id_pendaftaran").val("");
        $("#pasien_id").val("");
        $("#tanggal_pendaftaran").val("");
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