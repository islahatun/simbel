<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
<!-- Toastr -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css'); ?>">
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
<!-- daterange picker -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?>">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>">
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
            <form id="form_pasien" class="form-horizontal">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        NO ID / KTP **
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="identitas_id" placeholder="No Identitas">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Nama Lengkap **
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="name" placeholder="Nama Lengkap">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Tempat Lahir
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="tempat_lahir" placeholder="Tempat Lahir">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Tanggal Lahir
                      </label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control form-control-sm" id="tgl_lahir" placeholder="Tanggal Lahir">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Jenis Kelamin **
                      </label>
                      <div class="col-sm-9">
                        <!-- radio -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="radio_l" name="jenis_kelamin" value="L">
                            <label for="radio_l">
                              Laki-laki
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="radio_p" name="jenis_kelamin" value="P">
                            <label for="radio_p">
                              Perempuan
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Golongan Darah **
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="gol_darah" placeholder="Golongan Darah">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        No HP **
                      </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="telp" placeholder="No HP">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Email
                      </label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control form-control-sm" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        No HP Keluarga
                      </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="telp_lain" placeholder="No HP Keluarga yang dapat dihubungi">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Nama Keluarga
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="nama_lain" placeholder="Nama Keluarga">
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Alamat Lengkap
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="alamat" placeholder="Alamat Lengkap">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Provinsi
                      </label>
                      <div class="col-sm-9">
                        <select id="prov_id" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">---None---</option>
                          <?php
                          foreach ($prov as $d) {
                          ?>
                            <option value="<?= $d->prov_id; ?>"><?= $d->prov_name; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Kabupaten
                      </label>
                      <div class="col-sm-9">
                        <select id="kab_id" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">---None---</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Kecamatan
                      </label>
                      <div class="col-sm-9">
                        <select id="kec_id" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">---None---</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Pekerjaan
                      </label>
                      <div class="col-sm-9">
                        <select id="pekerjaan_id" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">---None---</option>
                          <?php
                          foreach ($pekerjaan as $d) {
                          ?>
                            <option value="<?= $d->pekerjaan_id; ?>"><?= $d->pekerjaan_name; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Agama
                      </label>
                      <div class="col-sm-9">
                        <select id="agama_id" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">---None---</option>
                          <?php
                          foreach ($agama as $d) {
                          ?>
                            <option value="<?= $d->agama_id; ?>"><?= $d->agama_name; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Pendidikan
                      </label>
                      <div class="col-sm-9">
                        <select id="pendidikan_id" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">---None---</option>
                          <?php
                          foreach ($pendidikan as $d) {
                          ?>
                            <option value="<?= $d->pendidikan_id; ?>"><?= $d->pendidikan_name; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Perkawinan
                      </label>
                      <div class="col-sm-9">
                        <select id="perkawinan_id" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">---None---</option>
                          <?php
                          foreach ($perkawinan as $d) {
                          ?>
                            <option value="<?= $d->perkawinan_id; ?>"><?= $d->perkawinan_name; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-right">
                <a href="<?= base_url('pasien'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                <button type="button" class="btn btn-primary" onclick="savePasien()">Save</button>
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
  $(function() {
    $('.select2').select2({
      theme: 'bootstrap4'
    });
  });

  function savePasien() {
    debugger
    PatchURL = _baseurl.concat('/pasien/save');

    var videntitas_id = $("#identitas_id").val();
    var vname = $("#name").val();
    var vtempat_lahir = $("#tempat_lahir").val();
    var vtgl_lahir = $("#tgl_lahir").val();
    var vjenis_kelamin = $("input[name='jenis_kelamin']:checked").val(); //$("#jenis_kelamin").val();
    var vgol_darah = $("#gol_darah").val();
    var vtelp = $("#telp").val();
    var vemail = $("#email").val();
    var vtelp_lain = $("#telp_lain").val();
    var vnama_lain = $("#nama_lain").val();
    var vpekerjaan_id = $("#pekerjaan_id").val();
    var vprov_id = $("#prov_id").val();
    var vkab_id = $("#kab_id").val();
    var vkec_id = $("#kec_id").val();
    var valamat = $("#alamat").val();
    var vagama_id = $("#agama_id").val();
    var vpendidikan_id = $("#pendidikan_id").val();
    var vperkawinan_id = $("#perkawinan_id").val();

    var value = {
      identitas_id: videntitas_id,
      name: vname,
      tempat_lahir: vtempat_lahir,
      tgl_lahir: vtgl_lahir,
      jenis_kelamin: vjenis_kelamin,
      gol_darah: vgol_darah,
      telp: vtelp,
      email: vemail,
      telp_lain: vtelp_lain,
      nama_lain: vnama_lain,
      pekerjaan_id: vpekerjaan_id,
      prov_id: vprov_id,
      kab_id: vkab_id,
      kec_id: vkec_id,
      alamat: valamat,
      agama_id: vagama_id,
      pendidikan_id: vpendidikan_id,
      perkawinan_id: vperkawinan_id
    };

    $.ajax({
      type: "POST",
      url: PatchURL,
      data: value,
      cache: false,
      success: function(data, textStatus, jqXHR) {
        debugger
        toastr.success('Data berhasil disimpan.');

        clearText();
      },
      error: function(jqXHR, textStatus, errorThrown) {
        debugger
        toastr.error('Data gagal disimpan.');
      }
    });
  }

  function clearText() {
    $("#identitas_id").val("");
    $("#name").val("");
    $("#tempat_lahir").val("");
    $("#tgl_lahir").val("");
    $('#jenis_kelamin').attr("value", "");
    $("#gol_darah").val("");
    $("#telp").val("");
    $("#email").val("");
    $("#telp_lain").val("");
    $("#nama_lain").val("");
    $("#pekerjaan_id").val('').trigger('change');
    $("#prov_id").val('').trigger('change');
    $("#kab_id").val('').trigger('change');
    $("#kec_id").val('').trigger('change');
    $("#alamat").val("");
    $("#agama_id").val('').trigger('change');
    $("#pendidikan_id").val('').trigger('change');
    $("#perkawinan_id").val('').trigger('change');
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
<!-- Select2 -->
<script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js'); ?>"></script>