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
                            <h3 class="card-title"><?= $subtitle; ?></h3>
                        </div>

                        <form id="form_pelayanan" class="form-horizontal">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Jenis Pelayanan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="nama_pelayanan" placeholder="Jenis Pelayanan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control form-control-sm" id="harga" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Sarana</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control form-control-sm" id="sarana" placeholder="Sarana">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Tenaga Kesehatan</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control form-control-sm" id="tenaga_kesehatan" placeholder="Tenaga Kesehatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">BPH</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control form-control-sm" id="bph" placeholder="BPH">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Alat</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control form-control-sm" id="alat" placeholder="Alat">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <a href="<?= base_url('Pelayanan'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                                <button type="button" class="btn btn-primary" onclick="saveDI()">Save</button>
                            </div>
                        </form>
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
    function saveDI() {
        //debugger
        PatchURL = _baseurl.concat('/Pelayanan/save');

        var vnama_pelayanan = $("#nama_pelayanan").val();
        var vharga = $("#harga").val();
        var valat = $("#alat").val();
        var vsarana = $("#sarana").val();
        var vtenaga_kesehatan = $("#tenaga_kesehatan").val();
        var vbph = $("#bph").val();

        var value = {
            nama_pelayanan: vnama_pelayanan,
            harga: vharga,
            alat: valat,
            sarana: vsarana,
            tenaga_kesehatan: vtenaga_kesehatan,
            bph: vbph
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

                clearText();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal disimpan.');
            }
        });
    }

    function clearText() {
        $("#nama_pelayanan").val("");
        $("#alat").val("");
        $("#sarana").val("");
        $("#tenaga_kesehatan").val("");
        $("#bph").val("");
        $("#harga").val("");
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