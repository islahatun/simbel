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
            <form id="form_pesanan" class="form-horizontal">
              <!-- /.card-header -->
              <div class="card-body">
                <input type="hidden" id="id_pemesanan" value="<?= $ao->id_pemesanan ?>">
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label-sm">Nama Barang</label>
                  <div class="col-sm-10">
                    <select class="form-control form-control-sm" required id="id_po">
                      <option value="<?= $ao->id_po ?>"><?= $ao->nama_barang ?> </option>
                      <?php
                      foreach ($barang as $sp) : ?>
                        <option value="<?= $sp->id_po ?>"><?= $sp->nama_barang ?> </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label-sm">Harga Barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" required id="harga_barang" placeholder="Harga Barang" value="<?= $ao->harga_barang ?>">
                  </div>
                </div>
                <div class=" form-group row">
                  <label for="" class="col-sm-2 col-form-label-sm">Jumlah Beli</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" required id="jumlah_beli" placeholder="jumlah_beli" value="<?= $ao->jumlah_beli ?>">
                  </div>
                </div>
                <div class=" form-group row">
                  <label for="" class="col-sm-2 col-form-label-sm">Total Pembelian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm" required id="total_pembelian" placeholder="total_pembelian" value="<?= $ao->total_pembelian ?>">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-right">
                <a href="<?= base_url('ListPesananOffline'); ?>" type="button" class="btn btn-secondary">Kembali</a>
                <button type="button" class="btn btn-primary" onclick="updateSave()">Save</button>
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
  $('#harga_barang').on('keyup', function() {
    var input = $(this).val();

    $("#total_pembelian").val(input);
  });

  $('#jumlah_beli').on('keyup', function() {
    var input = $(this).val();
    subtotal = input * $("#harga_barang").val();
    $("#total_pembelian").val(subtotal);
  });


  function updateSave() {
    //debugger
    PatchURL = _baseurl.concat('/ListPesananOffline/updateSave');

    var vid_pemesanan = $("#id_pemesanan").val();
    var vnama_pelanggan = $("#nama_pelanggan").val();
    var vid_po = $("#id_po").val();
    var vharga_barang = $("#harga_barang").val();
    var vjumlah_beli = $("#jumlah_beli").val();
    var vtotal_pembelian = $("#total_pembelian").val();
    // var vfoto = $("#foto").val();

    var value = {
      id_pemesanan: vid_pemesanan,
      nama_pelanggan: vnama_pelanggan,
      id_po: vid_po,
      harga_barang: vharga_barang,
      jumlah_beli: vjumlah_beli,
      total_pembelian: vtotal_pembelian,
      // foto: vfoto,

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
    $("#status_pemesanan").val("");
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