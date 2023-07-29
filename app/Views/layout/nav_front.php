<header class="header1  has-sticky" id="main-header">
    <div class="container main-header">
        <div class="row no-gutters">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-xl navbar-light menu py-0">
                    <div class="logo_block align-items-center d-flex">
                        <a class="navbar-brand" href="<?= base_url('template/frontend/') ?>index.html">
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
                                <li class="active ">
                                    <a href="javascript:void(0)" aria-current="page" class="menu-item">Home
                                        <i class="fas fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="current-menu-item"><a href="<?= base_url('template/frontend/') ?>index.html" aria-current="page">Main Home</a></li>
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>home-2.html">Home 2</a></li>
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>home-3.html">Home 3</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" class="menu-item">Pages
                                        <i class="fas fa-chevron-down  toggledrop"></i></a>
                                    <ul class="sub-menu">
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>about-us.html">About Us</a></li>
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>our-team.html">Our Team</a></li>
                                        <li class=""><a href="<?= base_url('template/frontend/') ?>contact-us.html">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li class="">
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
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="iq-shop-btn-holder">
                        <ul>
                            <li class="iq-cart">
                                <a href="javascript:void(0)" class="dropdown-back" data-bs-toggle="dropdown">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="basket-item-count" style="display: inline;"><span class="cart-items-count count">4<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>0.00</bdi></span></span></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-mini-cart">
                                    <div class="widget_shopping_cart_content ">
                                        <div>
                                            <div class="d-flex flex-column justify-content-between shopping_cart_content">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <a href="<?= base_url('template/frontend/') ?>product/new-product.html"><img class="images-size rounded" alt="header-img" src="<?= base_url('template/frontend/') ?>assets/images/product/04.png"></a>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">Juice-snacks</h6>
                                                            <span>1 × $200.00</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a class="iq-product-remove" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-between mt-3 ">
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <a href="<?= base_url('template/frontend/') ?>product/new-product.html"><img class="images-size rounded" alt="header-img" src="<?= base_url('template/frontend/') ?>assets/images/product/01.jpg"></a>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">Chips</h6>
                                                            <span>1 × $10.00</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a class="iq-product-remove" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-between mt-3">
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <a href="<?= base_url('template/frontend/') ?>product/new-product.html"><img class="images-size rounded" alt="header-img" src="<?= base_url('template/frontend/') ?>assets/images/product/03.jpg"></a>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">Bread Breakfast</h6>
                                                            <span>1 × $7.50</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a class="iq-product-remove" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-between mt-3">
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <a href="<?= base_url('template/frontend/') ?>product/new-product.html"><img class="images-size rounded" alt="header-img" src="<?= base_url('template/frontend/') ?>assets/images/product/13.jpg"></a>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">Broccoli</h6>
                                                            <span>1 × $15</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a class="iq-product-remove" href="javascript:void(0)"><i class="fas fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pt-3 border-top mt-3">
                                                <p><strong>Subtotal:</strong></p>
                                                <p>$232.50</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="iq-button-viewcart">
                                                    <a href="<?= base_url('template/frontend/') ?>cart.html" class="text-white">
                                                        <div class="d-flex align-items-center">
                                                            <span class="me-1 iq-button-effact">
                                                                VIEW CART
                                                            </span>
                                                            <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class=" iq-button-viewcart iq-button-checkout">
                                                    <a href="<?= base_url('template/frontend/') ?>checkout.html" class="text-white">
                                                        <div class="d-flex  align-items-center">
                                                            <span class="me-1 iq-button-effact">
                                                                CHECKOUT
                                                            </span>
                                                            <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="wishlist_count">
                                    <a href="<?= base_url('template/frontend/') ?>wishlist.html" data-count="0">
                                        <i class="fa fa-heart"></i>
                                        <span class="wcount">0</span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a href="<?= base_url('auth ') ?>">
                                    Login
                                    <i class="bi bi-box-arrow-in-right"></i>
                                </a>
                                <!-- |
                                <a href="<?= base_url('auth ') ?>">
                                    Daftar
                                </a> -->
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>