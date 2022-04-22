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
            <h1><?= $title .' '. $pasien->pasien_id; ?></h1>
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
                <h3 class="card-title"><?= $subtitle ?></h3>
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
                                  <input type="hidden" class="form-control form-control-sm" id="pasien_id" value="<?= $pasien->pasien_id; ?>">
                                  <input type="text" class="form-control form-control-sm" id="identitas_id" value="<?= $pasien->identitas_id; ?>" placeholder="No Identitas">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                                Nama Lengkap **
                              </label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control form-control-sm" id="name" value="<?= $pasien->name; ?>" placeholder="Nama Lengkap">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                                Tempat Lahir
                              </label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control form-control-sm" id="tempat_lahir" value="<?= $pasien->tempat_lahir; ?>" placeholder="Tempat Lahir">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                                Tanggal Lahir
                              </label>
                              <div class="col-sm-9">
                                  <input type="date" class="form-control form-control-sm" id="tgl_lahir" value="<?= $pasien->tgl_lahir; ?>" placeholder="Tanggal Lahir">
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
                                      <input type="radio" id="radio_l" name="jenis_kelamin" value="L" <?php if ($pasien->jenis_kelamin == "L") { echo "checked"; } ?>>
                                      <label for="radio_l">
                                        Laki-laki
                                      </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                      <input type="radio" id="radio_p" name="jenis_kelamin" value="P" <?php if ($pasien->jenis_kelamin == "P") { echo "checked"; } ?>>
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
                                  <input type="text" class="form-control form-control-sm" id="gol_darah" value="<?= $pasien->gol_darah; ?>" placeholder="Golongan Darah">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                                No HP **
                              </label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control form-control-sm" id="telp" value="<?= $pasien->telp; ?>" placeholder="No HP">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                                Email
                              </label>
                              <div class="col-sm-9">
                                  <input type="email" class="form-control form-control-sm" id="email" value="<?= $pasien->email; ?>" placeholder="Email">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                                No HP Keluarga
                              </label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control form-control-sm" id="telp_lain" value="<?= $pasien->telp_lain; ?>" placeholder="No HP Keluarga yang dapat dihubungi">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                                Nama Keluarga
                              </label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control form-control-sm" id="nama_lain" value="<?= $pasien->nama_lain; ?>" placeholder="Nama Keluarga">
                              </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group row">
                              <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">
                                Alamat Lengkap
                              </label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control form-control-sm" id="alamat" value="<?= $pasien->alamat; ?>" placeholder="Keterangan">
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
                                      foreach ($prov as $d) {
                                        if ($pasien->prov_id == $d->prov_id) { ?>
                                        <option value="<?= $d->prov_id; ?>" selected="selected"><?= $d->prov_name; ?></option>
                                    <?php
                                        } else {
                                    ?>
                                        <option value="<?= $d->prov_id; ?>"><?= $d->prov_name; ?></option>
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
                                      foreach ($kab as $d) {
                                        if ($pasien->kab_id == $d->kab_id) { ?>
                                        <option value="<?= $d->kab_id; ?>" selected="selected"><?= $d->kab_name; ?></option>
                                    <?php
                                        } else {
                                    ?>
                                        <option value="<?= $d->kab_id; ?>"><?= $d->kab_name; ?></option>
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
                                        if ($pasien->pekerjaan_id == $d->pekerjaan_id) { ?>
                                        <option value="<?= $d->pekerjaan_id; ?>" selected="selected"><?= $d->pekerjaan_name; ?></option>
                                    <?php
                                        } else {
                                    ?>
                                      <option value="<?= $d->pekerjaan_id; ?>"><?= $d->pekerjaan_name; ?></option>
                                    <?php
                                        }
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
                                        if ($pasien->agama_id == $d->agama_id) { ?>
                                        <option value="<?= $d->agama_id; ?>" selected="selected"><?= $d->agama_name; ?></option>
                                    <?php
                                        } else {
                                    ?>
                                      <option value="<?= $d->agama_id; ?>"><?= $d->agama_name; ?></option>
                                    <?php
                                        }
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
                                        if ($pasien->pendidikan_id == $d->pendidikan_id) { ?>
                                        <option value="<?= $d->pendidikan_id; ?>" selected="selected"><?= $d->pendidikan_name; ?></option>
                                    <?php
                                        } else {
                                    ?>
                                      <option value="<?= $d->pendidikan_id; ?>"><?= $d->pendidikan_name; ?></option>
                                    <?php
                                        }
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
                                        if ($pasien->perkawinan_id == $d->perkawinan_id) { ?>
                                        <option value="<?= $d->perkawinan_id; ?>" selected="selected"><?= $d->perkawinan_name; ?></option>
                                    <?php
                                        } else {
                                    ?>
                                      <option value="<?= $d->perkawinan_id; ?>"><?= $d->perkawinan_name; ?></option>
                                    <?php
                                        }
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

    $(function () {
      $('.select2').select2({
        theme: 'bootstrap4'
      });
    });
    
    function updateSavePasien() {
        //debugger
        PatchURL = _baseurl.concat('/poliklinik/updateSave');
        
        var vpoliklinik_id      = $("#poliklinik_id").val();
        var vpoliklinik_name    = $("#poliklinik_name").val();
        var vpoliklinik_ket     = $("#poliklinik_ket").val();

        var value = {
          poliklinik_id     : vpoliklinik_id,
          poliklinik_name   : vpoliklinik_name,
          poliklinik_ket    : vpoliklinik_ket
        };
        
        $.ajax({
            type    : "POST",
            url     : PatchURL,
            data    : value,
            cache	: false,
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
      $("#poliklinik_name").val("");
      $("#poliklinik_ket").val("");
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