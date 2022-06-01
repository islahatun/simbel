<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $this->view('_parent/head.php');
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url('assets/theme/img/logoIDI.png'); ?>" alt="" height="60" width="60">
  </div>

  <?php
    $this->view('_parent/navbar.php');
    $this->view('_parent/main_sidebar.php');
  ?>

  <?= 
    $content_overview; 
  ?>

  <?php
    $this->view('_parent/footer.php');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
