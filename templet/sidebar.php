<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Perpusku</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/foto1.JPG" class="img-circle elevation-3" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">
            <?php
              echo $_SESSION['username']
            ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item ">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashbosrd
              </p>
            </a>
        </li>

          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Buku
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_buku.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_buku.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Peminjaman
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_pinjam.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pinjam Buku</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="data_pinjam.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Pinjam</p>
                </a>
              </li>

            </ul>
          </li>
          
          
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_customer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_customer.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_admin.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>