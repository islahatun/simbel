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
                                    <form action="" id="form_proses_fsrmasi">
                                        <input type="hidden" value="<?= $di->id_pendaftaran ?>" name="id_pendaftaran" id="id_pendaftaran">
                                        <?php if ($di->status == 4) { ?>
                                            <button type="button" class="btn btn-sm btn-warning" onclick="proses_farmasi()" style="color: white;">
                                                <i class="fas fa-undo"></i> Proses
                                            </button>
                                        <?php } else if ($di->status == 5) { ?>
                                            <button type="button" class="btn btn-sm btn-info" onclick="selesai_farmasi()" style="color: white;">
                                                <i class="fas fa-undo"></i> Selesai
                                            </button>
                                        <?php } else { ?>
                                        <?php } ?>
                                        <a href="<?= base_url('Farmasi') ?>" class="btn btn-secondary btn-sm"><i class="fas fa-reply"></i></a>
                                    </form>
                                    <span></span>

                                </div>
                            </div>
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <!-- colomn 1 -->
                                <div class="col-6">
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
                                                <td>: <?= $di->jenis_kelamin ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- colomn 2-->
                                <div class=" col-6">
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
                                                <td>: <span class="badge badge-warning"><?= $this->MFunction->tr_status($di->status) ?></span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class=" ml-2">
                                <table id="resep" class="table w-100  table-striped">
                                    <thead>
                                        <tr>
                                            <th class="col-md-1">No</th>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Nama Dosis</th>
                                            <th>Tuslah</th>
                                            <th>Aturan</th>
                                            <th>Quantity</th>
                                            <th>Harga Resep</th>
                                            <th>Harga Non Resep</th>
                                            <th class="col-md-2 text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
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
        //debugger
        var id_pendaftaran = $("#id_pendaftaran").val();
        PatchURL = _baseurl.concat('/Farmasi/data_resep/', id_pendaftaran);
        $('#resep').DataTable({
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
                // {
                //     "data": "dosis",
                //     className: "align-middle small"
                // },
                {
                    "data": "dosis_name",
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
                    "data": "quantity",
                    className: "align-middle small"
                },
                {
                    "data": "harga_resep",
                    className: "align-middle small"
                },
                {
                    "data": "harga_nonresep",
                    className: "align-middle small"
                },
                {
                    "data": "total",
                    className: "align-middle small text-center"
                }

            ]
        });
    });

    function proses_farmasi() {

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
                    url: _baseurl.concat('/Farmasi/proses_farmasi'),
                    data: value,
                    cache: false,
                    success: function(data, textStatus, jqXHR) {
                        // debugger
                        // var table = $('#tr-pelayanan').DataTable();
                        location.reload();
                        toastr.success('Data berhasil diproses.');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        toastr.error('Data gagal diproses.');
                    }
                });
            }
        })
    }

    function selesai_farmasi() {

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
                    url: _baseurl.concat('/Farmasi/selesai_farmasi'),
                    data: value,
                    cache: false,
                    success: function(data, textStatus, jqXHR) {
                        // debugger
                        // var table = $('#tr-pelayanan').DataTable();
                        location.reload();
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