<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <a class="navbar-brand text-primary font-weight-bold" href="<?php echo base_url(); ?>">
    <span class="nama-web">DEKAT ITS</span>
        </a>

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

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Category Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span>Kategori</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-primary" href="./kategori/elektronik">
                <i class="fas fa-tv"></i> Elektronik
              </a>
              <a class="dropdown-item text-primary" href="./kategori/pakaian_pria">
                <i class="fas fa-tshirt"></i> Pakaian Pria
              </a>
              <a class="dropdown-item text-primary" href="<?php echo base_url(); ?>kategori/pakaian_wanita">
                <i class="fas fa-tshirt"></i> Pakaian Wanita
              </a>
              <a class="dropdown-item text-primary" href="<?php echo base_url(); ?>kategori/pakaian_anak_anak">
                <i class="fas fa-tshirt"></i> Pakaian Anak-anak
              </a>
              <a class="dropdown-item text-primary" href="<?php echo base_url(); ?>kategori/peralatan_olahraga">
                <i class="fas fa-futbol"></i> Peralatan Olahraga
              </a>
            </div>
          </li>

            <div class="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <?php
                  $keranjang = '<i class="fas fa-shopping-cart"></i> ' . $this->cart->total_items() . ' items'
                  ?>
                  <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                </li>
              </ul>

              <div class="topbar-divider d-none d-sm-block"></div>

              <ul class="na navbar-nav navbar-right">
                <?php if ($this->session->userdata('username')) { ?>
                  <li>
                    <div>Selamat Datang, <?php echo $this->session->userdata('username') ?>!</div>
                  </li>
                  <li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
                <?php } else { ?>
                  <li><?php echo anchor('auth/login', 'Login'); ?></li>
                <?php } ?>
              </ul>
            </div>
          </ul>
        </nav>