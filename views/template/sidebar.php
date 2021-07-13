  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="<?= base_url('assets') ?> /img/BPBDclp.png" width="40px" alt="" class="brand-image img-circle elevation-3">
          <span class="brand-text font-weight-light ml-2">SIPEKEBENCI</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-header">ADMIN</li>
                  <?php if ($user['level_id'] == 1) { ?>
                      <li class="nav-item">
                          <a href="<?= site_url('supadmin'); ?>" class="nav-link ">
                              <i class="nav-icon fal fa-tachometer-alt"></i>
                              <p>
                                  Dashboard
                              </p>
                          </a>
                      </li>
                  <?php } else if ($user['level_id'] == 2) { ?>
                      <li class="nav-item">
                          <a href="<?= site_url('admin'); ?>" class="nav-link ">
                              <i class="nav-icon fal fa-tachometer-alt"></i>
                              <p>
                                  Dashboard
                              </p>
                          </a>
                      </li>

                  <?php } else if ($user['level_id'] == 3) { ?>
                      <li class="nav-item">
                          <a href="<?= site_url('Petugas_piket'); ?>" class="nav-link ">
                              <i class="nav-icon fal fa-tachometer-alt"></i>
                              <p>
                                  Dashboard
                              </p>
                          </a>
                      </li>
                  <?php } ?>

                  <?php if ($user['level_id'] == 1) { ?>
                      <li class="nav-header">Menu</li>
                      <li class="nav-item">
                          <a href="<?= site_url('supadmin/akun'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-user"></i>
                              <p>
                                  Manajemen Akun
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= site_url('supadmin/lihatLaporan'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-file-signature"></i>
                              <p>
                                  Lihat Laporan
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= site_url('supadmin/Print'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-file-signature"></i>
                              <p>
                                  Print
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= site_url('supadmin/lihatLogbook'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-file-signature"></i>
                              <p>
                                  lihatlogbook
                              </p>
                          </a>
                      </li>
                  <?php } elseif ($user['level_id'] == 2) { ?>
                      <li class="nav-header">Menu</li>
                      <li class="nav-item">
                          <a href="<?= site_url('admin/formlaporan'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-exclamation-triangle"></i>
                              <p>
                                  Form Laporan Kejadian
                              </p>
                          </a>
                      </li>
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>
                                  Lihat Laporan
                                  <i class="fas fa-angle-left right"></i>
                                  <span class="badge badge-info right"></span>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="<?= site_url('admin/Laporan_Rumah'); ?>" class="nav-link">
                                      <i class="nav-icon fas fa-file-signature"></i>
                                      <p>
                                          Laporan Rumah
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= site_url('admin/Laporan_Fasilitas'); ?>" class="nav-link">
                                      <i class="nav-icon fas fa-file-signature"></i>
                                      <p>
                                          Laporan Fasilitas Umum
                                      </p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="<?= site_url('admin/Laporan_Lain'); ?>" class="nav-link">
                                      <i class="nav-icon fas fa-file-signature"></i>
                                      <p>
                                          Laporan Lainnya
                                      </p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  <?php } elseif ($user['level_id'] == 3) { ?>
                      <li class="nav-header">Menu</li>
                      <li class="nav-item">
                          <a href="<?= site_url('Petugas_piket/logbook'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-file-signature"></i>
                              <p>
                                  Log Book
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="<?= site_url('Petugas_piket/tampilLogbook'); ?>" class="nav-link ">
                              <i class="nav-icon fas fa-table"></i>
                              <p>
                                  Lihat Log Book
                              </p>
                          </a>
                      </li>

                  <?php } ?>



                  <li class="nav-header">Log Out</li>
                  <li class="nav-item">
                      <a href="<?= site_url('auth/logout') ?>" class="nav-link " data-toggle="modal" data-target="#logoutModal">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>
                              Log Out
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>