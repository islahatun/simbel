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
                        <form id="costomer" class="form-horizontal" enctype="multipart/form-data">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <input type="text" hidden class="form-control" id="id" value="<?= $ao->id; ?>">
                                    <label for="" class="col-sm-2 col-form-label-sm">Nama Admin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="nama" placeholder="Nama Admin" value="<?= $ao->nama; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= $ao->jenis_kelamin; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">No Hp</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="no_telp" placeholder="No Hp" value="<?= $ao->no_telp; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="alamat" placeholder="Alamat" value="<?= $ao->alamat; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="email" placeholder="Email" value="<?= $ao->email; ?>">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <a href="<?= base_url('InternalBengkel'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                                <button type="button" class="btn btn-primary" onclick="updateSaveAO()">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Sandi</h3>
                        </div>
                        <form id="costomer" class="form-horizontal" enctype="multipart/form-data">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <input type="text" hidden class="form-control" id="id" value="<?= $ao->id; ?>">
                                    <label for="" class="col-sm-2 col-form-label-sm">Sandi</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control form-control-sm" id="sandi" placeholder="sandi">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <a href="<?= base_url('InternalBengkel'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                                <button type="button" class="btn btn-primary" onclick="updateSandi()">Save</button>
                            </div>
                        </form>
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
    function updateSaveAO() {
        debugger
        PatchURL = _baseurl.concat('/InternalBengkel/updateSave');
        var vid = $("#id").val();
        var vnama = $("#nama").val();
        var valamat = $("#alamat").val();
        var vno_telp = $("#no_telp").val();
        var vemail = $("#email").val();
        // var vfoto = $("#foto").val();
        var vjenis_kelamin = $("#jenis_kelamin").val();

        var value = {
            id: vid,
            nama: vnama,
            alamat: valamat,
            no_telp: vno_telp,
            email: vemail,
            // foto: vfoto,
            jenis_kelamin: vjenis_kelamin
        };

        $.ajax({
            type: "POST",
            url: PatchURL,
            data: value,
            cache: false,
            success: function(data, textStatus, jqXHR) {
                debugger
                //var data = jQuery.parseJSON(data);
                toastr.success('Data berhasil diubah.');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal diubah.');
            }
        });
    }

    function updateSandi() {
        debugger
        PatchURL = _baseurl.concat('/InternalBengkel/updateSandi');
        var vid = $("#id").val();
        var vsandi = $("#sandi").val();


        var value = {
            id: vid,
            sandi: vsandi,

        };

        $.ajax({
            type: "POST",
            url: PatchURL,
            data: value,
            cache: false,
            success: function(data, textStatus, jqXHR) {
                debugger
                //var data = jQuery.parseJSON(data);
                toastr.success('Data berhasil diubah.');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal diubah.');
            }
        });
    }

    function clearText() {
        $("#nama").val();
        $("#alamat").val();
        $("#no_telp").val();
        $("#email").val();
        $("#foto").val();
        $("#jenis_kelamin").val();
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