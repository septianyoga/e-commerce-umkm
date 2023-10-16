<header class="header1  has-sticky" id="main-header">
    <div class="container main-header">
        <div class="row no-gutters">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-xl navbar-light menu py-0">
                    <div class="logo_block align-items-center d-flex">
                        <a class="navbar-brand" onclick="showLoading()" href="<?= base_url('/') ?>">
                            <!-- <img class="img-fluid logo" src="<?= base_url('template/frontend/') ?>assets/images/logo.png" alt="foodsto"> -->
                            <!-- <img class="img-fluid  logo-sticky" src="<?= base_url('template/frontend/') ?>assets/images/logo.png" alt="foodsto"> -->
                            <h4 class="my-0 text-center text-primary">UMKM</h4>
                            <h6 class="my-0 text-center text-secondary">Rasa Alami</h6>
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="foodsto-menu-box navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div id="iq-menu-container" class="menu-main-menu-container">
                            <ul id="top-menu" class="navbar-nav">
                                <li class="<?= $title == 'Home' ? 'active' : '' ?> ">
                                    <a onclick="showLoading()" href="<?= base_url('/') ?>">Home
                                    </a>
                                </li>
                                <li class="<?= $title == 'Pesanan' ? 'active' : '' ?> ">
                                    <a onclick="showLoading()" href="<?= base_url('order') ?>">Pesanan
                                    </a>
                                </li>
                                <li class="<?= $title == 'About' ? 'active' : '' ?> ">
                                    <a onclick="showLoading()" href="<?= base_url('about') ?>">About
                                    </a>
                                </li>
                                <li class="<?= $title == 'Galeri' ? 'active' : '' ?> ">
                                    <a onclick="showLoading()" href="<?= base_url('galeri') ?>">Galeri
                                    </a>
                                </li>
                                <!-- <li class="">
                                    <a href="javascript:void(0)" class="menu-item">Shop <i class="fas fa-chevron-down  toggledrop"></i></a>
                                    <ul class="sub-menu">
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>category-list.html">category list</a></li>
                                        <li class="">
                                            <a href="javascript:void(0)" class="d-flex align-items-center justify-content-between">Shop Grid
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class=""><a href="<?= base_url('template/frontend/') ?>shop/shop-three-column.html">shop three column</a></li>
                                                <li class=""><a href="<?= base_url('template/frontend/') ?>shop/shop-four-column.html">shop four column</a></li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)" class="d-flex align-items-center justify-content-between">Shop With Sidebar
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class=""><a href="<?= base_url('template/frontend/') ?>shop/shop-left-sidebar.html">shop Left sidebar</a></li>
                                                <li class=""><a href="<?= base_url('template/frontend/') ?>shop/shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" class="menu-item">Product
                                        <i class="fas fa-chevron-down  toggledrop"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>product/new-product.html">New Product</a></li>
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>product/onSale.html">On Sale Product</a></li>
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>product/outOfStockProduct.html">Out Of Stock Product</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" class="menu-item">Blog
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>blog/one-column-blog.html">One Column Blog</a></li>
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>blog/two-column-blog.html">Two Column Blog</a></li>
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>blog/three-column-blog.html">Three Column Blog</a></li>
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html">Left Sidebar Blog</a></li>
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>blog/right-sidebar-blog.html">Right sidebar Blog</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="iq-shop-btn-holder">
                        <ul>
                            <li class="iq-cart">
                                <a href="javascript:void(0)" class="dropdown-back" data-bs-toggle="dropdown">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="basket-item-count" style="display: inline;"><span class="cart-items-count count" id="addcart"><span id="cart">0</span><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>0.00</bdi></span></span></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-mini-cart">
                                    <div class="widget_shopping_cart_content ">
                                        <?php if (session()->get('role')) { ?>
                                            <div>
                                                <div class="d-flex flex-column justify-content-center shopping_cart_content" style="min-height: 100px; height:auto;">
                                                    <div class="pasteCart">
                                                        <?php if ($cart != null) { ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between pt-3 border-top mt-3">
                                                    <!-- <p><strong>Subtotal:</strong></p> -->
                                                    <?php
                                                    //  if ($cart != null) {
                                                    //     $subtotal = 0;
                                                    //     foreach ($cart as $row) {
                                                    //         $subtotal = $subtotal + ($row['qty'] * $row['harga_produk']);
                                                    //     }
                                                    //     echo $subtotal;
                                                    // } 
                                                    ?>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <!-- <div class="iq-button-viewcart">
                                                        <a href="<?= base_url('cart') ?>" class="text-white">
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-1 iq-button-effact">
                                                                    VIEW CART
                                                                </span>
                                                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                            </div>
                                                        </a>
                                                    </div> -->
                                                    <div class=" iq-button-viewcart iq-button-checkout w-100 text-center">
                                                        <a onclick="showLoading()" href="<?= base_url('checkout') ?>" class="text-white">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <span class="me-1 iq-button-effact">
                                                                    CHECKOUT
                                                                </span>
                                                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <h6 class="text-center">Anda Harus Login Terlebih Dahulu.</h6>
                                        <?php } ?>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none">
                                <div class="wishlist_count ">
                                    <a onclick="showLoading()" href="<?= base_url('template/frontend/') ?>wishlist.html" data-count="0">
                                        <i class="fa fa-heart"></i>
                                        <span class="wcount">0</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div id="iq-menu-container" class="menu-main-menu-container">
                            <ul id="top-menu" class="navbar-nav">
                                <?php if (session()->get('role')) { ?>
                                    <li class="iq-cart">
                                        <a href="javascript:void(0)" class="dropdown-back " data-bs-toggle="dropdown">
                                            <span><?= session()->get('nama_user') ?></span>
                                            <small style="font-size: 0.7rem;">(<?= session()->get('role') ?>)</small>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-mini-cart" style="margin-left: -10px !important;">
                                            <div class="widget_shopping_cart_content">
                                                <a onclick="showLoading()" href="<?= base_url('auth/logout') ?>" class="text-center d-flex justify-content-center align-items-center">Logout <i class="bi bi-box-arrow-right ms-1 fs-6"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                <?php } else { ?>
                                    <li class="">
                                        <a onclick="showLoading()" href="<?= base_url('auth ') ?>">
                                            Login
                                            <i class="bi bi-box-arrow-in-right"></i>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>