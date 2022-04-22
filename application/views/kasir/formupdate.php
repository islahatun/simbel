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
            <form id="form_tenagakesehatan" class="form-horizontal">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Supplier</label>
                      <div class="col-sm-9">
                        <input type="hidden" class="form-control form-control-sm" id="supplier_id" value="<?= $s->supplier_id; ?>">
                        <input type="text" class="form-control form-control-sm" id="supplier_name" placeholder="Supplier" value="<?= $s->supplier_name; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Telephone</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="telp" placeholder="Telephone" value="<?= $s->telp; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Bank ID</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="bank_id" placeholder="Bank ID" value="<?= $s->bank_id; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Nomor Rekening</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="no_rekening" placeholder="Nomor Rekening" value="<?= $s->no_rekening; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Rekening An.</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="rek_name" placeholder="Rekening An." value="<?= $s->rek_name; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="email" placeholder="Email" value="<?= $s->email; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Alamat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="alamat" placeholder="Alamat" value="<?= $s->alamat; ?>">
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
                            if ($s->prov_id == $p->prov_id) { ?>
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
                <a href="<?= base_url('supplier'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                <button type="button" class="btn btn-primary" onclick="updateSupplier()">Save</button>
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

  function updateSupplier() {
    //debugger
    PatchURL = _baseurl.concat('/supplier/updateSave');

    var vsupplier_id = $("#supplier_id").val();
    var vsupplier_name = $("#supplier_name").val();
    var valamat = $("#alamat").val();
    var vprov_id = $("#prov_id").val();
    var vkab_id = $("#kab_id").val();
    var vkec_id = $("#kec_id").val();
    var vtelp = $("#telp").val();
    var vemail = $("#email").val();
    var vbank_id = $("#bank_id").val();
    var vno_rekening = $("#no_rekening").val();
    var vrek_name = $("#rek_name").val();

    var value = {
      supplier_id: vsupplier_id,
      supplier_name: vsupplier_name,
      alamat: valamat,
      prov_id: vprov_id,
      kab_id: vkab_id,
      kec_id: vkec_id,
      telp: vtelp,
      email: vemail,
      bank_id: vbank_id,
      no_rekening: vno_rekening,
      rek_name: vrek_name
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
    $("#supplier_name").val("");
    $("#alamat").val("");
    $("#telp").val("");
    $("#email").val("");
    $("#bank_id").val("");
    $("#no_rekening").val("");
    $("#rek_name").val("");
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