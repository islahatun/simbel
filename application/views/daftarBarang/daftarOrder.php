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
                        <div class="col-3">
                            <img src="<?= base_url('assets/img/barang/' . $brg['gambar']) ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="col-4">
                            <h4><?= $brg['nama_barang'] ?></h4>
                            <p>Rp.<?= $this->MFunction->idr($brg['harga_jual']) ?></p>
                            <h5>Detail</h5>
                            <p><?= $brg['deskripsi'] ?></p>
                            <h5>Berat Barang</h5>
                            <p><?= $brg['berat_barang'] ?>Kg</p>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Atur Jumlah</h4>
                                    <hr>
                                    <form action="<?= base_url('DaftarBarang/orderKeranjang') ?>" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-4 col-form-label-sm">Jumlah Beli</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control form-control-sm" id="count" placeholder="Jumlah Beli" value="1" name="jumlah_beli">
                                                    </div>
                                                    <input type="hidden" value="<?= $brg['id_po'] ?>" id="id_po" name="id_po">
                                                    <input type="hidden" value="<?= $this->MFunction->idr($brg['harga_jual']) ?>" id="harga_jual" name="harga_barang">
                                                    <input type="hidden" value="<?= $brg['id_pemesanan'] ?>" id="id_pemesanan" name="id_pemesanan">
                                                </div>
                                                <div class="form-group row mt-3 mb-3">
                                                    <label for="" class="col-sm-4 col-form-label-sm">Ongkir (JNT)</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control-plaintext form-control-plaintext-sm" id="ongkir" name="ongkir">
                                                        <input type="hidden" class="form-control-plaintext form-control-plaintext-sm" value="<?= $brg['berat_barang'] ?>" id="berat_barang" name="berat_barang">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-group row mt-3 mb-3">
                                                        <label for="" class="col-sm-4 col-form-label-sm">Sub total</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control-plaintext form-control-plaintext-sm" id="subtotal" value="<?= $this->MFunction->idr($brg['harga_jual']) ?>" name="total_pembelian">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table>
                                            <tr>
                                                <td> <button class="btn btn-sm btn-outline-secondary" type="submit">Beli</button>
                                    </form>
                                    </td>
                                    <td>
                                        <form action="<?= base_url('DaftarBarang/hapus') ?>" method="post">
                                            <div class="col-6">
                                                <input type="hidden" value="<?= $brg['id_pemesanan'] ?>" id="id_pemesanan" name="id_pemesanan">
                                                <button type='submit' class='btn btn-sm btn-outline-danger'>
                                                    <i class='fas fa-trash-alt'></i> Hapus
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    </tr>
                                    </table>
                                    <div class="row">
                                        <div class="col-6">

                                        </div>


                                    </div>


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
        // $('#count').on('keyup', function() {
        //     var input = $(this).val();
        //     subtotal = input * $("#harga_jual").val();
        //     $("#subtotal").val(subtotal);
        // });

        $(document).ready(function() {
            var berat = parseInt($("#berat_barang").val()) * 9500;
            var ongkir = $("#ongkir").val(berat);
            var sub_total = (parseInt($("#harga_jual").val()) + parseInt(berat));
            console.log(sub_total);
            $("#subtotal").val(sub_total);
        });



        $('#count').on('keyup', function() {
            var input = parseInt($(this).val());
            subtotal = (input * $("#harga_jual").val()) + parseInt(($("#berat_barang").val() + 9500));
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

        $(document).on("click", "#hapus", function() {
            //debugger
            var vid_pemesanan = $("#id_pemesanan").val();

            if (!vid_pemesanan) {
                toastr.error('Data gagal disimpan.');
                return
            }

            var value = {
                id_pemesanan: vid_pemesanan
            };

            Swal.fire({
                title: 'Apakah anda yakin.?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: _url.concat('/delete'),
                        data: value,
                        cache: false,
                        success: function(data, textStatus, jqXHR) {
                            debugger
                            var table = $('#po').DataTable();
                            table.ajax.reload();
                            toastr.success('Data berhasil disimpan.');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            toastr.error('Data gagal disimpan.');
                        }
                    });
                }
            })
        });
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