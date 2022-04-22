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
                            <div class="text-right">
                                <a href="<?= base_url('KajianRawatJalan') ?>" class="btn btn-secondary btn-sm"><i class="fas fa-reply"></i></a>
                            </div>
                        </div>
                        <form id="form_diagnosa" class="form-horizontal">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col ml-3">
                                        <input type="hidden" class="form-control form-control-sm" id="id_pendaftaran" name="id_pendaftaran" value="<?= $di->id_pendaftaran ?>">
                                        <input type="hidden" class="form-control form-control-sm" id="pasien_id" name="pasien_id" value="<?= $di->pasien_id ?>">
                                        <div class="form-group row">
                                            <label for="">Riwayat Alergi</label>
                                            <input type="text" class="form-control form-control-sm" id="alergi" name="alergi" placeholder="Riwayat Alergi" required>
                                        </div>
                                    </div>
                                    <div class="col ml-2">
                                        <div class="form-group row">
                                            <label for="">Keluhan</label>
                                            <input type="text" class="form-control form-control-sm" id="keluhan" name="keluhan" placeholder="Keluhan" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col  ml-3">
                                        <div class="form-group row">
                                            <label for="">Tinggi Badan (CM)</label>

                                            <input type="number" class="form-control form-control-sm" id="tinggi_badan" name="tinggi_badan" placeholder="Tinggi Badan (CM)" required>
                                        </div>
                                        <div class="form-group row">
                                            <label for="">Golongan Darah</label>
                                            <select class="form-control form-control-sm" id="gol_darah" name="gol_darah" required>
                                                <option class="text-center">--- Golongan Darah ---</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>O</option>
                                                <option>AB</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col ml-2">
                                        <div class="form-group row">
                                            <label for="">Berat Badan (KG)</label>

                                            <input type="number" class="form-control form-control-sm" id="berat_badan" name="berat_badan" placeholder="Berat Badan (KG)" required>

                                        </div>
                                        <div class="form-group row">
                                            <label for="">Nadi</label>

                                            <input type="number" class="form-control form-control-sm" id="nadi" name="nadi" placeholder="Nadi" required>

                                        </div>
                                    </div>
                                    <div class="col ml-2">
                                        <div class="form-group row">
                                            <label for="">Tekanan Darah (MmHg)</label>
                                            <input type="number" class="form-control form-control-sm" id="tekanan_darah" name="tekanan_darah" placeholder="Tekanan Darah (MmHg)" required>

                                        </div>
                                        <div class="form-group row">
                                            <label for="">Respirasi</label>

                                            <input type="text" class="form-control form-control-sm" id="respirasi" name="respirasi" placeholder="Respirasi" required>

                                        </div>
                                    </div>
                                    <div class="col ml-2">
                                        <div class="form-group row">
                                            <label for="">Buta Warna</label>
                                            <select class="form-control form-control-sm" id="buta_warna" name="buta_warna" required>
                                                <option class="text-center">--- Buta Warna ---</option>
                                                <option>Ya</option>
                                                <option>Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="">Suhu (Celcius)</label>

                                            <input type="text" class="form-control form-control-sm" id="suhu" name="suhu" placeholder="Suhu (Celcius)" required>

                                        </div>

                                    </div>
                                    <div class="col ml-2">
                                        <div class="form-group row">
                                            <label for="">Cacat Badan</label>
                                            <select class="form-control form-control-sm" id="cacat_badan" name="cacat_badan" required>
                                                <option class="text-center">--- Cacat Badan ---</option>
                                                <option>Ya</option>
                                                <option>Tidak</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col ml-2">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Catatan</label>
                                            <textarea class="form-control" id="catatan" name="catatan" rows="3" required></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <a href="<?= base_url('KajianRawatJalan'); ?>" type="button" class="btn btn-secondary">Kembali</a>
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
        PatchURL = _baseurl.concat('/KajianRawatJalan/save');

        var vid_pendaftaran = $("#id_pendaftaran").val();
        var vpasien_id = $("#pasien_id").val();
        var valergi = $("#alergi").val();
        var vkeluhan = $("#keluhan").val();
        var vtinggi_badan = $("#tinggi_badan").val();
        var vberat_badan = $("#berat_badan").val();
        var vtekanan_darah = $("#tekanan_darah").val();
        var vbuta_warna = $("#buta_warna").val();
        var vcatatan = $("#catatan").val();
        var vnadi = $("#nadi").val();
        var vcacat_badan = $("#cacat_badan").val();
        var vsuhu = $("#suhu").val();
        var vrespirasi = $("#respirasi").val();
        var vgol_darah = $("#gol_darah").val();

        var value = {
            id_pendaftaran: vid_pendaftaran,
            pasien_id: vpasien_id,
            alergi: valergi,
            keluhan: vkeluhan,
            tinggi_badan: vtinggi_badan,
            berat_badan: vberat_badan,
            tekanan_darah: vtekanan_darah,
            buta_warna: vbuta_warna,
            catatan: vcatatan,
            nadi: vnadi,
            cacat_badan: vcacat_badan,
            suhu: vsuhu,
            respirasi: vrespirasi,
            gol_darah: vgol_darah
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
        $("#id_pendaftaran").val("");
        $("#alergi").val("");
        $("#keluhan").val("");
        $("#tinggi_badan").val("");
        $("#berat_badan").val("");
        $("#tekanan_darah").val("");
        $("#buta_warna").val("");
        $("#gol_darah").val("");
        $("#cacat_badan").val("");
        $("#catatan").val("");
        $("#nadi").val("");
        $("#respirasi").val("");
        $("#suhu").val("");
    }
    CKEDITOR.replace('catatan');
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
<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>