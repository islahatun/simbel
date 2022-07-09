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
                    <div class="col-3">
                        <img src="<?= base_url('assets/img/barang/' . $detail['gambar']) ?>" class="card-img-top" alt="...">
                    </div>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">

                                <label for="">Detail Pemesanan:</label>


                                <?= form_open_multipart('DaftarBarang/pembayaran'); ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Nama Barang</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control-plaintext form-control-plaintext-sm" id="count" placeholder="Jumlah Beli" value="<?= $detail['nama_barang'] ?>" name="nama_barang">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Jumlah Pemebelian</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control-plaintext form-control-plaintext-sm" id="count" placeholder="Jumlah Beli" value="<?= $barang['jumlah_beli'] ?>" name="jumlah_beli">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Harga Barang</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control-plaintext form-control-plaintext-sm" id="count" placeholder="Jumlah Beli" value="<?= $barang['harga_barang'] ?>" name="harga_barang" readonly>
                                            </div>

                                        </div>
                                        <div>
                                            <div class="form-group row mt-3 mb-3">
                                                <label for="" class="col-sm-4 col-form-label-sm">Sub total</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control-plaintext form-control-plaintext-sm" id="subtotal" value="<?= $barang['total_pembelian'] ?>" name="total_pembelian">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                Detail Pengiriman:

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Nama Pemesan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control-plaintext form-control-plaintext-sm" id="count" placeholder="Jumlah Beli" value="<?= $this->session->userdata['nama'] ?>" name="nama_barang">
                                            </div>

                                        </div>
                                        <?php
                                        $data = " select * from dm_pengguna where " ?>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">Alamat</label>
                                            <div class="col-sm-8">
                                                <p><?= $pengguna->alamat ?></p>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4 col-form-label-sm">No Hp</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control-plaintext form-control-plaintext-sm" id="subtotal" value="<?= $pengguna->no_telp ?>" name="total_pembelian">
                                            </div>

                                        </div>
                                        <div>
                                            <div class="form-group row mt-3 mb-3">
                                                <label for="" class="col-sm-4 col-form-label-sm">Sub total</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control-plaintext form-control-plaintext-sm" id="subtotal" value="<?= $barang['total_pembelian'] ?>" name="total_pembelian">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">

                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-outline-secondary" type="button" id="beli">Lanjut Pembayaran</button>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-4" id="col">
                        <div id="pembayaran">
                            <center>
                                <p style="color:red; font: size 15px;" id="demo"></p>
                            </center>
                            <div class="row">
                                <input type="hidden" value="<?= $barang['id_pemesanan'] ?>" name="id_pemesanan">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label-sm">Nomor Rekening Penjual</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control-plaintext form-control-plaintext-sm" id="count" placeholder="Jumlah Beli" value="<?= $toko['norekening'] . ' / a.n ' . $toko['pemilik_rekening'] . '-' . $toko['nama_bank'] ?>" name="nama_barang">
                                        </div>

                                    </div>
                                    <?php
                                    $data = " select * from dm_pengguna where " ?>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label-sm">Nomor Rekening</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm" id="count" placeholder="Masukkan Nomor Rekening" name="no_rekening">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4 col-form-label-sm">Bukti Pembayaran</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="foto" required>
                                        </div>

                                    </div>

                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-outline-secondary" type="submit">Bayar</button>
                                </div>
                                <!-- <div class="col-6">
                                    <button type='button' id='hapus' class='btn btn-sm btn-outline-danger'>
                                        <i class='fas fa-trash-alt'></i> Hapus
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                </form>
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

        $("#beli").click(function() {
            $('#pembayaran').show();
        });

        $(document).ready(function() {

            $('#pembayaran').hide()

        });

        // Set the date we're counting down to

        const today = new Date()
        const tomorrow = new Date(today)


        var countDownDate = tomorrow.setDate(tomorrow.getDate() + 1);

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);

        $(document).on("click", "#hapus", function() {
            //debugger
            var vid_pemesanan = $(this).attr("vid_pemesanan");

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

</html>