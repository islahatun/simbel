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

              <div class="row">
                <div class="col-md-6">
                  <h3 class="card-title"><?= $subtitle; ?></h3>
                </div>
                <div class="col-md-6 text-right">
                  <!-- <a href="<?= base_url('ListPesananOffline/add'); ?>" class="btn btn-sm btn-info">
                    <i class="fas fa-plus"></i> Tambah
                  </a> -->

                  <!-- <span class="d-flex pl-3"> -->
                  <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#login">
                    Tambah Pemesan
                  </button>
                  <button type="button" class="btn btn-outline-warning" onclick="bayar()">
                    Bayar
                  </button>
                  <a href="<?= base_url('ListPesananOffline/pdf') ?>" target="blank" class="btn btn-secondary btn-sm"><i class="fas fa-print"></i></a>
                  <!-- </span> -->
                </div>
              </div>
            </div>


            <!-- /.card-header -->
            <div class="card-body">
              <table id="tstatus" class="table  table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="col-md-1">No</th>
                    <!-- <th class="col-md-3">Id Pemesanan</th> -->
                    <th class="col-md-2 text-center">Id Pelanggan</th>
                    <th class="col-md-2 text-center">Nama Barang</th>
                    <th class="col-md-2 text-center">Harga Barang</th>
                    <th class="col-md-2 text-center">Jumlah Pesanan</th>
                    <th class="col-md-2 text-center">Total Pesanan</th>
                    <th class="col-md-2 text-center">Tanggal Pemesanan</th>
                    <th class="col-md-2 text-center">Status Pesanan</th>
                    <th class="col-md-2 text-center">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <!-- /.card-body -->
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

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Input nomor Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_pesanan" class="form-horizontal">
          <!-- /.card-header -->
          <div class="card-body">
            <form action="<?= base_url('ListPesananOffline/save') ?>" method="post"></form>

            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label-sm">Id Pelanggan</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" name="id_pelanggan" id="id_pelanggan" placeholder="Id Pelanggan">
              </div>

            </div>
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label-sm">Nama Barang</label>
              <div class="col-sm-8">
                <select class="form-control form-control-sm" id="id_po">
                  <?php
                  foreach ($barang as $sp) : ?>
                    <option value="<?= $sp->id_po ?>"><?= $sp->nama_barang ?> </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label-sm">Harga Barang</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="harga_barang" placeholder="Harga Barang">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label-sm">Jumlah Beli</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="jumlah_beli" placeholder="jumlah_beli">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label-sm">Total Pembelian</label>
              <div class="col-sm-8">
                <input type="text" class="form-control form-control-sm" id="total_pembelian" placeholder="total_pembelian">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-8">
                <input type="hidden" class="form-control form-control-sm" id="status_pemesanan" value=3>
              </div>
            </div>
          </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer text-right">
        <a href="<?= base_url('ListPesananOffline'); ?>" type="button" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary" onclick="saveAO()">Save</button>
      </div>
      </form>
    </div>
    <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
  </div>
</div>
</div>


<!-- Page specific script -->
<script>
  $('#harga_barang').on('keyup', function() {
    var input = $(this).val();

    $("#total_pembelian").val(input);
  });

  $('#jumlah_beli').on('keyup', function() {
    var input = $(this).val();
    subtotal = input * $("#total_pembelian").val();
    $("#total_pembelian").val(subtotal);
  });


  $(document).ready(function() {
    //debugger
    PatchURL = _url.concat('/datalist');
    $('#tstatus').DataTable({
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
        // {
        //   "data": "id_pemesanan",
        //   className: "align-middle small"
        // },
        {
          "data": "id_pelanggan",
          className: "align-middle small"
        },
        {
          "data": "nama_barang",
          className: "align-middle small"
        },
        {
          "data": "harga_barang",
          className: "align-middle small"
        },
        {
          "data": "jumlah_beli",
          className: "align-middle small"
        },
        {
          "data": "total_pembelian",
          className: "align-middle small"
        },
        {
          "data": "tanggal_pemesanan",
          className: "align-middle small"
        },
        {
          "data": "status_pemesanan",
          className: "align-middle small"
        },
        {
          "data": "btn_action",
          className: "align-middle text-center small"
        },
        // {
        //   "data": "print",
        //   className: "align-middle text-center small"
        // }
      ]
    });
  });

  function saveAO() {
    //debugger
    PatchURL = _baseurl.concat('/ListPesananOffline/save');

    var vid_pelanggan = $("#id_pelanggan").val();
    var vnama_pelanggan = $("#nama_pelanggan").val();
    var vid_po = $("#id_po").val();
    var vharga_barang = $("#harga_barang").val();
    var vjumlah_beli = $("#jumlah_beli").val();
    var vtotal_pembelian = $("#total_pembelian").val();
    var vfoto = $("#foto").val();

    var value = {
      id_pelanggan: vid_pelanggan,
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

        clearText();
      },
      error: function(jqXHR, textStatus, errorThrown) {
        toastr.error('Data gagal disimpan.');
      }
    });
  }


  function bayar() {
    //debugger
    PatchURL = _baseurl.concat('/ListPesananOffline/bayar');



    $.ajax({
      type: "POST",
      url: PatchURL,
      // data: value,
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
    $("#id_po").val();
    $("#harga_barang").val();
    $("#jumlah_beli").val();
    $("#total_pembelian").val();
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