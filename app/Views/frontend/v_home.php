<?= $this->extend('layout/main_front') ?>
<?= $this->section('content') ?>

<div class="banner section-padding-120 pb-0" id="home-1">
    <div class="slider-image" id="banner-slider-image">
        <div class="slider-2" style="background: url(<?= base_url('asset/foto/pisang.png') ?>) no-repeat top center !important;"></div>
        <div class="slider-3"></div>
        <div class="slider-4"></div>
        <div class="slider-5"></div>
        <div class="slider-6"></div>
        <div class="slider-text">
            <div class="scrolling-text vertical-scroll text-center">
                <div>Pisang</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center mt-mb-0 mb-4">
                <div class="hero-left">
                    <h2 id="banner-title"><span class="text-secondary">Kripik Pisang</span><br>

                    </h2>
                    <p id="banner-description">It Is a long established fact that a readerwill be <br>
                        the readable content of a page
                    </p>
                    <div class="iq-btn-container" id="banner-action">
                        <a href="javascript:void(0)">
                            <div class="btn btn-secondary animation-btn">
                                View More
                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 rounded-circle d-flex align-items-center text-center justify-content-center" id="banner-image-bg" style="background: rgba(255, 255, 255, 0.5) no-repeat scroll center center; background-size:contain; min-height: 550px; width: 550px;">
                <img alt="img" src="<?= base_url('asset/foto/kripik-baner.png') ?>" id="banner-image" class="img-fluid mx-auto d-block">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class=" iq-box-shadow rounded p-5 iq-grocery-card position-relative bg-white">
        <div class="row p-0">
            <div class="col-lg-6 col-md-6 col-xl-3 mb-xl-0 mb-4">
                <div class="d-flex align-items-center">
                    <div class="services-icon-box-icon">
                        <span class="">
                            <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2083px" height="2083px" viewBox="0 0 2083 2083" xml:space="preserve">
                                <image id="image1" width="2083" height="2083" x="0" y="0" xlink:href="<?= base_url('template/frontend/') ?>assets/images/category-product/icon.png"></image>
                            </svg>
                        </span>
                    </div>
                    <div class="services-icon-box-content ms-3">
                        <h5 class="services-icon-box-title text-primary mb-0">
                            Grocery
                        </h5>
                        <p class="services-icon-box-description mb-0">Fresh grocery delivered </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3 mb-xl-0 mb-4">
                <div class="d-flex align-items-center">
                    <div class="services-icon-box-icon">
                        <span class="">
                            <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2083px" height="2083px" viewBox="0 0 2083 2083" xml:space="preserve">
                                <image id="image2" width="2083" height="2083" x="0" y="0" xlink:href="<?= base_url('template/frontend/') ?>assets/images/category-product/demo2.png"></image>
                            </svg>
                        </span>
                    </div>
                    <div class="services-icon-box-content ms-3">
                        <h5 class="services-icon-box-title text-primary mb-0">
                            Salads
                        </h5>
                        <p class="services-icon-box-description mb-0">Order nutritious salads</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3  mb-md-0 mb-4">
                <div class="d-flex align-items-center">
                    <div class="services-icon-box-icon">
                        <span class="">
                            <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2083px" height="2083px" viewBox="0 0 2083 2083" xml:space="preserve">
                                <image id="image3" width="2083" height="2083" x="0" y="0" xlink:href="<?= base_url('template/frontend/') ?>assets/images/category-product/demo3.png"></image>
                            </svg>
                        </span>
                    </div>
                    <div class="services-icon-box-content ms-3">
                        <h5 class="services-icon-box-title text-primary mb-0">
                            Cart Value
                        </h5>
                        <p class="services-icon-box-description mb-0">Cart value review your cart </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3  mb-md-0 mb-4">
                <div class="d-flex align-items-center">
                    <div class="services-icon-box-icon">
                        <span class="">
                            <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2083px" height="2083px" viewBox="0 0 2083 2083" xml:space="preserve">
                                <image id="image4" width="2083" height="2083" x="0" y="0" xlink:href="<?= base_url('template/frontend/') ?>assets/images/category-product/demo4.png"></image>
                            </svg>
                        </span>
                    </div>
                    <div class="services-icon-box-content ms-3">
                        <h5 class="services-icon-box-title text-primary mb-0">
                            Support
                        </h5>
                        <p class="services-icon-box-description mb-0">Concerns and queries </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services-banner pb-0 section-padding-120 position-relative">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/banner-shap-2.png" class="background-img background-img-4 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="banner2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 position-relative">
                <div class="services-container  iq-box-shadow" data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.inOut">
                    <div class="iq-product-offer-block overflow-hidden rounded position-relative">
                        <div class="iq-offer-img">
                            <div class="iq-offer-back-img">
                            </div>
                        </div>
                        <div class="iq-offer-info  overflow-hidden position-relative d-flex align-items-center p-4 align-content-center flex-wrap text-white w-100">
                            <span class="iq-offer-sub d-block text-primary w-100">Organically Produce</span>
                            <h5 class="iq-offer-title d-block  w-100 mb-4">Vegetables</h5>
                            <a class="" href="javascript:void(0)">
                                <div class="btn btn-secondary animation-btn">
                                    Shop Now
                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 position-relative">
                <div class="services-container  iq-box-shadow" data-iq-gsap="onStart" data-iq-position-y="50" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.inOut">
                    <div class="iq-product-offer-block overflow-hidden rounded position-relative">
                        <div class="iq-offer-img">
                            <div class="iq-offer-back-img iq-offer-back-img-2">
                            </div>
                        </div>
                        <div class="iq-offer-info  overflow-hidden position-relative d-flex align-items-center p-4 align-content-center flex-wrap text-white w-100">
                            <span class="iq-offer-sub d-block text-primary w-100">Flat 30% off</span>
                            <h5 class="iq-offer-title d-block  w-100 mb-4">Fresh Foods</h5>
                            <div class="iq-btn-container d-block w-100">
                                <a class="" href="javascript:void(0)">
                                    <div class="btn btn-secondary animation-btn">
                                        Shop Now
                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 position-relative">
                <div class="services-container  iq-box-shadow" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.inOut">
                    <div class="iq-product-offer-block overflow-hidden rounded position-relative">
                        <div class="iq-offer-img">
                            <div class="iq-offer-back-img iq-offer-back-img-3">
                            </div>
                        </div>
                        <div class="iq-offer-info  overflow-hidden position-relative d-flex align-items-center p-4 align-content-center flex-wrap text-white w-100">
                            <span class="iq-offer-sub d-block text-primary w-100">Gluten-free</span>
                            <h5 class="iq-offer-title d-block  w-100 mb-4">Super Salads</h5>
                            <div class="iq-btn-container d-block w-100">
                                <a class="" href="javascript:void(0)">
                                    <div class="btn btn-secondary animation-btn">
                                        Shop Now
                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-padding-120 position-relative">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/shap-8.png" class="background-img background-img-5 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="shap-8">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/shap-10.png" class="background-img background-img-6 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="shap-10">
    <div class="container">
        <div class="scrolling-text text-center">
            <div data-iq-gsap="onStart" data-iq-opacity="1" data-iq-position-x="200" data-iq-trigger="scroll" data-iq-scroll-scrub="true" data-iq-ease="power.inOut">
                Products
            </div>
        </div>
        <div class="iq-title-box text-center">
            <span class="iq-subtitle">Organically Produced</span>
            <h3 class="iq-title">New Organic Add-ons</h3>
            <div class="iq-title-divider"></div>
        </div>
        <div class="row">
            <div class="tabs-wrapper">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item active" role="presentation" style="margin-right: 15px;">
                        <a class="nav-link active" id="pills-breakfast-cereals-tab" data-bs-toggle="pill" href="" data-bs-target="#pills-breakfast-cereals" role="tab" aria-controls="pills-breakfast-cereals" aria-selected="true">Breakfast Cereals</a>
                    </li>
                    <li class="nav-item" role="presentation" style="margin-right: 15px;">
                        <a class="nav-link" id="pills-fruit-yogurt-tab" data-bs-toggle="pill" data-bs-target="#pills-fruit-yogurt" href="" role="tab" aria-controls="pills-fruit-yogurt" aria-selected="false">Fruit Yogurt</a>
                    </li>
                    <li class="nav-item" role="presentation" style="margin-right: 15px;">
                        <a class="nav-link" id="pills-salads-tab" data-bs-toggle="pill" data-bs-target="#pills-salads" href="" role="tab" aria-controls="pills-salads" aria-selected="false">Salads</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content mt-3" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-breakfast-cereals" role="tabpanel" aria-labelledby="pills-breakfast-cereals">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4">
                        <?php foreach ($data as $row) { ?>
                            <div class="col">
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="iq-product-image">
                                            <img src="<?= base_url('foto_produk/' . $row['foto_produk']) ?>" class="hover_image" alt="img" style="min-height: 220px; aspect-ratio: 4/3; object-fit: contain; ">
                                        </div>
                                        <div class="iq-product-content mt-3">
                                            <!-- <p class="mb-0"><small>Breakfast Cereals, Snacks</small></p> -->
                                            <a href="<?= base_url('product/' . $row['id_produk']) ?>" class="iq-product-title-link h5"><?= $row['nama_produk'] ?></a>
                                            <div class="d-flex align-items-center justify-content-between my-2">
                                                <h6 class="m-0">
                                                    <span class="text-decoration-line-through"></span>
                                                    <span class="text-primary"><b>Rp. <?= number_format($row['harga_produk'], 0, ",", ".") ?></b></span>
                                                </h6>
                                                <div class="iq-ratings">
                                                    <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                        <i class="fas fa-star fa-xs me-1"></i>
                                                        <i class="fas fa-star fa-xs me-1"></i>
                                                        <i class="fas fa-star fa-xs me-1"></i>
                                                        <i class="far fa-star fa-xs me-1"></i>
                                                        <i class="far fa-star fa-xs me-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3">
                                                <div class="iq-btn-container">
                                                    <a class="" onclick="addCart(<?= $row['id_produk'] ?>)" href="javascript:void(0)" data-alert="sweetalert-cart">
                                                        <div class="btn btn-secondary animation-btn">
                                                            Add To Card
                                                            <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="iq-product-icon">
                                                        <a href="javascript:void(0)" data-alert="sweetalert-heart">
                                                            <i class="far fa-heart"></i>
                                                        </a>
                                                    </div>
                                                    <div class="iq-product-icon ms-2">
                                                        <a href="<?= base_url('template/frontend/') ?>cart.html">
                                                            <i class=" fa fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-fruit-yogurt" role="tabpanel" aria-labelledby="pills-fruit-yogurt">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4">
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/15.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Soups, Vegetables</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Cardamom</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through"></span>
                                                <span class="text-primary"><b>$22</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="iq-btn-container">
                                                <a class="" href="javascript:void(0)" data-alert="sweetalert-product">
                                                    <div class="btn btn-secondary animation-btn">
                                                        Add To Card
                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="iq-product-icon">
                                                    <a href="javascript:void(0)" data-alert="sweetalert-heart">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="iq-product-icon ms-2">
                                                    <a href="<?= base_url('template/frontend/') ?>cart.html">
                                                        <i class=" fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/16.png" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>maggi</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Cheese
                                            maggi</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through">$20</span>
                                                <span class="text-primary"><b>$10</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="iq-btn-container">
                                                <a class="" href="javascript:void(0)" data-alert="sweetalert-product">
                                                    <div class="btn btn-secondary animation-btn">
                                                        Add To Card
                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="iq-product-icon">
                                                    <a href="javascript:void(0)" data-alert="sweetalert-heart">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="iq-product-icon ms-2">
                                                    <a href="<?= base_url('template/frontend/') ?>cart.html">
                                                        <i class=" fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/05.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Bakery, Breakfast Cereals</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Green Machine</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through">$45</span>
                                                <span class="text-primary"><b>$40</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="iq-btn-container">
                                                <a class="" href="javascript:void(0)" data-alert="sweetalert-product">
                                                    <div class="btn btn-secondary animation-btn">
                                                        Add To Card
                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="iq-product-icon">
                                                    <a href="javascript:void(0)" data-alert="sweetalert-heart">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="iq-product-icon ms-2">
                                                    <a href="<?= base_url('template/frontend/') ?>cart.html">
                                                        <i class=" fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/01.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Breakfast Cereals, Snacks</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Chips</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through"></span>
                                                <span class="text-primary"><b>$10</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="iq-btn-container">
                                                <a class="" href="javascript:void(0)" data-alert="sweetalert-product">
                                                    <div class="btn btn-secondary animation-btn">
                                                        Add To Card
                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="iq-product-icon">
                                                    <a href="javascript:void(0)" data-alert="sweetalert-heart">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="iq-product-icon ms-2">
                                                    <a href="<?= base_url('template/frontend/') ?>cart.html">
                                                        <i class=" fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-salads" role="tabpanel" aria-labelledby="pills-salads">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4">
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/04.png" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Breakfast Cereals, Snacks</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Bolthouse</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through"></span>
                                                <span class="text-primary"><b>$100</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="iq-btn-container">
                                                <a class="" href="javascript:void(0)" data-alert="sweetalert-product">
                                                    <div class="btn btn-secondary animation-btn">
                                                        Add To Card
                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="iq-product-icon">
                                                    <a href="javascript:void(0)" data-alert="sweetalert-heart">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="iq-product-icon ms-2">
                                                    <a href="<?= base_url('template/frontend/') ?>cart.html">
                                                        <i class=" fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/14.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Bakery, Snacks</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Bread</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through">$1200</span>
                                                <span class="text-primary"><b>$1000</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="iq-btn-container">
                                                <a class="" href="javascript:void(0)" data-alert="sweetalert-product">
                                                    <div class="btn btn-secondary animation-btn">
                                                        Add To Card
                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="iq-product-icon">
                                                    <a href="javascript:void(0)" data-alert="sweetalert-heart">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="iq-product-icon ms-2">
                                                    <a href="<?= base_url('template/frontend/') ?>cart.html">
                                                        <i class=" fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/03.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Breakfast Cereals</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Bread Breakfast</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through"></span>
                                                <span class="text-primary"><b>$7.50</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="iq-btn-container">
                                                <a class="" href="javascript:void(0)" data-alert="sweetalert-product">
                                                    <div class="btn btn-secondary animation-btn">
                                                        Add To Card
                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="iq-product-icon">
                                                    <a href="javascript:void(0)" data-alert="sweetalert-heart">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="iq-product-icon ms-2">
                                                    <a href="<?= base_url('template/frontend/') ?>cart.html">
                                                        <i class=" fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/13.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Salads, Soups</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Broccoli</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through"></span>
                                                <span class="text-primary"><b>$15</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                    <i class="far fa-star fa-xs me-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="iq-btn-container">
                                                <a class="" href="javascript:void(0)" data-alert="sweetalert-product">
                                                    <div class="btn btn-secondary animation-btn">
                                                        Add To Card
                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="iq-product-icon">
                                                    <a href="javascript:void(0)" data-alert="sweetalert-heart">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </div>
                                                <div class="iq-product-icon ms-2">
                                                    <a href="<?= base_url('template/frontend/') ?>cart.html">
                                                        <i class=" fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="video section-padding-120 position-relative" data-iq-gsap="onStart" data-iq-position-y="50" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.inOut" style="background: url(<?= base_url('template/frontend/') ?>assets/images/video/video-bg.jpg) no-repeat scroll right center;  background-attachment: fixed;background-size: cover; min-height: 300px;">
    <div class="background-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="iq-title-box text-center">
                <span class="iq-subtitle text-white">Organic Products</span>
                <h3 class="iq-title text-white">Everyday Fresh & Clean</h3>
                <div class="iq-title-divider bg-white"></div>
            </div>
            <div class="col-lg-12 align-self-center">
                <div class="iq-popup-video">
                    <div class="iq-video-img position-relative">
                        <div class="iq-video-icon  bg-secondary rounded-pill" style="visibility: visible;">
                            <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="iq-video popup-youtube">
                                <i class="fas fa-play text-white"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="organic-products section-padding-120 pb-0 position-relative">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/shap-5.png" class="background-img background-img-7 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="shap-5">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/banner-shap-5.png" class="background-img background-img-8 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="banner-shap-5">
    <div class="container">
        <div class="scrolling-text text-center">
            <div data-iq-gsap="onStart" data-iq-opacity="1" data-iq-position-x="200" data-iq-trigger="scroll" data-iq-scroll-scrub="true" data-iq-ease="power.inOut">
                Naturally
            </div>
        </div>
        <div class="iq-title-box text-center">
            <span class="iq-subtitle">No Chemicals, No Pesticides</span>
            <h3 class="iq-title">Fresh Organic Products</h3>
            <div class="iq-title-divider"></div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="iq-product-offer-block mb-lg-0 mb-4">
                    <div class="iq-offer-img">
                        <div class="iq-offer-back-img"></div>
                    </div>
                    <div class="d-block iq-offer-info text-center position-relative mt-3">
                        <h5 class="iq-offer-title text-white pt-5">Fresh Juice. <br> 100% Organic</h5>
                        <div class="iq-btn-container mt-4">
                            <div class="iq-btn-container">
                                <a class="" href="<?= base_url('template/frontend/') ?>shop/shop-three-column.html">
                                    <div class="btn btn-secondary animation-btn">
                                        Shop Now
                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="iq-product-block">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-product">
                                <div class="card-body">
                                    <a href="<?= base_url('template/frontend/') ?>product/new-product.html">
                                        <div class="d-flex align-items-center">
                                            <div class="iq-product-img iq-product-image me-3">
                                                <img src="<?= base_url('template/frontend/') ?>assets/images/product/01.jpg" class="img-fluid" alt="product-image">
                                            </div>
                                            <div class="iq-product-info">
                                                <h5>Bread Breakfast</h5>
                                                <div class="iq-ratings">
                                                    <ul class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><span class="text-body ms-1">(2)</span></li>
                                                    </ul>
                                                </div>
                                                <h5 class="text-primary">$7.50</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-product">
                                <div class="card-body">
                                    <a href="<?= base_url('template/frontend/') ?>product/new-product.html">
                                        <div class="d-flex align-items-center">
                                            <div class="iq-product-img iq-product-image me-3">
                                                <img src="<?= base_url('template/frontend/') ?>assets/images/product/02.jpg" class="img-fluid" alt="product-image">
                                            </div>
                                            <div class="iq-product-info">
                                                <h5>Heinz Ketchup</h5>
                                                <div class="iq-ratings">
                                                    <ul class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><span class="text-body ms-1">(2)</span></li>
                                                    </ul>
                                                </div>
                                                <h5 class="text-primary">$25</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-product">
                                <div class="card-body">
                                    <a href="<?= base_url('template/frontend/') ?>product/new-product.html">
                                        <div class="d-flex align-items-center">
                                            <div class="iq-product-img iq-product-image me-3">
                                                <img src="<?= base_url('template/frontend/') ?>assets/images/product/03.jpg" class="img-fluid" alt="product-image">
                                            </div>
                                            <div class="iq-product-info">
                                                <h5>Side Dish</h5>
                                                <div class="iq-ratings">
                                                    <ul class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><span class="text-body ms-1">(2)</span></li>
                                                    </ul>
                                                </div>
                                                <h6 class="m-0">
                                                    <small class="text-decoration-line-through">$10</small>
                                                    <span class="text-primary h5">$8</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-product">
                                <div class="card-body">
                                    <a href="<?= base_url('template/frontend/') ?>product/new-product.html">
                                        <div class="d-flex align-items-center">
                                            <div class="iq-product-img iq-product-image me-3">
                                                <img src="<?= base_url('template/frontend/') ?>assets/images/product/04.png" class="img-fluid" alt="product-image">
                                            </div>
                                            <div class="iq-product-info">
                                                <h5>Bread</h5>
                                                <div class="iq-ratings">
                                                    <ul class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><i class="fas fa-star fa-sm me-1"></i></li>
                                                        <li><span class="text-body ms-1">(2)</span></li>
                                                    </ul>
                                                </div>
                                                <h6 class="m-0">
                                                    <small class="text-decoration-line-through">$10</small>
                                                    <span class="text-primary h5">$8</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-product">
                                <div class="card-body">
                                    <a href="<?= base_url('template/frontend/') ?>product/new-product.html">
                                        <div class="d-flex align-items-center">
                                            <div class="iq-product-img iq-product-image me-3">
                                                <img src="<?= base_url('template/frontend/') ?>assets/images/product/05.jpg" class="img-fluid" alt="product-image">
                                            </div>
                                            <div class="iq-product-info">
                                                <h5>Nestle Fitness</h5>
                                                <div class="iq-ratings">
                                                    <ul class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><span class="text-body ms-1">(2)</span></li>
                                                    </ul>
                                                </div>
                                                <h5 class="text-primary">$300</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-product">
                                <div class="card-body">
                                    <a href="<?= base_url('template/frontend/') ?>product/new-product.html">
                                        <div class="d-flex align-items-center">
                                            <div class="iq-product-img iq-product-image me-3">
                                                <img src="<?= base_url('template/frontend/') ?>assets/images/product/06.jpg" class="img-fluid" alt="product-image">
                                            </div>
                                            <div class="iq-product-info">
                                                <h5>Grapes</h5>
                                                <div class="iq-ratings">
                                                    <ul class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><i class="far fa-star fa-sm me-1"></i></li>
                                                        <li><span class="text-body ms-1">(2)</span></li>
                                                    </ul>
                                                </div>
                                                <h6 class="m-0">
                                                    <small class="text-decoration-line-through">$10</small>
                                                    <span class="text-primary h5">$8</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="iq-product-offer position-relative overflow-hidden" data-iq-gsap="onStart" data-iq-position-y="50" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.inOut">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/shap-5.png" class="background-img background-img-9 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="shap-5">
    <div class="container">
        <div class="iq-product-offer-block">
            <div class="iq-offer-img">
                <div class="iq-offer-back-img"></div>
            </div>
            <div class="iq-offer-info text-center">
                <span class="iq-offer-sub">Weekend Offer</span>
                <h3 class="iq-offer-title m-auto mb-4">Organic Foods Up To 50% off</h3>
                <div class="iq-btn-container">
                    <a class="" href="<?= base_url('template/frontend/') ?>shop/shop-three-column.html">
                        <div class="btn btn-secondary animation-btn">
                            Shop Now
                            <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="iq-testimonial bg-primary section-padding-120 position-relative">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/banner-shap-5.png" class="background-img background-img-10 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="banner-shap-5">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/dish-1.png" class="background-img background-img-11 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="dish-1">
    <div class="container">
        <div class="scrolling-text text-center">
            <div data-iq-gsap="onStart" data-iq-opacity="1" data-iq-position-x="200" data-iq-trigger="scroll" data-iq-scroll-scrub="true" data-iq-ease="power.inOut">
                Testimonial
            </div>
        </div>
        <div class="iq-title-box text-center">
            <span class="iq-subtitle text-white">Testimonial</span>
            <h3 class="iq-title text-white">What Our Customers Say</h3>
            <div class="iq-title-divider bg-white"></div>
        </div>
        <div class="testimonial-slider overflow-hidden position-relative">
            <ul class="swiper-wrapper list-inline m-0 p-0">
                <li class="swiper-slide">
                    <div class="card mx-2">
                        <div class="card-body p-2">
                            <div class="iq-testimonial-main">
                                <div class="iq-testimonial-desc d-flex align-items-center justify-content-between">
                                    <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="text-center">
                                        <h5 class="m-0 text-white">Shirley Edwards</h5>
                                        <span class="text-white"><i>Manager</i></span>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/testimonial/01.png" class="rounded" alt="foodsto-user" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card mx-2">
                        <div class="card-body p-2">
                            <div class="iq-testimonial-main">
                                <div class="iq-testimonial-desc d-flex align-items-center justify-content-between">
                                    <p class="">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="text-center">
                                        <h5 class="m-0 text-white">Brim Jesse</h5>
                                        <span class="text-white"><i>CEO</i></span>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/testimonial/02.png" class="rounded" alt="foodsto-user" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card mx-2">
                        <div class="card-body p-2">
                            <div class="iq-testimonial-main">
                                <div class="iq-testimonial-desc d-flex align-items-center justify-content-between">
                                    <p class="">Richard McClintock, a Latin professor at Hampden-Sydney consectetur adip isicing elit, sed dolore magna aliqua hampden. Latin professor at Hampden-Sydney consectetur.</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="text-center">
                                        <h5 class="m-0 text-white">John Deo</h5>
                                        <span class="text-white"><i>Web Developer</i></span>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/testimonial/03.png" class="rounded" alt="foodsto-user" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card mx-2">
                        <div class="card-body p-2">
                            <div class="iq-testimonial-main">
                                <div class="iq-testimonial-desc d-flex align-items-center justify-content-between">
                                    <p class="">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="iq-testimonial-metadata text-center">
                                        <h5 class="m-0 text-white">Marina Childs</h5>
                                        <span class="m-0 text-white"><i>Web Designer</i></span>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/testimonial/04.png" class="rounded" alt="foodsto-user" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card mx-2">
                        <div class="card-body p-2">
                            <div class="iq-testimonial-main">
                                <div class="iq-testimonial-desc d-flex align-items-center justify-content-between">
                                    <p class="">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="text-center">
                                        <h5 class="m-0 text-white">Richard Probst</h5>
                                        <span class="text-white"><i>Project Manager</i></span>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/testimonial/05.png" class="rounded" alt="foodsto-user" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card mx-2">
                        <div class="card-body p-2">
                            <div class="iq-testimonial-main">
                                <div class="iq-testimonial-desc d-flex align-items-center justify-content-between">
                                    <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="text-center">
                                        <h5 class="m-0 text-white">Ruby Driver</h5>
                                        <span class="text-white"><i>Model</i></span>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/testimonial/06.png" class="rounded" alt="foodsto-user" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/dish-1.png" class="background-img background-img-12 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="dish-1">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/shap-5.png" class="background-img background-img-13 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="shap-5">
</section>

<section class="iq-blog section-padding-120 position-relative">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/shap-10.png" class="background-img background-img-14 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="shap-10">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/shap-11.png" class="background-img background-img-15 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="shap-11">
    <div class="container">
        <div class="scrolling-text text-center">
            <div data-iq-gsap="onStart" data-iq-opacity="1" data-iq-position-x="200" data-iq-trigger="scroll" data-iq-scroll-scrub="true" data-iq-ease="power.inOut">
                Blog
            </div>
        </div>
        <div class="iq-title-box text-center">
            <span class="iq-subtitle">Trending Topic</span>
            <h3 class="iq-title">Foodsto Blog Posts</h3>
            <div class="iq-title-divider"></div>
        </div>
        <div class="latest-blog overflow-hidden">
            <ul class="swiper-wrapper list-inline m-0 p-0">
                <li class="swiper-slide">
                    <div class="card  iq-blog">
                        <div class="card-header p-0">
                            <div class="iq-blog-image clearfix">
                                <img src="<?= base_url('template/frontend/') ?>assets/images/blog/01.png" alt="blog-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="card-body position-relative ms-3">
                            <ul class="iq-postdate">
                                <li class="list-inline-item iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html" rel="bookmark">
                                        <span class="entry-date published updated">
                                            January 7, 2021
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center iq-blog-meta mb-2">
                                <div class="iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/one-column-blog.html" class="me-3"><i class="far fa-user me-2 "></i>admin</a>
                                </div>
                                <div class="iq-blog-category"><a href="<?= base_url('template/frontend/') ?>index.html" class="badge bg-primary">Vegetables</a></div>
                            </div>
                            <a href="<?= base_url('template/frontend/') ?>blog/blog-detail.html" class="iq-title">
                                <h5 class="mb-3">Healthy Vegetable Salads</h5>
                            </a>

                            <p>Join the health bandwagon
                                produced vegetables options.</p>

                            <a class="btn p-0 d-flex align-items-center iq-btn-link iq-btn-read-effect" href="<?= base_url('template/frontend/') ?>blog/blog-detail.html">
                                <span class="iq-button-effact text-primary">
                                    Read More
                                    <i class="fas fa-long-arrow-alt-right text-primary ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card  iq-blog">
                        <div class="card-header p-0">
                            <div class="iq-blog-image clearfix">
                                <img src="<?= base_url('template/frontend/') ?>assets/images/blog/02.png" alt="blog-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="card-body position-relative ms-3">
                            <ul class="iq-postdate">
                                <li class="list-inline-item iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html" rel="bookmark">
                                        <span class="entry-date published updated">
                                            January 7, 2021
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center iq-blog-meta mb-2">
                                <div class="iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/one-column-blog.html" class="me-3"><i class="far fa-user me-2 "></i>admin</a>
                                </div>
                                <div class="iq-blog-category"><a href="<?= base_url('template/frontend/') ?>index.html" class="badge bg-primary">Vegetables</a></div>
                            </div>
                            <a href="<?= base_url('template/frontend/') ?>blog/blog-detail.html" class="iq-title">
                                <h5 class="mb-3">Baked Dishes</h5>
                            </a>

                            <p>Adopt Mexican way of
                                baking some of the most nutritious food.</p>

                            <a class="btn p-0 d-flex align-items-center iq-btn-link iq-btn-read-effect" href="<?= base_url('template/frontend/') ?>blog/blog-detail.html">
                                <span class="iq-button-effact text-primary">
                                    Read More
                                    <i class="fas fa-long-arrow-alt-right text-primary ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card  iq-blog">
                        <div class="card-header p-0">
                            <div class="iq-blog-image clearfix">
                                <img src="<?= base_url('template/frontend/') ?>assets/images/blog/03.png" alt="blog-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="card-body position-relative ms-3">
                            <ul class="iq-postdate">
                                <li class="list-inline-item iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html" rel="bookmark">
                                        <span class="entry-date published updated">
                                            March 7, 2021
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center iq-blog-meta mb-2">
                                <div class="iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/one-column-blog.html" class="me-3"><i class="far fa-user me-2 "></i>admin</a>
                                </div>
                                <div class="iq-blog-category"><a href="<?= base_url('template/frontend/') ?>index.html" class="badge bg-primary">Bakery</a></div>
                            </div>
                            <a href="<?= base_url('template/frontend/') ?>blog/blog-detail.html" class="iq-title">
                                <h5 class="mb-3">Easy Avocado Recipes </h5>
                            </a>

                            <p>Organic food and
                                superfoods are delicious in a jiffy.</p>

                            <a class="btn p-0 d-flex align-items-center iq-btn-link iq-btn-read-effect" href="<?= base_url('template/frontend/') ?>blog/blog-detail.html">
                                <span class="iq-button-effact text-primary">
                                    Read More
                                    <i class="fas fa-long-arrow-alt-right text-primary ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card  iq-blog">
                        <div class="card-header p-0">
                            <div class="iq-blog-image clearfix">
                                <img src="<?= base_url('template/frontend/') ?>assets/images/blog/04.png" alt="blog-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="card-body position-relative ms-3">
                            <ul class="iq-postdate">
                                <li class="list-inline-item iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html" rel="bookmark">
                                        <span class="entry-date published updated">
                                            March 21, 2021
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center iq-blog-meta mb-2">
                                <div class="iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/one-column-blog.html" class="me-3"><i class="far fa-user me-2 "></i>admin</a>
                                </div>
                                <div class="iq-blog-category"><a href="<?= base_url('template/frontend/') ?>index.html" class="badge bg-primary">Fast Food</a></div>
                            </div>
                            <a href="<?= base_url('template/frontend/') ?>blog/blog-detail.html" class="iq-title">
                                <h5 class="mb-3">Organic Sushi Lovers Guide</h5>
                            </a>

                            <p>Vegetable Sushi makes a perfect
                                dinner or evening snack idea.</p>

                            <a class="btn p-0 d-flex align-items-center iq-btn-link iq-btn-read-effect" href="<?= base_url('template/frontend/') ?>blog/blog-detail.html">
                                <span class="iq-button-effact text-primary">
                                    Read More
                                    <i class="fas fa-long-arrow-alt-right text-primary ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card  iq-blog">
                        <div class="card-header p-0">
                            <div class="iq-blog-image clearfix">
                                <img src="<?= base_url('template/frontend/') ?>assets/images/blog/05.png" alt="blog-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="card-body position-relative ms-3">
                            <ul class="iq-postdate">
                                <li class="list-inline-item iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html" rel="bookmark">
                                        <span class="entry-date published updated">
                                            April 15, 2021
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center iq-blog-meta mb-2">
                                <div class="iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/one-column-blog.html" class="me-3"><i class="far fa-user me-2 "></i>admin</a>
                                </div>
                                <div class="iq-blog-category"><a href="<?= base_url('template/frontend/') ?>index.html" class="badge bg-primary">Peanuts</a></div>
                            </div>
                            <a href="<?= base_url('template/frontend/') ?>blog/blog-detail.html" class="iq-title">
                                <h5 class="mb-3">Storing Organic Produces</h5>
                            </a>

                            <p>Preserve the nutritional value of
                                organically produced products</p>

                            <a class="btn p-0 d-flex align-items-center iq-btn-link iq-btn-read-effect" href="<?= base_url('template/frontend/') ?>blog/blog-detail.html">
                                <span class="iq-button-effact text-primary">
                                    Read More
                                    <i class="fas fa-long-arrow-alt-right text-primary ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card  iq-blog">
                        <div class="card-header p-0">
                            <div class="iq-blog-image clearfix">
                                <img src="<?= base_url('template/frontend/') ?>assets/images/blog/06.png" alt="blog-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="card-body position-relative ms-3">
                            <ul class="iq-postdate">
                                <li class="list-inline-item iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html" rel="bookmark">
                                        <span class="entry-date published updated">
                                            July 18, 2021
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center iq-blog-meta mb-2">
                                <div class="iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/one-column-blog.html" class="me-3"><i class="far fa-user me-2 "></i>admin</a>
                                </div>
                                <div class="iq-blog-category"><a href="<?= base_url('template/frontend/') ?>index.html" class="badge bg-primary">Breakfast</a></div>
                            </div>
                            <a href="<?= base_url('template/frontend/') ?>blog/blog-detail.html" class="iq-title">
                                <h5 class="mb-3">Gluten-free Online Guide</h5>
                            </a>

                            <p>Check out the most popular
                                gluten-free recipes that works for you.</p>

                            <a class="btn p-0 d-flex align-items-center iq-btn-link iq-btn-read-effect" href="<?= base_url('template/frontend/') ?>blog/blog-detail.html">
                                <span class="iq-button-effact text-primary">
                                    Read More
                                    <i class="fas fa-long-arrow-alt-right text-primary ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card  iq-blog">
                        <div class="card-header p-0">
                            <div class="iq-blog-image clearfix">
                                <img src="<?= base_url('template/frontend/') ?>assets/images/blog/07.png" alt="blog-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="card-body position-relative ms-3">
                            <ul class="iq-postdate">
                                <li class="list-inline-item iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html" rel="bookmark">
                                        <span class="entry-date published updated">
                                            July 20, 2021
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center iq-blog-meta mb-2">
                                <div class="iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/one-column-blog.html" class="me-3"><i class="far fa-user me-2 "></i>admin</a>
                                </div>
                                <div class="iq-blog-category"><a href="<?= base_url('template/frontend/') ?>index.html" class="badge bg-primary">Food</a></div>
                            </div>
                            <a href="<?= base_url('template/frontend/') ?>blog/blog-detail.html" class="iq-title">
                                <h5 class="mb-3">Citric Fruits 101 Online Guide</h5>
                            </a>

                            <p>One line: Foodsto tells you how
                                to get the most from citric fruits.</p>

                            <a class="btn p-0 d-flex align-items-center iq-btn-link iq-btn-read-effect" href="<?= base_url('template/frontend/') ?>blog/blog-detail.html">
                                <span class="iq-button-effact text-primary">
                                    Read More
                                    <i class="fas fa-long-arrow-alt-right text-primary ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card  iq-blog">
                        <div class="card-header p-0">
                            <div class="iq-blog-image clearfix">
                                <img src="<?= base_url('template/frontend/') ?>assets/images/blog/08.png" alt="blog-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="card-body position-relative ms-3">
                            <ul class="iq-postdate">
                                <li class="list-inline-item iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html" rel="bookmark">
                                        <span class="entry-date published updated">
                                            July 22, 2021
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center iq-blog-meta mb-2">
                                <div class="iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/one-column-blog.html" class="me-3"><i class="far fa-user me-2 "></i>admin</a>
                                </div>
                                <div class="iq-blog-category"><a href="<?= base_url('template/frontend/') ?>index.html" class="badge bg-primary">Sea-food</a></div>
                            </div>
                            <a href="<?= base_url('template/frontend/') ?>blog/blog-detail.html" class="iq-title">
                                <h5 class="mb-3">How To Use Lectus Leaves</h5>
                            </a>

                            <p>Pinch of salt and pepper makes your
                                Lectus salad the best salad ever!</p>

                            <a class="btn p-0 d-flex align-items-center iq-btn-link iq-btn-read-effect" href="<?= base_url('template/frontend/') ?>blog/blog-detail.html">
                                <span class="iq-button-effact text-primary">
                                    Read More
                                    <i class="fas fa-long-arrow-alt-right text-primary ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="card  iq-blog">
                        <div class="card-header p-0">
                            <div class="iq-blog-image clearfix">
                                <img src="<?= base_url('template/frontend/') ?>assets/images/blog/09.png" alt="blog-img" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="card-body position-relative ms-3">
                            <ul class="iq-postdate">
                                <li class="list-inline-item iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html" rel="bookmark">
                                        <span class="entry-date published updated">
                                            July 25, 2021
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center iq-blog-meta mb-2">
                                <div class="iq-blog-meta">
                                    <a href="<?= base_url('template/frontend/') ?>blog/one-column-blog.html" class="me-3"><i class="far fa-user me-2 "></i>admin</a>
                                </div>
                                <div class="iq-blog-category"><a href="<?= base_url('template/frontend/') ?>index.html" class="badge bg-primary">Bakery</a></div>
                            </div>
                            <a href="<?= base_url('template/frontend/') ?>blog/blog-detail.html" class="iq-title">
                                <h5 class="mb-3">Organic Foods For Health</h5>
                            </a>

                            <p>Packed with all nutritional values,
                                organic sea-food diet.</p>

                            <a class="btn p-0 d-flex align-items-center iq-btn-link iq-btn-read-effect" href="<?= base_url('template/frontend/') ?>blog/blog-detail.html">
                                <span class="iq-button-effact text-primary">
                                    Read More
                                    <i class="fas fa-long-arrow-alt-right text-primary ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php if (session()->get('role')) { ?>
    <script>
        function addCart(id_produk) {
            $.ajax({
                url: '<?= base_url('cart/add') ?>',
                type: 'POST',
                data: {
                    'id_produk': id_produk
                },
                success: function(response) {
                    console.log(response)
                    getCountCart()
                    getAllCart()
                }
            })
        }
    </script>
<?php } ?>

<!-- Wrapper End-->
<?= $this->endSection() ?>