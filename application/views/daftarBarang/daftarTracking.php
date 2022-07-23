<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>

    <title><?= $info->nama_toko ?></title>
</head>

<body style="background-color: #dbdbdb;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('DaftarBarang') ?>"><?= $info->nama_toko ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('DaftarBarang') ?>">Home</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li> -->

                </ul>
                <!-- <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            hai <?= $this->session->userdata('nama');  ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('DaftarBarang/Profil') ?>">Profil</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('Overview/logout') ?>">Keluar</a></li>
                        </ul>
                    </li>
                </ul> -->
                <form class="d-flex mr-3">
                    <a href="<?= base_url('DaftarBarang/Tracking') ?>" class="btn btn-outline-success" type="submit">Pesanan</a>
                </form>
                <form class="d-flex mr-3">
                    <a href="<?= base_url('DaftarBarang/Pesanan') ?>" class="btn btn-outline-success" type="submit">Keranjang</a>
                </form>
                <form class="d-flex mr-3">
                    <a href="<?= base_url('DaftarBarang/Profil') ?>" class="btn btn-outline-success" type="submit">
                        hai <?= $this->session->userdata('nama');  ?>
                    </a>
                </form>
                <form class="d-flex mr-3">
                    <a href="<?= base_url('Overview/logout') ?>" class="btn btn-outline-success" type="submit">Keluar</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-body">
                <div class="row mt-2 ml-2 mr-2">
                    <?php foreach ($barang as $brg) : ?>
                        <div class="col-3 mt-3">
                            <img src="<?= base_url('assets/img/barang/' . $brg['gambar']) ?>" class="card-img-top" alt="..." height="300">
                        </div>
                        <div class="col-4">
                            <h4><?= $brg['nama_barang'] ?></h4>
                            <table>
                                <tr>
                                    <td>
                                        <p>Harga Barang Rp.<?= $this->MFunction->idr($brg['harga_jual']) ?></p>
                                    </td>
                                    <td>
                                        <p>Ongkir (JNT) Rp.<?= $this->MFunction->idr($brg['ongkir']) ?></p>
                                    </td>
                                    <td>
                                        <p>Total Pembelian Rp.<?= $this->MFunction->idr($brg['total_pembelian']) ?></p>
                                    </td>
                                </tr>
                            </table>
                            <h5>Detail</h5>
                            <p><?= $brg['deskripsi'] ?></p>
                            <h5>Berang Barang</h5>
                            <p><?= $brg['berat_barang'] ?> Kg</p>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Status Pemesanan</h4>
                                    <hr>
                                    <form action="<?= base_url('DaftarBarang/order') ?>" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-6 col-form-label-sm">Status Pemesanan</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-sm" id="count" placeholder="Jumlah Beli" value="<?= $brg['status_pemesanan'] ?>" name="jumlah_beli" readonly>
                                                    </div>
                                                    <input type="hidden" value="<?= $brg['id_po'] ?>" id="id_po" name="id_po">
                                                    <input type="hidden" value="<?= $brg['harga_jual'] ?>" id="id_po" name="harga_barang">
                                                </div>
                                                <?php if ($brg['id_status'] == 8) { ?>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-6 col-form-label-sm">Nomor Resi</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control form-control-sm" id="count" placeholder="Jumlah Beli" value="<?= $brg['nomor_resi'] ?>" name="nomor_resi" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mt-2">
                                                        <a href="https://jet.co.id/track" class="btn btn-sm btn-info">
                                                            <i class="fas fa-dolly"></i> Lacak Barang
                                                        </a>
                                                    </div>
                                                <?php } else if ($brg['id_status'] == 5) { ?>
                                                    <form action="">
                                                        <br>
                                                        <a href="<?= base_url("DaftarBarang/detailOrder/") . $brg['id_po'] ?>" class="btn btn-sm btn-info">
                                                            Lanjut Pembelian
                                                        </a>

                                                    <?php } ?>

                                            </div>
                                        </div>
                                        <div class="row">

                                        </div>

                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>


    <script>
        $('#count').on('keyup', function() {
            var input = $(this).val();
            subtotal = input * $("#subtotal").val();
            $("#subtotal").val(subtotal);
        });

        function beli() {
            debugger
            PatchURL = url.concat('/DaftarBarang/order');
            var vid_po = $("#id_po").val();
            var vcount = $("#count").val();
            var vsub_total = $("#sub_total").val();

            var value = {
                id_po: vid_id,
                count: vcount,
                sub_total: vsub_total,
            };

            $.ajax({
                type: "POST",
                url: PatchURL,
                data: value,
                cache: false,
                success: function(data, textStatus, jqXHR) {
                    debugger
                    //var data = jQuery.parseJSON(data);
                    toastr.success('Barang berhasil dibeli.');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    toastr.error('Barang gagal dibeli.');
                }
            });
        }
    </script>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
<footer>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#"> Jika Terjadi kesalahan atau ada masalah silahkan Hubungi : <?= $info->no_hp ?> </a>
    </li>
</footer>

</html>