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
            <form id="form_obat" class="form-horizontal">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Kode Obat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="kode_obat" placeholder="Kode Obat" value="<?= $o->kode_obat; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Nama Item</label>
                      <div class="col-sm-9">
                        <input type="hidden" class="form-control form-control-sm" id="id_obat" value="<?= $o->id_obat; ?>">
                        <input type="text" class="form-control form-control-sm" id="nama_obat" placeholder="Nama Item" value="<?= $o->nama_obat; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Dosis</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="dosis" placeholder="Dosis" value="<?= $o->dosis; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Satuan Dosis</label>
                      <div class="col-sm-9">
                        <select id="satdos" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">--Pilih Satuan Dosis--</option>
                          <?php
                          foreach ($satdos as $sd) {
                            if ($o->dosis_name == $sd->dosis_name) { ?>
                              <option value="<?= $sd->dosis_name; ?>" selected="selected"><?= $sd->dosis_name; ?></option>
                            <?php
                            } else {
                            ?>
                              <option value="<?= $sd->dosis_name; ?>"><?= $sd->dosis_name; ?></option>
                          <?php
                            }
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Jenis Obat</label>
                      <div class="col-sm-9">
                        <select id="jenis_obat_name" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">--Pilih Jenis Obat--</option>
                          <?php
                          foreach ($kategori as $jo) {
                            if ($o->jenis_obat_name == $jo->jenis_obat_name) { ?>
                              <option value="<?= $jo->jenis_obat_name; ?>" selected="selected"><?= $jo->jenis_obat_name; ?></option>
                            <?php
                            } else {
                            ?>
                              <option value="<?= $jo->jenis_obat_name; ?>"><?= $jo->jenis_obat_name; ?></option>
                          <?php
                            }
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Satuan Obat</label>
                      <div class="col-sm-9">
                        <select id="satuan_name" class="form-control form-control-sm select2" style="width: 100%;">
                          <option value="" selected="selected">--Pilih Satuan Obat--</option>
                          <?php
                          foreach ($satuan as $k) {
                            if ($o->satuan_name == $k->satuan_name) { ?>
                              <option value="<?= $k->satuan_name; ?>" selected="selected"><?= $k->satuan_name; ?></option>
                            <?php
                            } else {
                            ?>
                              <option value="<?= $k->satuan_name; ?>"><?= $k->satuan_name; ?></option>
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
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Stock Minimal</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="stock_minimal" placeholder="Stock Minimal" value="<?= $o->stock_minimal; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Stock</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="stock" placeholder="Stock" value="<?= $o->stock; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Harga Pokok</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="harga_pokok" placeholder="Harga Pokok" value="<?= $o->harga_pokok; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Harga Resep</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="harga_resep" placeholder="Harga Resep" value="<?= $o->harga_resep; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label col-form-label-sm text-right">Harga Non Resep</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" id="harga_nonresep" placeholder="Harga Non Resep" value="<?= $o->harga_nonresep; ?>">
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <div class="card-footer text-right">
                  <a href="<?= base_url('obat'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                  <button type="button" class="btn btn-primary" onclick="updateSaveObat()">Save</button>
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
  function updateSaveObat() {
    //debugger
    PatchURL = _baseurl.concat('/obat/updateSave');

    var vid_obat = $("#id_obat").val();
    var vnama_obat = $("#nama_obat").val();
    var vkode_obat = $("#kode_obat").val();
    var vdosis = $("#dosis").val();
    var vdosis_name = $("#satdos").val();
    var vjenis_obat_name = $("#jenis_obat_name").val();
    var vsatuan_name = $("#satuan_name").val();
    var vstock_minimal = $("#stock_minimal").val();
    var vstock = $("#stock").val();
    var vharga_pokok = $("#harga_pokok").val();
    var vharga_resep = $("#harga_resep").val();
    var vharga_nonresep = $("#harga_nonresep").val();

    var value = {
      id_obat: vid_obat,
      nama_obat: vnama_obat,
      kode_obat: vkode_obat,
      dosis: vdosis,
      dosis_name: vdosis_name,
      jenis_obat_name: vjenis_obat_name,
      satuan_name: vsatuan_name,
      stock_minimal: vstock_minimal,
      stock: vstock,
      harga_pokok: vharga_pokok,
      harga_resep: vharga_resep,
      harga_nonresep: vharga_nonresep
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