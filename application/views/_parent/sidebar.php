    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional)
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/theme/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php
          $main_menu = $this->db->order_by('sort', 'ASC')->get_where('sys_navbar', array('parent_id' => 0, 'active' => 1));
          foreach ($main_menu->result() as $main) {
            //Query untuk mencari data sub menu
            $sub_menu = $this->db->order_by('sort', 'ASC')->get_where('sys_navbar', array('parent_id' => $main->navbar_id, 'active' => 1));
            //periksa apakah ada sub menu
            if ($sub_menu->num_rows() > 0) {
          ?>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <?= $main->navbar_icon; ?>
                  <p><?= $main->navbar_name; ?>
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <?php
                  foreach ($sub_menu->result() as $sub) {
                  ?>
                    <li class="nav-item">
                      <a href="<?= base_url($sub->link); ?>" class="nav-link">
                        <i class="nav-icon fas fa-empty-set"></i>
                        <p><?= $sub->navbar_name; ?></p>
                      </a>
                    </li>
                  <?php
                  }
                  ?>
                </ul>
              </li>
            <?php
            } else {
            ?>
              <li class="nav-item">
                <a href="<?= base_url($main->link); ?>" class="nav-link">
                  <?= $main->navbar_icon; ?>
                  <p><?= $main->navbar_name; ?></p>
                </a>
              </li>
          <?php
            }
          }
          ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <script>
      <?= $this->uri->segment(1) == $sub->link ? ' active' : '' ?>
      /*
      $(document).ready(function(e){
      var url=window.location
      $('.treeview-menu a').each(function(e){
          var link = $(this).attr('href');
          if(link==url){
              $(this).parent('li').addClass('active');
              $(this).closest('.treeview').addClass('active');
          }
      });   
      */
    </script>