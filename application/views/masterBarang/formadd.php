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
                        <?= $this->session->flashdata('message') ?>
                        <?= form_open_multipart('MasterBarang/save'); ?>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label-sm">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" required id="nama_barang" placeholder="Nama Barang" name="nama_barang">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label-sm">Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" required id="jenis_kelamin" placeholder="Kategori" name="kategori">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label-sm">Satuan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" required id="satuan" placeholder="Satuan" name="satuan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label-sm">Stok</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control form-control-sm" required id="stok" placeholder="Stok" name="stok">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label-sm">Deskripsi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" required id="deskripsi" placeholder="Deskripsi" name="deskripsi">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label-sm">Harga Beli</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control form-control-sm" required id="harga_beli" placeholder="Harga Beli" name="harga_beli">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label-sm">Harga Jual</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control form-control-sm" required id="harga_jual" placeholder="Harga Jual" name="harga_jual">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label-sm">Tanggal Datang</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control form-control-sm" required id="tanggal_datang" placeholder="Tanggal Datang" name="tanggal_datang">
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
                            <a href="<?= base_url('MasterBarang'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Save</button>
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
    function saveAO() {
        //debugger
        PatchURL = _baseurl.concat('/MasterBarang/save');

        var vnama_barang = $("#nama_barang").val();
        var vdeskripsi = $("#deskripsi").val();
        var vstok = $("#stok").val();
        var vsatuan = $("#satuan").val();
        var vharga_beli = $("#harga_beli").val();
        var vharga_jual = $("#harga_jual").val();
        var vtanggal_datang = $("#tanggal_datang").val();
        var vid_kategori = $("#id_kategori").val();
        var vfoto = $("#foto").val();
        // var vjenis_kelamin = $("#jenis_kelamin").val();

        var value = {
            nama_barang: vnama_barang,
            deskripsi: vdeskripsi,
            stok: vstok,
            satuan: vsatuan,
            harga_beli: vharga_beli,
            harga_jual: vharga_jual,
            tanggal_datang: vtanggal_datang,
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
                toastr.success('Data berhasil disimpan.');

                clearText();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal disimpan.');
            }
        });
    }

    function clearText() {
        $("#nama_barang").val();
        $("#deskripsi").val();
        $("#stok").val();
        $("#harga_beli").val();
        $("#harga_jual").val();
        $("#tanggal_datang").val();
        $("#foto").val();
        // $("#jenis_kelamin").val();
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