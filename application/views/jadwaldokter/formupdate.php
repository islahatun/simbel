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
            <form id="form_jadwaldokter" class="form-horizontal">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="mt-1 col-7  row">
                  <div class="col">
                    <div class="form-group mb-0 row">
                      <label for="" class="col-sm-2 col-form-label col-form-label-sm">Nama Dokter</label>
                      <div class="col-sm-9">
                        <input type="hidden" class="form-control form-control-sm" id="id_dokter" value="<?= $tk->id_dokter; ?>" readonly>
                        <input type="text" class="form-control form-control-sm" id="nama_dokter" value="<?= $tk->nama_dokter; ?>" style="border: none; background: transparent; width: 100%; height: 100%;" readonly>
                      </div>
                    </div>
                    <div class="form-group mb-0 row">
                      <label for="" class="col-sm-2 col-form-label col-form-label-sm">Poliklinik</label>
                      <div class="col-sm-9">
                        <input type="hidden" class="form-control form-control-sm" id="poliklinik_name" value="<?= $tk->poliklinik_id; ?>" style="border: none; background: transparent; width: 100%; height: 100%;" readonly>
                        <input type="text" class="form-control form-control-sm" value="<?= $tk->poliklinik_name; ?>" style="border: none; background: transparent; width: 100%; height: 100%;" readonly>
                      </div>
                    </div>
                    <!-- <table>
                      <tr class="col-sm-12 col-form-label-sm">
                        <td>Nama Dokter </td>
                        <td> : <?= $tk->nama_dokter ?></td>
                      </tr>
                      <tr class="col-sm-12 col-form-label-sm">
                        <td>Poliklinik </td>
                        <td> : <?= $tk->poliklinik_name ?></td>
                      </tr>
                    </table> -->
                  </div>
                </div>
                <hr class="sidebar-divider my-1">
                <div class=" mt-3 col-12  row">
                  <div class="col">
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Senin</label>
                      <div class="col-sm-9">
                        <!-- <input type="hidden" class="form-control form-control-sm" id="id_dokter" value="<?= $tk->id_dokter; ?>">
                        <input type="hidden" class="form-control form-control-sm" id="nama_dokter" value="<?= $tk->nama_dokter; ?>">
                        <input type="hidden" class="form-control form-control-sm" id="poliklinik_id" value="<?= $tk->poliklinik_id; ?>"> -->
                        <input type="text" class="form-control form-control-sm" id="senin" placeholder="Masukkan Jadwal Dokter" value="<?= $tk->senin; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Selasa</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="selasa" placeholder="Masukkan Jadwal Dokter" value="<?= $tk->selasa; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Rabu</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="rabu" placeholder="Masukkan Jadwal Dokter" value="<?= $tk->rabu; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Kamis</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="kamis" placeholder="Masukkan Jadwal Dokter" value="<?= $tk->kamis; ?>">
                      </div>
                    </div>
                    <!-- <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Nomor Ijin</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="no_ijin" placeholder="Nomor Ijin" value="<?= $tk->no_ijin; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Jenis Kelamin</label>
                      <div class="col-sm-9">
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
                    </div> -->
                  </div>

                  <div class="col">
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Jum'at</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="jumat" placeholder="Masukkan Jadwal Dokter" value="<?= $tk->jumat; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Sabtu</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="sabtu" placeholder="Masukkan Jadwal Dokter" value="<?= $tk->sabtu; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Minggu</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="minggu" placeholder="Masukkan Jadwal Dokter" value="<?= $tk->minggu; ?>">
                      </div>
                    </div>
                    <!-- <div class="form-group row">
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
                    </div> -->
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card-footer text-right">
                <a href="<?= base_url('JadwalDokter'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                <button type="button" class="btn btn-primary" onclick="updateSaveJadwalDokter()">Save</button>
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

  function updateSaveJadwalDokter() {
    //debugger
    PatchURL = _baseurl.concat('/jadwaldokter/updateSave');

    var vid_dokter = $("#id_dokter").val();
    var vnama_dokter = $("#nama_dokter").val();
    var vpoliklinik_id = $("#poliklinik_name").val();
    var vsenin = $("#senin").val();
    var vselasa = $("#selasa").val();
    var vrabu = $("#rabu").val();
    var vkamis = $("#kamis").val();
    var vjumat = $("#jumat").val();
    var vsabtu = $("#sabtu").val();
    var vminggu = $("#minggu").val();

    var value = {
      id_dokter: vid_dokter,
      nama_dokter: vnama_dokter,
      poliklinik_id: vpoliklinik_id,
      senin: vsenin,
      selasa: vselasa,
      rabu: vrabu,
      kamis: vkamis,
      jumat: vjumat,
      sabtu: vsabtu,
      minggu: vminggu
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