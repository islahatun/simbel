<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $this->view('_parent/head.php');
  ?>
</head>

<body class="login-page" style="min-height: 496.781px;">
  <div class="login-box">
    <div class="login-logo">
      <p>
        <img src="<?= base_url('assets/theme/img/logoIDI.png'); ?>" alt="IDI" class="brand-image img-circle elevation-3 w-25">
      </p>
      <a href="<?= base_url(); ?>"><b>Praktek dr. Ricky</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Login Form</p>

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
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
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