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
                        <form id="costomer" class="form-horizontal">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group row">
                                    <input type="hidden" class="form-control form-control-sm" id="id_kurir" value="<?= $kurir->id_kurir ?>">
                                    <label for="" class="col-sm-2 col-form-label-sm">Nama Kurir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="nama_kurir" placeholder="Nama Kurir" value="<?= $kurir->nama_kurir ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-sm" name="jenis_kelamin">
                                            <option value="<?= $kurir->jenis_kelamin ?>"><?= $kurir->jenis_kelamin ?></option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label-sm">Wilayah Pengiriman</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="wilayah_pengiriman" placeholder="Wilayah Pengiriman" value="<?= $kurir->wilayah_pengiriman ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <img src="<?= base_url('assets/img/profil/') ?>" alt="" class="img-thumbnail">
                                    </div>
                                    <div class="col">
                                        <div class="custom-file ">
                                            <input type="file" class="custom-file-input custom-file-input-sm" name="foto" id="foto">
                                            <label class="custom-file-label custom-file-label-sm" for="foto">Pilih Foto</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <a href="<?= base_url('Kurir'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                                <button type="button" class="btn btn-primary" onclick="updateSaveAO()">Save</button>
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
    function updateSaveAO() {
        // debugger
        PatchURL = _baseurl.concat('/MasterBarang/updateSave');
        var vid_kurir = $("#id_kurir").val();
        var vnama_kurir = $("#nama_kurir").val();
        var vjenis_kelamin = $("#jenis_kelamin").val();
        var vwilayah_pengiriman = $("#wilayah_pengiriman").val();
        var vfoto = $("#foto").val();
        // var vjenis_kelamin = $("#jenis_kelamin").val();

        var value = {
            id_kurir: vid_kurir,
            nama_kurir: vnama_kurir,
            jenis_kelamin: vjenis_kelamin,
            wilayah_pengiriman: vwilayah_pengiriman,
            foto: vfoto,
            // jenis_kelamin: vjenis_kelamin
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
        $("#nama_kurir").val();
        $("#wilayah_pengiriman").val();
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