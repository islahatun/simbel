  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-dark elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>" class="brand-link bg-success">
      <img src="<?php echo base_url('assets/theme/img/logoIDI.png') ?>" alt="IDI" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-white">Praktek dr. Ricky</span>
    </a>

    <?php
    $this->view('_parent/sidebar.php');
    ?>
  </aside>