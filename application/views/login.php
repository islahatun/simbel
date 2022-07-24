<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $this->view('_parent/head.php');
  ?>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?= $info->nama_toko ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <span class="d-flex pl-3">
          <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#login">
            Masuk
          </button>
        </span>
        <span class="d-flex pl-3">
          <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#regis">
            Daftar
          </button>
        </span>
      </ul>
      <span class="navbar-text">
        Hubungi: <?= $info->no_hp ?>
      </span>
    </div>
  </nav>


  <?= $this->session->flashdata('message') ?>
  <?= $this->session->flashdata('error_login') ?>

  <!-- carousel -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url('assets/carousel/oem.jpg') ?>" class="d-block w-100" height="300" width="50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/carousel/aspira.jpg') ?>" class="d-block w-100" height="300" width="50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/carousel/aspira.jpg') ?>" class="d-block w-100" height="300" width="50" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--End carousel -->

  <!-- conten -->
  <div class="container-fluid">
    <div class="row mt-3"><?php foreach ($barang as $brg) : ?>
        <div class="col-sm-3 ">

          <div class="card" style="width: 16rem;">
            <img src="<?= base_url('assets/img/barang/' . $brg['gambar']) ?>" class="card-img-top" alt="..." height="300">
            <div class="card-body text-center">
              <h5 class="card-title"><?= $brg['nama_barang'] ?></h5>
              <p class="card-text"><?= $this->MFunction->idr($brg['harga_jual']) ?></p>
              <p class="card-text">Stok Barang : <?php if ($brg['stok'] < 0) {
                                                    echo 0;
                                                  } else {
                                                    echo $brg['stok'];
                                                  } ?></p>
              <a href="<?= base_url('DaftarBarang/detailNotLogin/' . $brg['id_po']) ?>" class="btn btn-primary">Detail Barang</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <!-- end Conten -->

  <!-- Modal -->
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginLabel">Masuk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="<?= base_url('Overview/login'); ?>">
          <div class="modal-body">
            <div class="input-group mb-3">
              <input type="text" name="nama" class="form-control" placeholder="Username" autocomplete="off">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="sandi" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="regis" tabindex="-1" aria-labelledby="regisLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="regisLabel">Daftar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url('Overview/regis'); ?>" autocomplete="off">
            <div class="modal-body">
              <div class="input-group mb-3">
                <input type="text" name="nama" class="form-control" placeholder="Username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" name="no_telp" class="form-control" placeholder="No Hp">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="sandi" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
      </div>
      </form>
    </div>
  </div>



















  <!-- <div class="login-box">
    <div class="login-logo">
      <p>
        <img src="<?= base_url('assets/images/logo.jpeg'); ?>" alt="IDI" class="brand-image img-circle elevation-3 w-25">
      </p>
      <a href="<?= base_url(); ?>"><b><?= $info->nama_toko ?></b></a>
    </div> -->
  <!-- /.login-logo -->
  <!-- <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Login Admin</p>

        <form method="post" action="<?= base_url('login/login'); ?>">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="pwd" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </div>
            <div>
              <a href="<?= base_url('Login/Regis') ?>">Silahkan Daftar Jika Belum memiliki Akun</a>
            </div> -->
  <!-- /.col -->
  <!-- </div>
        </form>
      </div> -->
  <!-- /.login-card-body -->
  <!-- </div>
  </div> -->
  <!-- /.login-box -->

  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/theme/js/adminlte.min.js'); ?>"></script>
  <!-- JS -->
  <script src="<?= base_url('assets/js/js.js'); ?>"></script>

</body>

</html>