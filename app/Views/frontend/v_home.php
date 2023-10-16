<?= $this->extend('layout/main_front') ?>
<?= $this->section('content') ?>

<div class="banner section-padding-120 pb-0" id="home-1">
    <div class="slider-image" id="banner-slider-image">
        <div class="slider-2"></div>
        <div class="slider-3"></div>
        <div class="slider-4"></div>
        <!-- <div class="slider-5"></div> -->
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
                    <h2 id="banner-title"><span class="text-secondary">Sale Pisang</span><br>

                    </h2>
                    <p id="banner-description">Rasa Alami Tanpa Pemanis Buatan
                    </p>
                    <div class="iq-btn-container" id="banner-action">
                        <a href="#produk">
                            <div class="btn btn-secondary animation-btn">
                                Lihat
                                <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <style>
                @media (max-width: 991px) {
                    .hero-banner {
                        height: 350px !important;
                        /* width: 200px !important; */
                    }
                }
            </style>
            <div class="col-md-6 rounded-circle d-flex align-items-center text-center justify-content-center hero-banner" id="banner-image-bg" style="background: rgba(255, 255, 255, 0.1) no-repeat scroll center center; background-size:contain; height: 550px; width: 550px;">
                <img alt="img" src="<?= base_url('asset/foto/sale.png') ?>" id="banner-image" class="img-fluid mx-auto d-block" style="width: 500px !important; border-radius: 30px;">
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
                                <image id="image2" width="2083" height="2083" x="0" y="0" xlink:href="<?= base_url('asset/foto/icon2.png') ?>"></image>
                            </svg>
                        </span>
                    </div>
                    <div class="services-icon-box-content ms-3">
                        <h5 class="services-icon-box-title text-primary mb-0">
                            Pisang Asli
                        </h5>
                        <p class="services-icon-box-description mb-0">Dengan rasa alami</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3 mb-xl-0 mb-4">
                <div class="d-flex align-items-center">
                    <div class="services-icon-box-icon">
                        <span class="">
                            <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2083px" height="2083px" viewBox="0 0 2083 2083" xml:space="preserve">
                                <image id="image1" width="2083" height="2083" x="0" y="0" xlink:href="<?= base_url('asset/foto/icon1.png') ?>"></image>
                            </svg>
                        </span>
                    </div>
                    <div class="services-icon-box-content ms-3">
                        <h5 class="services-icon-box-title text-primary mb-0">
                            Harga Terjangkau
                        </h5>
                        <p class="services-icon-box-description mb-0">Pembeli dan Reseller </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3  mb-md-0 mb-4">
                <div class="d-flex align-items-center">
                    <div class="services-icon-box-icon">
                        <span class="">
                            <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2083px" height="2083px" viewBox="0 0 2083 2083" xml:space="preserve">
                                <image id="image3" width="2083" height="2083" x="0" y="0" xlink:href="<?= base_url('asset/foto/icon3.png') ?>"></image>
                            </svg>
                        </span>
                    </div>
                    <div class="services-icon-box-content ms-3">
                        <h5 class="services-icon-box-title text-primary mb-0">
                            Fitur Keranjang
                        </h5>
                        <p class="services-icon-box-description mb-0">Masukan keranjang bayar nanti </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-3  mb-md-0 mb-4">
                <div class="d-flex align-items-center">
                    <div class="services-icon-box-icon">
                        <span class="">
                            <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2083px" height="2083px" viewBox="0 0 2083 2083" xml:space="preserve">
                                <image id="image4" width="2083" height="2083" x="0" y="0" xlink:href="<?= base_url('asset/foto/icon4.png') ?>"></image>
                            </svg>
                        </span>
                    </div>
                    <div class="services-icon-box-content ms-3">
                        <h5 class="services-icon-box-title text-primary mb-0">
                            Terpercaya
                        </h5>
                        <p class="services-icon-box-description mb-0">Pembayaran Ter-enkripsi </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-padding-120 position-relative" id="produk">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/kripik227.png" class="background-img background-img-5 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="shap-8">
    <div class="container" id="produk">
        <div class="scrolling-text text-center">
            <div data-iq-gsap="onStart" data-iq-opacity="1" data-iq-position-x="200" data-iq-trigger="scroll" data-iq-scroll-scrub="true" data-iq-ease="power.inOut">
                Produk
            </div>
        </div>
        <div class="iq-title-box text-center">
            <span class="iq-subtitle">Rasa Original</span>
            <h3 class="iq-title">Produk Kami</h3>
            <div class="iq-title-divider"></div>
        </div>
        <div class="row">
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
                                                        <i class="fas fa-star fa-xs me-1"></i>
                                                        <i class="fas fa-star fa-xs me-1"></i>
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
                                                        <a onclick="showLoading()" href="<?= base_url('product/' . $row['id_produk']) ?>">
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
            </div>
        </div>
    </div>
</div>

<section class="iq-testimonial bg-primary section-padding-120 position-relative">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/kripik227.png" class="background-img background-img-10 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="banner-shap-5">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/kripik227.png" class="background-img background-img-11 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="dish-1">
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
                                    <p class="">Enak asem manis seger.</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="text-center">
                                        <h5 class="m-0 text-white">Didiek</h5>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('asset/foto/testi1.jpg') ?>" class="rounded" alt="foodsto-user" />
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
                                    <p class="">Bagus Texturenya.. Kecil tipis dan renyah... Untuk rasanya lumayan enak.. Semoga kedepannya ada inovasi lain ya</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="text-center">
                                        <h5 class="m-0 text-white">A***n</h5>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('asset/foto/user.png') ?>" class="rounded" alt="foodsto-user" />
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
                                    <p class="">enakkkkk bgt. langsung ludessss. nyesel beli dua doang :(</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="text-center">
                                        <h5 class="m-0 text-white">Ni</h5>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('asset/foto/avatar.png') ?>" class="rounded" alt="foodsto-user" />
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
                                    <p class="">enak banget, dikirim cepet. mungkin bakal beli lagi.</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="iq-testimonial-metadata text-center">
                                        <h5 class="m-0 text-white">Adrian</h5>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('asset/foto/testi2.jpg') ?>" class="rounded" alt="foodsto-user" />
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
                                    <p class="">Sampai dengan cepat dan dalam keadaan baik, kemasan bagus sehingga isinya terjaga utuh.</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="text-center">
                                        <h5 class="m-0 text-white">Bharata</h5>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('asset/foto/avatar3.jpg') ?>" class="rounded" alt="foodsto-user" />
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
                                    <p class="">Makasih bonusnya. Pengiriman dari Subang-Bekasi cuma 1 hari sampai..</p>
                                    <div class="iq-testimonial-icon">
                                        <i aria-hidden="true" class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="iq-testimonial-user rounded d-flex justify-content-between">
                                    <div class="text-center">
                                        <h5 class="m-0 text-white">Anne</h5>
                                    </div>
                                    <div class="iq-user-img">
                                        <img src="<?= base_url('asset/foto/avatar.jpeg') ?>" class="rounded" alt="foodsto-user" />
                                    </div>
                                </div>
                            </div>
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
                    if (response == 'Gagal') {
                        Swal.fire(
                            'Gagal!',
                            'Stok Tidak Mencukupi',
                            'error'
                        )
                    }
                    // console.log(response)
                    getCountCart()
                    getAllCart()
                }
            })
        }
    </script>
<?php } ?>

<!-- Wrapper End-->
<?= $this->endSection() ?>