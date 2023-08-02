<?= $this->extend('layout/main_front') ?>
<?= $this->section('content') ?>
<div class="text-left iq-breadcrumb-one iq-bg-over black" style="background: url(<?= base_url('asset/foto/banner.png') ?>); background-size: contain;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                    <h2 class="title"><?= $data['nama_produk'] ?></h2>
                    <ol class="breadcrumb main-bg">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('/') ?>"><i class="fas fa-home me-2"></i>Home</a>
                        </li>
                        <li class="breadcrumb-item">Product</li>
                        <li class="breadcrumb-item"><?= $data['nama_produk'] ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="section-padding-120 position-relative">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/shap-11.png" class="background-img background-img-np1 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="shap-11">
    <img src="<?= base_url('template/frontend/') ?>assets/images/banner/banner-shap-2.png" class="background-img background-img-np2 img-fluid" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="90" data-iq-ease="power.inOut" alt="banner-shap-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-2">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="product-slider swiper-container">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img alt="product-15" src="<?= base_url('foto_produk/' . $data['foto_produk']) ?>" />
                                    </div>
                                    <!-- <div class="swiper-slide">
                                            <img alt="product-16" src="<?= base_url('template/frontend/') ?>assets/images/product/new-product/02.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img alt="product-17" src="<?= base_url('template/frontend/') ?>assets/images/product/new-product/01.jpg" />
                                        </div> -->
                                </div>
                            </div>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <!-- <div class="swiper-slide">
                                            <img alt="product-19" src="<?= base_url('template/frontend/') ?>assets/images/product/new-product/1.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img alt="product-20" src="<?= base_url('template/frontend/') ?>assets/images/product/new-product/2.jpg" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img alt="product-21" src="<?= base_url('template/frontend/') ?>assets/images/product/new-product/3.jpg" />
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="card content-card">
                            <div class="card-body ">
                                <h2><?= $data['nama_produk'] ?></h2>
                                <p><?= $data['deskripsi_produk'] ?></p>
                                <!-- <div class="iq-product-policy">
                                        <span class="text-black fs-5 me-1">Categories:</span>
                                        <a href="javascript:void(0)" class="iq-product-policy" rel="tag">Salads</a>,
                                        <a href="javascript:void(0)" class="iq-product-policy" rel="tag">Soups</a>
                                    </div> -->
                                <div class="mt-4">
                                    <div class="iq-ratings d-flex ">
                                        <ul class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <a href="#reviews" class="ms-4 review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>
                                    </div>
                                </div>
                                <p class="text-primary fs-4 mt-2">
                                    Rp. <?= number_format($data['harga_produk'], 0, ",", ".") ?>
                                </p>
                                <div class="iq-team-social col-12 col-sm-12 mt-4">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-3">
                                    <div class="block">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="review-link" target="_blank">
                                                    <i class="fas fa-shield-alt"></i>
                                                    <span class="ms-3">Security policy </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="review-link" target="_blank">
                                                    <i class="fas fa-car-side"></i>
                                                    <span class="ms-3">Delivery policy </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="review-link" target="_blank">
                                                    <i class="fas fa-exchange-alt"></i>
                                                    <span class="ms-3">Return policy </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="tabs-wrapper">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation" style="margin-right: 15px;">
                                    <a class="nav-link active" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" href="javascript:void(0)" role="tab" aria-controls="pills-description" aria-selected="true">Deskripsi</a>
                                </li>
                                <li class="nav-item" role="presentation" style="margin-right: 15px;">
                                    <a class="nav-link" id="pills-additional-information-tab" data-bs-toggle="pill" data-bs-target="#pills-additional-information" href="javascript:void(0)" role="tab" aria-controls="pills-additional-information" aria-selected="false">Informasi Tambahan</a>
                                </li>
                                <li class="nav-item" role="presentation" style="margin-right: 15px;">
                                    <a class="nav-link" id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" href="javascript:void(0)" role="tab" aria-controls="pills-reviews" aria-selected="false">Reviews (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <div class="tabs-panel">
                                    <p class="mb-3"><?= $data['deskripsi_produk'] ?></p>
                                    <!-- <div class="product-images-list row mb-3">
                                            <div class="col-lg-3 col-md-6">
                                                <img src="<?= base_url('template/frontend/') ?>assets/images/product/new-product/11.png" class="img-fluid" alt="5">
                                            </div>
                                            <div class="sm-top col-lg-3 col-md-6">
                                                <img src="<?= base_url('template/frontend/') ?>assets/images/product/new-product/12.png" class="img-fluid" alt="6">
                                            </div>
                                            <div class="md-top col-lg-3 col-md-6">
                                                <img src="<?= base_url('template/frontend/') ?>assets/images/product/new-product/13.png" class="img-fluid" alt="7">
                                            </div>
                                            <div class="md-top col-lg-3 col-md-6">
                                                <img src="<?= base_url('template/frontend/') ?>assets/images/product/new-product/14.png" class="img-fluid" alt="8">
                                            </div>
                                        </div>
                                        <ul class="mb-3 text-primary">
                                            <li>Heart health and stroke prevention</li>
                                            <li>The health of the next generation</li>
                                            <li>Strong bones and teeth</li>
                                            <li>Better mood</li>
                                        </ul>
                                        <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque.</p> -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-additional-information" role="tabpanel" aria-labelledby="pills-additional-information-tab">
                                <div class="tabs-panel">
                                    <table class="shop-attributes">
                                        <tr>
                                            <th>berat</th>
                                            <td>
                                                <p><?= $data['berat'] ?> gram</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Stok</th>
                                            <td>
                                                <p><?= $data['stok_produk'] ?></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                                <div class="tabs-panel">
                                    <h5>1 review for <span>Broccoli</span></h5>
                                    <div class="iq-main d-flex flex-wrap justify-content-between pb-3">
                                        <div class="d-flex flex-wrap">
                                            <div class="iq-img me-4 mt-3">
                                                <img alt='img-21' src='<?= base_url('template/frontend/') ?>assets/images/blog/11.png' class='img-fluid rounded-pill avatar avatar-60 photo' height='60' width='60' loading='lazy' />
                                            </div>
                                            <div class="iq-content mt-3">
                                                <h5 class="mb-0">ADMIN</h5>
                                                <p class="mb-0 text-primary">SEPTEMBER 8, 2021</p>
                                                <p>On behalf of us all – thank you for making our evening such an enjoyable one!<br />Your hard work and consideration were very much appreciated.</p>
                                            </div>
                                        </div>
                                        <div class="iq-stars">
                                            <div class="iq-ratings">
                                                <ul class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="respond" class="comment-respond mt-3">
                                        <span class="fs-5">Add a review</span>
                                        <form>
                                            <p class="mb-3">Your email address will not be published. Required fields are marked *</p>
                                            <div class="d-flex mb-2">
                                                <h6>Your rating&nbsp;<span class="required">*</span></h6>
                                                <div class="iq-ratings ms-4">
                                                    <ul class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                        <li><i class="far fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mb-3 ">
                                                <label for="message" class="form-label">Your review *</label>
                                                <textarea class="form-control mb-3" id="message" rows="3"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <label for="exampleInputPassword1" class="form-label">Name *</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div>
                                                        <label for="floatingInput" class="form-label">Email *</label>
                                                        <input type="email" class="form-control" id="floatingInput">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Save my name, email, and website in this browser for the next time I comment.</label>
                                            </div>
                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="submit" class="submit" value="Submit" />
                                                <input type='hidden' name='comment_post_ID' value='583' id='comment_post_ID' />
                                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 section-padding-120 section-padding-90">
                <div class="iq-title-box text-center">
                    <span class="iq-subtitle">Produced</span>
                    <h2 class="iq-title">Related products</h2>
                    <div class="iq-title-divider"></div>
                </div>
                <div class="related-product overflow-hidden">
                    <ul class="swiper-wrapper list-inline m-0 p-0">
                        <li class="swiper-slide">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/17.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Fruits,Vegetables</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Fruit Frozen</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through"></span>
                                                <span class="text-primary"><b>$5</b></span>
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
                        </li>
                        <li class="swiper-slide">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/10.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Fruit Yogurt,Fruits</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Grapes</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through">$10</span>
                                                <span class="text-primary"><b>$8</b></span>
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
                        </li>
                        <li class="swiper-slide">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/18.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Vegetables</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Garlic</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through">$5.90</span>
                                                <span class="text-primary"><b>$30</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="fas fa-star fa-xs me-1"></i>
                                                    <i class="fas fa-star fa-xs me-1"></i>
                                                    <i class="fas fa-star fa-xs me-1"></i>
                                                    <i class="fas fa-star fa-xs me-1"></i>
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
                        </li>
                        <li class="swiper-slide">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/05.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Fruits</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Pistachio</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through"></span>
                                                <span class="text-primary"><b>$135</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="fas fa-star fa-xs me-1"></i>
                                                    <i class="fas fa-star fa-xs me-1"></i>
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
                        </li>
                        <li class="swiper-slide">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/17.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Fruits,Vegetables</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Fruit Frozen</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through"></span>
                                                <span class="text-primary"><b>$5</b></span>
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
                        </li>
                        <li class="swiper-slide">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="iq-product-image">
                                        <img src="<?= base_url('template/frontend/') ?>assets/images/product/10.jpg" class="hover_image" alt="img">
                                    </div>
                                    <div class="iq-product-content mt-3">
                                        <p class="mb-0"><small>Fruit Yogurt,Fruits</small></p>
                                        <a href="<?= base_url('template/frontend/') ?>product/new-product.html" class="iq-product-title-link h5">Grapes</a>
                                        <div class="d-flex align-items-center justify-content-between my-2">
                                            <h6 class="m-0">
                                                <span class="text-decoration-line-through">$10</span>
                                                <span class="text-primary"><b>$8</b></span>
                                            </h6>
                                            <div class="iq-ratings">
                                                <div class="d-flex align-items-center text-secondary list-inline p-0 m-0">
                                                    <i class="fas fa-star fa-xs me-1"></i>
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
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>