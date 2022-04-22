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
        <div class="col-12">
          <div class="row">
            <div class="col-md-6">
              <div class="page-title">
                <h3 class="title"> <?= $title; ?></h3>
                <!-- <h6><a href="<?= base_url('RawatJalan'); ?>">Rawat Jalan</a> / Pendaftaran Rawat Jalan</h6> -->
              </div>
            </div>

            <div class="col-md-6 text-right">
              <a href="<?= base_url('pasien/add'); ?>" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Pasien Baru</a>
              <a href="#myModal" id="daftarPasien" data-toggle="modal" class="btn btn-sm btn-success"><i class="fa fa-search"></i> Cari Pasien</a>
            </div>
          </div>
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
            <form id="form_rawatjalan" class="form-horizontal">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-inline">
                  <div class="form-group">
                    <form action="<?= base_url('RawatJalan/search') ?>" method="post">
                      <input type="text" class="form-control form-control-sm" id="pasien_id" placeholder="Search by No RM.." name="search">
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-sm btn-success" id="cariPasien"><i class="fa fa-search"></i></button>
                  </div>
            </form>
          </div>
        </div>

        <div class="card-body">
          <div class="card-body">
            <div class="row" style="font-size: 13px;margin-top: 5px;">
              <div class="col-md-6" style="border-right:solid 2px #ddd;">
                <table class="table table-sm">
                  <tr>
                    <td width="20%" style="font-weight: bold;">No RM</td>
                    <td width="1%">:</td>
                    <td> <input type="label" class="form-control form-control-sm" style="border: none; background: transparent; width: 100%; height: 100%;" id="pasien_idLabel" readonly> </td>
                  </tr>

                  <tr>
                    <td style="font-weight: bold;">NIK</td>
                    <td width="1%">:</td>
                    <td><input type="label" class="form-control form-control-sm" style="border: none; background: transparent; width: 100%; height: 100%;" id="identitas_idLabel" readonly></td>
                  </tr>

                  <tr>
                    <td style="font-weight: bold;">Nama</td>
                    <td width="1%">:</td>
                    <td><input type="label" class="form-control form-control-sm" style="border: none; background: transparent; width: 100%; height: 100%;" id="nameLabel" readonly></td>
                  </tr>

                  <tr>
                    <td style="font-weight: bold;">Tanggal Lahir</td>
                    <td width="1%">:</td>
                    <td><input type="date" class="form-control form-control-sm" style="border: none; background: transparent; width: 100%; height: 100%;" id="tgl_lahirLabel" readonly></td>
                  </tr>

                  <tr>
                    <td style="font-weight: bold;">Jenis_kelamin</td>
                    <td width="1%">:</td>
                    <td><input type="label" class="form-control form-control-sm" style="border: none; background: transparent; width: 100%; height: 100%;" id="jenis_kelaminLabel" readonly></td>
                  </tr>

                  <tr>
                    <td style="font-weight: bold;">Alamat</td>
                    <td width="1%">:</td>
                    <td><input type="label" class="form-control form-control-sm" style="border: none; background: transparent; width: 100%; height: 100%;" id="alamatLabel" readonly></td>
                  </tr>
                </table>
              </div>

              <div class="col-md-6">
                <table width="100%">
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm">
                      Jenis Rujukan
                    </label>
                    <div class="col-sm-9">
                      <select id="jenis_rujukan" class="form-control form-control-sm select2" style="width: 100%;">
                        <?php
                        foreach ($jenisrujukan as $jr) {
                        ?>
                          <option value="<?= $jr->rujukan_jenis_id; ?>"><?= $jr->rujukan_jenis_name; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm">
                      Tanggal
                    </label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control form-control-sm" id="tanggal_pendaftaran" placeholder="Tanggal" value="<?= date('Y-m-d'); ?>">
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm">
                      Keluhan
                    </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="keluhan" placeholder="Keluhan">
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm ">Poliklinik</label>
                    <div class="col-sm-9">
                      <select id="poliklinik_id" class="form-control form-control-sm select2" style="width: 100%;">
                        <option value="" selected="selected">--Pilih Poliklinik--</option>
                        <?php
                        foreach ($poli as $po) {
                        ?>
                          <option value="<?= $po->poliklinik_id; ?>"><?= $po->poliklinik_name; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm ">
                      Dokter
                    </label>
                    <div class="col-sm-9">
                      <select id="id_dokter" class="form-control form-control-sm select2" style="width: 100%;">
                        <option value="" selected="selected">---Pilih Dokter---</option>
                        <?php
                        foreach ($dokter as $dr) {
                        ?>
                          <option value="<?= $dr->id_dokter; ?>"><?= $dr->nama_dokter; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm">
                      Jenis Pasien
                    </label>
                    <div class="col-sm-9">
                      <!-- radio -->
                      <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radio_u" name="jenis_pasien" value="Umum" checked>
                          <label for="radio_u">
                            Umum
                          </label>
                        </div>
                        <!-- <div class="icheck-primary d-inline">
                          <input type="radio" id="radio_a" name="jenis_pasien" value="Asuransi">
                          <label for="radio_a">
                            Asuransi
                          </label>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-right">
          <a href="<?= base_url('RawatJalan'); ?>" type="button" class="btn btn-secondary">Kembali</a>
          <a class="btn btn-primary" id="submitPendaftaran" onclick="daftarRJ()"> <i class="fa fa-save"></i> Daftar</a>
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

<!-- Modal Data Pasien -->
<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar Pasien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <section class="content">
          <div class="container-fluid">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="tpasien" class="table w-100 table-bordered table-striped">
                      <thead>
                        <tr>
                          <th class="col-md-1">No</th>
                          <th class="col-md-1">No RM</th>
                          <th class="col-md-3 text-center">Nama</th>
                          <th class="col-md-1 text-center">Jenis Kelamin</th>
                          <th class="col-md-1 text-center">Usia</th>
                          <th class="col-md-1 text-center">Telp</th>
                          <th class="col-md-3 text-center">Alamat</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card-header -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.container-fluid -->
          </div>
        </section>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Page specific script -->
<script>
  $('#daftarPasien').on("click", function() {
    $(document).ready(function() {
      //debugger
      PatchURL = _baseurl.concat('/RawatJalan/listPasien');
      $('#tpasien').DataTable({
        //"order": [2, "asc", 1, "asc"], //Initial no order.
        "destroy": true,

        ajax: {
          type: "GET",
          url: PatchURL,
          dataSrc: ""
        },
        "columns": [{
            "data": "nomor",
            className: "align-middle text-center small"
          },
          {
            "data": "pasien_id",
            className: "align-middle text-center small"
          },
          {
            "data": "name",
            className: "align-middle small"
          },
          {
            "data": "jenis_kelamin",
            className: "align-middle small"
          },
          {
            "data": "umur",
            className: "align-middle small"
          },
          {
            "data": "telp",
            className: "align-middle small"
          },
          {
            "data": "alamat",
            className: "align-middle small"
          }
        ]
      });
    });
  });

  function daftarRJ() {
    //debugger
    PatchURL = _baseurl.concat('/rawatjalan/save');

    var vpasien_id = $("#pasien_idLabel").val();
    var vtgl_lahir = $("#tgl_lahirLabel").val();
    var vjenis_rujukan = $("#jenis_rujukan").val();
    var vtanggal_pendaftaran = $("#tanggal_pendaftaran").val();
    // var vkeluhan = $("#keluhan").val();
    var vpoliklinik_id = $("#poliklinik_id").val();
    var vid_dokter = $("#id_dokter").val();
    var vjenis_pasien = $("input[name='jenis_pasien']:checked").val();

    var value = {
      pasien_id: vpasien_id,
      tgl_lahir: vtgl_lahir,
      jenis_rujukan: vjenis_rujukan,
      tanggal_pendaftaran: vtanggal_pendaftaran,
      // keluhan: vkeluhan,
      poliklinik_id: vpoliklinik_id,
      id_dokter: vid_dokter,
      jenis_pasien: vjenis_pasien
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
    $("#pasien_id").val("");
    $("#pasien_idLabel").val("");
    $("#identitas_idLabel").val("");
    $("#nameLabel").val("");
    $("#tgl_lahirLabel").val("");
    $("#jenis_kelaminLabel").val("");
    $("#identitas_idLabel").val("");
    $("#alamatLabel").val("");
    $("#tanggal_pendaftaran").val("");
    $("#jenis_rujukan").val('').trigger('change');
    $("#poliklinik_id").val('').trigger('change');
    $("#id_dokter").val('').trigger('change');
    // $("#keluhan").val("");
    $('#jenis_pasien').attr("value", "");
  }

  $('#cariPasien').on("click", function() {
    debugger
    var pasien_id = $('#pasien_id').val();
    var urlCariPasien = _baseurl.concat('/RawatJalan/cariPasien');

    $.ajax({
      method: "POST",
      url: urlCariPasien,
      data: {
        pasien_id: pasien_id
      },
      // beforeSend: function() {
      //   $('#CssLoader').show();
      // },
      // success: function(response) {
      success: function(data, textStatus, jqXHR) {
        debugger
        if (data == 'null') {
          toastr.error('Data Tidak Ditemukan.');
        } else {

          toastr.success('Data Ditemukan.');
          // pasien_idLabel
          // $("#pasien_idLabel").val(data.name);
          data = JSON.parse(data);

          $("#pasien_idLabel").val(data.pasien_id);
          $("#identitas_idLabel").val(data.identitas_id);
          $("#nameLabel").val(data.name);
          $("#tgl_lahirLabel").val(data.tgl_lahir);
          $("#jenis_kelaminLabel").val(data.jenis_kelamin);
          $("#alamatLabel").val(data.alamat);

        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        debugger
        toastr.error('Data Tidak Ditemukan.');
      }
    });
  });
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