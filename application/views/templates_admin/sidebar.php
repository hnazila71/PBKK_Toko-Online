<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <a class="navbar-brand text-primary font-weight-bold" href="<?php echo base_url('admin/dashboard'); ?>">
          <span class="nama-web">DEkAT ITS Administration</span>
              </a>

          <!-- Topbar Toggle (Sidebar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Data Barang -->
            <li class="nav-item">
              <a class="nav-link text-primary" href="<?php echo base_url('admin/data_barang') ?>">
                <span>Data Barang</span></a>
            </li>
            <!-- Nav Item - Invoice -->
            <li class="nav-item">
              <a class="nav-link text-primary" href="<?php echo base_url('admin/invoice') ?>">
                <span>Invoice</span></a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>  

            <ul class="navbar-nav navbar-right my-auto">
              <?php if ($this->session->userdata('username')) { ?>
                <li>
                  <div>Selamat Datang, <?php echo $this->session->userdata('username') ?>!</div>
                </li>
                <li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
              <?php } else { ?>
                <li><?php echo anchor('auth/login', 'Login'); ?></li>
              <?php } ?>
            </ul>
          </ul>

        </nav>
        <!-- End of Topbar -->