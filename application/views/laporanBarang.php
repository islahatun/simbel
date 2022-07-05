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
                                    <!-- <a href="<?= base_url('LaporanBarang/export'); ?>" target="blank" class="btn btn-sm btn-info mr-1">
                                        <i class="fas fa-file-export"></i> Export Exel
                                    </a> -->
                                    <a href="<?= base_url('LaporanBarang/pdf_dompdf') ?>" target="blank" class="btn btn-secondary btn-sm"><i class="fas fa-print"></i></a>
                                </div>
                            </div>
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="po" class="table w-100 table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">No</th>
                                        <th>Nama Barang</th>
                                        <th class="col-md-1 text-center">Kategori</th>
                                        <th class="col-md-1 text-center">Satuan</th>
                                        <th class="col-md-1 text-center">Stok</th>
                                        <th class="col-md-1 text-center">Deskripsi</th>
                                        <th class="col-md-1 text-center">Harga Beli</th>
                                        <th class="col-md-1 text-center">Harga Jual</th>
                                        <th class="col-md-1 text-center">Tanggal Datang</th>
                                        <th class="col-md-1 text-center">Gambar</th>
                                        <!-- <th class="col-md-2 text-center">Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
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
        PatchURL = _url.concat('/datalist');
        $('#po').DataTable({
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
                    "data": "nama_barang",
                    className: "align-middle small"
                },
                {
                    "data": "id_kategori",
                    className: "align-middle text-center small"
                },
                {
                    "data": "satuan",
                    className: "align-middle text-center small"
                },
                {
                    "data": "stok",
                    className: "align-middle text-center small"
                },
                {
                    "data": "deskripsi",
                    className: "align-middle text-center small"
                },
                {
                    "data": "harga_beli",
                    className: "align-middle text-center small"
                },
                {
                    "data": "harga_jual",
                    className: "align-middle text-center small"
                },
                {
                    "data": "tanggal_datang",
                    className: "align-middle text-center small"
                },
                {
                    "data": "gambar",
                    className: "align-middle text-center small"
                },
                // {
                //     "data": "btn_action",
                //     className: "align-middle text-center small"
                // }
            ]
        });
    });
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