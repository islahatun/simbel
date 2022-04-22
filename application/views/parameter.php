  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 290px;">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-12">
                      <h1 class="m-0"><?= $title ?> <?= $this->session->userdata('status'); ?></h1>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <!-- Info boxes -->
              <div class="row">
                  <div class="col-12 col-sm-6 col-md-4">
                      <a href="<?= base_url('Satuan') ?>">
                          <div class="info-box">
                              <div class="info-box-content">
                                  <span class="info-box-text">Satuan Dosis</span>
                              </div>
                              <span class="info-box-icon bg-info elevation-1"><i class="fab fa-unity"></i></span>
                              <!-- /.info-box-content -->
                          </div>
                      </a>
                      <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-12 col-sm-6 col-md-4">
                      <a href="<?= base_url('KategoriProduk') ?>">
                          <div class="info-box mb-3">
                              <div class="info-box-content">
                                  <span class="info-box-text">Satuan Obat</span>
                              </div>
                              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>
                              <!-- /.info-box-content -->
                          </div>
                      </a>
                      <!-- /.info-box -->
                  </div>
                  <!-- /.col -->

                  <!-- fix for small devices only -->
                  <div class="clearfix hidden-md-up"></div>

                  <div class="col-12 col-sm-6 col-md-4">
                      <a href="<?= base_url('KategoriWaste') ?>">
                          <div class="info-box mb-3">
                              <div class="info-box-content">
                                  <span class="info-box-text">Kategori Waste</span>
                              </div>
                              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-trash-alt"></i></i></span>
                              <!-- /.info-box-content -->
                          </div>
                      </a>
                      <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
              </div>
              <!-- /.row -->
          </div>
          <!--/. container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->