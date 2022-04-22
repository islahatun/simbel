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
                    <h1> <?= $title; ?></h1>
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

                        <div class="card-body">
                            <div class="row">
                                <!-- colomn 1 -->
                                <div class="col">
                                    <div class="col-sm mb-3">
                                        <table width="100%" style="font-size: 13px;">
                                            <tbody>
                                                <tr>
                                                    <td>No Pendaftaran</td>
                                                    <td>: <?= $di->id_pendaftaran ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No KTP</td>
                                                    <td>: <?= $di->identitas_id ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No RM</td>
                                                    <td>: <?= $di->pasien_id ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>: <?= $di->name ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <table width="100%" style="font-size: 13px;">
                                            <tbody>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>: <?= $di->alamat ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kontak</td>
                                                    <td>: <?= $di->telp ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Datang</td>
                                                    <td>: <?= $di->tanggal_pendaftaran ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Dokter</td>
                                                    <td>: <?= $di->nama_dokter ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Penanggung</td>
                                                    <td>: <?= $di->jenis_pasien ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col">
                                    <div class="col-sm mb-6">
                                        <div style="font-size: 14px;font-weight:bold;"><i class="fa fa-list"></i> Daftar Biaya </div>
                                        <div style="border:solid 1px #ccc;padding: 10px;">
                                            <table style="margin-top:5px; font-size: 13px;" width="100%">
                                                <thead>
                                                    <tr style="font-weight:bold;border-bottom:solid 1px #ccc;height:20px;">
                                                        <td width="60%">BIAYA</td>
                                                        <td style="text-align:right;">TARIF</td>
                                                        <td style="text-align:right;">SELISIH</td>
                                                        <td style="text-align:right;">TOTAL</td>
                                                    </tr>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="3" style="font-weight:bold;">Obat</td>
                                                    </tr>
                                                    <?php
                                                    foreach ($list as $v) :
                                                    ?>
                                                        <tr>

                                                            <td><?= $v['nama_obat'] ?> <?= $v['quantity'] ?></td>
                                                            <td><?= $v['harga_resep'] ?></td>
                                                            <td class="text-center">-</td>
                                                            <td><?= $v['harga_resep'] * $v['quantity'] ?></td>

                                                        </tr>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    <td colspan="3" style="font-weight:bold;">Pelayanan</td>
                                                    </tr>
                                                    <?php
                                                    foreach ($list_pelayanan as $v) :
                                                    ?>
                                                        <tr>

                                                            <td><?= $v['nama_pelayanan'] ?></td>
                                                            <td><?= $v['harga'] ?></td>
                                                            <td class="text-center">-</td>
                                                            <td><?= $v['harga'] ?></td>

                                                        </tr>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                </tbody>

                                            </table>
                                            <table>
                                                <tr style="border-top: solid 1px #ccc;">
                                                    <td></td>
                                                    <td></td>
                                                    <td style="text-align: right;font-size: 13px;"><b>SUB TOTAL</b></td>
                                                    <td style="color: white;">----------------------</td>

                                                    <td style="text-align: right;font-weight: bold;font-size: 13px; ">
                                                        <?php foreach ($list as $l) {
                                                            $harga_resep[]    = $l['harga_resep'];
                                                            $quantity[]    = $l['harga_resep'] * $l['quantity'];
                                                        }
                                                        foreach ($list_pelayanan as $l) {
                                                            $harga[]    = $l['harga'];
                                                        }
                                                        $pelayanan = array_sum($harga);
                                                        $obat = array_sum($quantity);
                                                        $total_harga    = $obat + $pelayanan;
                                                        echo $this->MFunction->idr($total_harga); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td style="text-align: right;font-size: 13px;"><b>TOTAL DISKON</b></td>
                                                    <td style="text-align: right;font-weight: bold;font-size: 13px; ">
                                                    </td>
                                                    <td>------------------</td>

                                                </tr>
                                                <tr style="border-top: solid 1px #ccc;">
                                                    <td></td>
                                                    <td></td>
                                                    <td style="text-align: right;font-size: 13px;"><b>GRAND TOTAL</b></td>
                                                    <td style="color: white;">----------------------</td>
                                                    <td style="text-align: right;font-size: 13px;">
                                                        <?php
                                                        foreach ($list as $l) {
                                                            $harga_resep[]    = $l['harga_resep'];
                                                            $quantity[]    = $l['harga_resep'] * $l['quantity'];
                                                        }
                                                        foreach ($list_pelayanan as $l) {
                                                            $harga[]    = $l['harga'];
                                                        }
                                                        $pelayanan = array_sum($harga);
                                                        $obat = array_sum($quantity);
                                                        $total_harga    = $obat + $pelayanan;
                                                        echo $this->MFunction->idr($total_harga);
                                                        ?>
                                                    </td>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
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
    $(document).ready(function() {
        //debugger
        var id_pendaftaran = $("#id_pendaftaran").val();
        PatchURL = _baseurl.concat('/Kasir/daftar_biaya/', id_pendaftaran);
        $('#biaya').DataTable({
            //"order": [2, "asc", 1, "asc"], //Initial no order.
            "destroy": true,
            "paging": false,
            "info": false,
            "searching": false,

            ajax: {
                type: "GET",
                url: PatchURL,
            },
            "columns": [{
                    "data": "nama_obat",
                    className: "align-middle small"
                },
                {
                    "data": "aturan",
                    className: "align-middle small"
                },
                {
                    "data": "quantity",
                    className: "align-middle small"
                },
                {
                    "data": "harga",
                    className: "align-middle small"
                },
                {
                    "data": "total",
                    className: "align-middle small"
                },
                {
                    "data": "quantity",
                    className: "align-middle small"
                },
                {
                    "data": "harga_resep",
                    className: "align-middle small"
                },
                {
                    "data": "harga_nonresep",
                    className: "align-middle small"
                },
                {
                    "data": "total",
                    className: "align-middle small text-center"
                }

            ]
        });
    });

    function prosesPembayaran() {

        // debugger
        var id_pendaftaran = $("#id_pendaftaran").val();
        PatchURL = _baseurl.concat('/Kasir/pembayaran/', id_pendaftaran);

        var vid_pendaftaran = $("#id_pendaftaran").val();
        var vid_obat = $("#id_obat").val();
        var vpasien_id = $("#pasien_id").val();
        var vid_dokter = $("#id_dokter").val();
        var vdiskon = $("#diskon").val();
        var vtotal_bayar = $("#total_bayar").val();

        var value = {
            id_pendaftaran: vid_pendaftaran,
            id_obat: vid_obat,
            pasien_id: vpasien_id,
            id_dokter: vid_dokter,
            total_bayar: vtotal_bayar,
            diskon: vdiskon,


        };

        $.ajax({
            type: "POST",
            url: PatchURL,
            data: value,
            cache: false,
            success: function(data, textStatus, jqXHR) {
                // debugger
                // var table = $('#tobat').DataTable();
                // table.ajax.reload();
                //var data = jQuery.parseJSON(data);
                toastr.success('Data berhasil disimpan.');
                window.location.href("Kasir/print");
                clearText();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Data gagal disimpan.');
            }
        });
    }

    function clearText() {

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