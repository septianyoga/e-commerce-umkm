<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="<?= base_url('admin') ?>" class="header-logo">
            <!-- <img src="<?= base_url('template/backend/html/') ?>assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo"> -->
            <h5 class="logo-title light-logo ml-3 text-success">UMKM <small class="d-block text-warning">RASA ALAMI</small></h5>
        </a>
        <div class="iq-menu-bt-sidebar ml-3">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="<?= $title == 'Dashboard Admin' ? 'active' : '' ?>">
                    <a href="<?= base_url('admin') ?>" onclick="showLoading()" class="svg-icon">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li class="<?= $title == 'Produk' ? 'active' : '' ?>">
                    <a href="<?= base_url('produk') ?>" onclick="showLoading()">
                        <i class="bi bi-cart2"></i>
                        <span>Produk</span>
                        <!-- <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg> -->
                    </a>
                </li>
                <li class="<?= $title == 'Paket Reseller' ? 'active' : '' ?>">
                    <a href="<?= base_url('paketreseller') ?>" onclick="showLoading()">
                        <i class="bi bi-inboxes"></i>
                        <span>Paket Reseller</span>
                        <!-- <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg> -->
                    </a>
                </li>
                <li class="<?= $title == 'Pesanan' ? 'active' : '' ?>">
                    <a href="<?= base_url('pesanan') ?>" onclick="showLoading()">
                        <i class="bi bi-cart-check"></i>
                        <span>Pesanan</span>
                        <!-- <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg> -->
                    </a>
                </li>
                <li class="<?= $title == 'Laporan' ? 'active' : '' ?>">
                    <a href="<?= base_url('laporan') ?>" onclick="showLoading()">
                        <i class="bi bi-journal-text"></i>
                        <span>Laporan</span>
                        <!-- <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg> -->
                    </a>
                </li>
                <li class="<?= $title == 'Galeri' ? 'active' : '' ?>">
                    <a href="<?= base_url('kelola_galeri') ?>" onclick="showLoading()">
                        <i class="bi bi-images"></i>
                        <span>Galeri</span>
                        <!-- <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg> -->
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="<?= base_url('admin') ?>" class="header-logo">
                    <!-- <img src="<?= base_url('template/backend/html/') ?>assets/images/logo.png" class="img-fluid rounded-normal" alt="logo"> -->
                    <h5 class="logo-title ml-2  text-success">UMKM <small class="text-secondary">RASA ALAMI</small></h5>

                </a>
            </div>
            <div class="iq-search-bar device-search">
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                                <span class="bg-primary "></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="cust-title p-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0">Notifications</h5>
                                                <a class="badge badge-primary badge-card" href="#">3</a>
                                            </div>
                                        </div>
                                        <div class="px-3 pt-0 pb-0 sub-card">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="<?= base_url('template/backend/html/') ?>assets/images/user/01.jpg" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Emma Watson</h6>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="<?= base_url('template/backend/html/') ?>assets/images/user/02.jpg" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Ashlynn Franci</h6>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="<?= base_url('template/backend/html/') ?>assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Kianna Carder</h6>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= base_url('template/backend/html/') ?>assets/images/user/1.png" class="img-fluid rounded" alt="user">
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 text-center">
                                        <div class="media-body profile-detail text-center">
                                            <img src="<?= base_url('template/backend/html/') ?>assets/images/page-img/profile-bg.jpg" alt="profile-bg" class="rounded-top img-fluid mb-4">
                                            <img src="<?= base_url('template/backend/html/') ?>assets/images/user/1.png" alt="profile-img" class="rounded profile-img img-fluid avatar-70">
                                        </div>
                                        <div class="p-3">
                                            <h5 class="mb-1"><?= session()->get('nama_user') ?></h5>
                                            <p class="mb-0"><?= session()->get('role') ?></p>
                                            <div class="d-flex align-items-center justify-content-center mt-3">
                                                <a href="<?= base_url('template/backend/html/') ?>app/user-profile.html" class="btn border mr-2">Profile</a>
                                                <a href="<?= base_url('auth/logout') ?>" onclick="showLoading()" class="btn border">Sign Out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <h4 class="mb-3">New Order</h4>
                    <div class="content create-workform bg-body">
                        <div class="pb-3">
                            <label class="mb-2">Email</label>
                            <input type="text" class="form-control" placeholder="Enter Name or Email">
                        </div>
                        <div class="col-lg-12 mt-4">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>