<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard')?>">
        <div class="sidebar-brand-icon">
        <i class="far fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIPELITA</div>
    </a>

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengolahan Data
    </div>

    <!-- Nav Item - Charts -->
    <!--<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dashboard')?>">
        <i class="fas fa-chart-line"></i>
        <span>Dashboard</span></a>
    </li>-->

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_admin')?>">
        <i class="fas fa-user-tie"></i>
        <span>Admin</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_paket')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Paket</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_pelanggan')?>">
        <i class="fas fa-user-friends"></i>
        <span>Pelanggan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_penginapan')?>">
        <i class="fas fa-hotel"></i>
        <span>Penginapan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_transportasi')?>">
        <i class="fas fa-bus"></i>
        <span>Transportasi</span></a>
    </li>

    <!--<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('edit_transport')?>">
        <i class="fas fa-hotel"></i>
        <span>Edit Transportasi</span></a>-->

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_wisata')?>">
        <i class="fas fa-torii-gate"></i>
        <span>Wisata</span></a>
    </li>

    <!--<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('edit_wisata')?>">
        <i class="fas fa-torii-gate"></i>
        <span>Edit Wisata</span></a>
    </li>-->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('data_pesanan')?>">Transaksi Paket</a>
            <a class="collapse-item" href="<?php echo base_url('transaksi_homestay/trans_home') ?>">Transaksi Homestay</a>
            <a class="collapse-item" href="<?php echo base_url('transaksi_homestay/trans_sport') ?>">Transaksi Transport</a>
            <a class="collapse-item" href="<?php echo base_url('transaksi_homestay/trans_wis') ?>">Transaksi Wisata</a>
        </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>INVOICES</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('invoice_all/paket')?>">PAKET</a>
            <a class="collapse-item" href="<?php echo base_url('invoice_all/homestay') ?>">HOMESTAY</a>
            <a class="collapse-item" href="<?php echo base_url('invoice_all/transport') ?>">TRANSPORT</a>
            <a class="collapse-item" href="<?php echo base_url('invoice_all/wisata') ?>">WISATA</a>
        </div>
        </div>
    </li>
    <!--<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('data_pesanan')?>">
        <i class="fas fa-torii-gate"></i>
        <span>Transaksi</span></a>
    </li>-->

    <!--<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Invoices')?>">
        <i class="fas fa-torii-gate"></i>
        <span>Transaksi ada Detail</span></a>
    </li>-->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
            </div>
        </form> -->

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

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-success">
                    <i class="fas fa-donate text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-warning">
                    <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                </div>
                <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                </div>
                <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <ul class="na navbar-nav navbar-right mt-4">
                <?php if($this->session->userdata('username')) { ?>
                    <li>
                        <div>Selamat Datang, <?php echo $this->session->userdata('username')?>!</div>
                    </li>
                    ||
                    <li class="ml-2">
                        <?php echo anchor('auth/logout', 'Logout')?>
                    </li>
                <?php }else{ ?>
                    <li>
                        <?php echo anchor('auth/login', 'Login') ?>
                    </li>
                <?php } ?>
            </ul>
        </ul>

        </nav>
        <!-- End of Topbar -->