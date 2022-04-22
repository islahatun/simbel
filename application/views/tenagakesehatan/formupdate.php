<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
<!-- Toastr -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css'); ?>">
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>">

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
            <form id="form_tenagakesehatan" class="form-horizontal">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Nama Dokter</label>
                      <div class="col-sm-9">
                        <input type="hidden" class="form-control form-control-sm" id="id_dokter" value="<?= $tk->id_dokter; ?>">
                        <input type="text" class="form-control form-control-sm" id="nama_dokter" placeholder="Nama Dokter" value="<?= $tk->nama_dokter; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Nomor Ijin</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="no_ijin" placeholder="Nomor Ijin" value="<?= $tk->no_ijin; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Jenis Kelamin</label>
                      <div class="col-sm-9">
                        <!-- radio -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="radio_l" name="jenis_kelamin" value="L" <?php if ($tk->jenis_kelamin == 'L') echo 'checked' ?>>
                            <label for="radio_l">
                              Laki-laki
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">

                            <input type="radio" id="radio_p" name="jenis_kelamin" value="P" <?php if ($tk->jenis_kelamin == 'P') echo 'checked' ?>>
                            <label for="radio_p">
                              Perempuan
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Nomor HP</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="no_hp" placeholder="Nomor HP" value="<?= $tk->no_hp; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Poliklinik</label>
                      <div class="col-sm-9">
                        <select id="poliklinik_name" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">--Pilih Poliklinik--</option>
                          <?php
                          foreach ($poli as $p) {
                            if ($tk->poliklinik_id == $p->poliklinik_id) { ?>
                              <option value="<?= $p->poliklinik_id; ?>" selected="selected"><?= $p->poliklinik_name; ?></option>
                            <?php
                            } else {
                            ?>
                              <option value="<?= $p->poliklinik_id; ?>"><?= $p->poliklinik_name; ?></option>
                          <?php
                            }
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Alamat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="alamat" placeholder="Alamat" value="<?= $tk->alamat; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                        Provinsi
                      </label>
                      <div class="col-sm-9">
                        <select id="prov_id" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="">---None---</option>
                          <?php
                          foreach ($prov as $p) {
                            if ($tk->prov_id == $p->prov_id) { ?>
                              <option value="<?= $p->prov_id; ?>" selected="selected"><?= $p->prov_name; ?></option>
                            <?php
                            } else {
                            ?>
                              <option value="<?= $p->prov_id; ?>"><?= $p->prov_name; ?></option>
                          <?php
                            }
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
                          <option value="">---None---</option>
                          <?php
                          foreach ($kab as $k) {
                            if ($tk->kab_id == $k->kab_id) { ?>
                              <option value="<?= $k->kab_id; ?>" selected="selected"><?= $k->kab_name; ?></option>
                            <?php
                            } else {
                            ?>
                              <option value="<?= $k->kab_id; ?>"><?= $k->kab_name; ?></option>
                          <?php
                            }
                          }
                          ?>
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
                          <?php
                          foreach ($kec as $kc) {
                            if ($tk->kec_id == $kc->kec_id) { ?>
                              <option value="<?= $kc->kec_id; ?>" selected="selected"><?= $kc->kec_name; ?></option>
                            <?php
                            } else {
                            ?>
                              <option value="<?= $kc->kec_id; ?>"><?= $kc->kec_name; ?></option>
                          <?php
                            }
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card-footer text-right">
                <a href="<?= base_url('TenagaKesehatan'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                <button type="button" class="btn btn-primary" onclick="updateSaveTenagaKesehatan()">Save</button>
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

  function updateSaveTenagaKesehatan() {
    //debugger
    PatchURL = _baseurl.concat('/tenagakesehatan/updateSave');

    var vid_dokter = $("#id_dokter").val();
    var vnama_dokter = $("#nama_dokter").val();
    var vno_ijin = $("#no_ijin").val();
    var vjenis_kelamin = $("input[name='jenis_kelamin']:checked").val();
    var vno_hp = $("#no_hp").val();
    var vpoliklinik_id = $("#poliklinik_name").val();
    var valamat = $("#alamat").val();
    var vprov_id = $("#prov_id").val();
    var vkab_id = $("#kab_id").val();
    var vkec_id = $("#kec_id").val();

    var value = {
      id_dokter: vid_dokter,
      nama_dokter: vnama_dokter,
      no_ijin: vno_ijin,
      jenis_kelamin: vjenis_kelamin,
      no_hp: vno_hp,
      poliklinik_id: vpoliklinik_id,
      alamat: valamat,
      prov_id: vprov_id,
      kab_id: vkab_id,
      kec_id: vkec_id
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
    $("#nama_dokter").val("");
    $("#no_ijin").val("");
    $("#jenis_kelamin").val("");
    $("#no_hp").val("");
    $("#poliklinik_id").val("");
    $("#alamat").val("");
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