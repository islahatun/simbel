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
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
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
                        <form id="form_poliklinik" class="form-horizontal">
                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="form-group row">
                                    <input type="text" hidden class="form-control" id="diagnosa_id" value="<?= $di->diagnosa_id; ?>">
                                    <label for="" class="col-sm-2 col-form-label-sm">Kode Diagnosa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="diagnosa_code" placeholder="Kode Diagnosa" value="<?= $di->diagnosa_code; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Versi Diagnosa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="diagnosa_version" placeholder="Versi Diagnosa" value="<?= $di->diagnosa_version; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Nama Diagnosa</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="diagnosa_name" placeholder="Nama Diagnosa" value="<?= $di->diagnosa_name; ?>">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <a href="<?= base_url('Diagnosa'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                                <button type="button" class="btn btn-primary" onclick="updateSavedi()">Save</button>
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
    function updateSavedi() {
        debugger
        PatchURL = _baseurl.concat('/Diagnosa/updateSave');

        var vdiagnosa_id = $("#diagnosa_id").val();
        var vdiagnosa_name = $("#diagnosa_name").val();
        var vdiagnosa_code = $("#diagnosa_code").val();
        var vdiagnosa_version = $("#diagnosa_version").val();

        var value = {
            diagnosa_id: vdiagnosa_id,
            diagnosa_name: vdiagnosa_name,
            diagnosa_code: vdiagnosa_code,
            diagnosa_version: vdiagnosa_version
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
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal disimpan.');
            }
        });
    }

    function clearText() {
        $("#diagnosa_name").val("");
        $("#diagnosa_code").val("");
        $("#diagnosa_version").val("");
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