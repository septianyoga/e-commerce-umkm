<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?> | UMKM Rasa Alami</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('template/frontend/') ?>assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/') ?>assets/css/libs.min.css">
    <!-- fontawsome Css Build -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/') ?>assets/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/') ?>assets/css/foodsto.min.css?v=1.0.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default@4/default.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

</head>

<body class="  ">
    <?php if (session()->getFlashdata('pesan')) { ?>
        <script>
            Swal.fire(
                'Berhasil!',
                '<?= session()->getFlashdata('pesan') ?>',
                'success'
            )
        </script>
    <?php } ?>
    <?php if (session()->getFlashdata('peringatan')) { ?>
        <script>
            Swal.fire(
                'Maaf!',
                '<?= session()->getFlashdata('peringatan') ?>',
                'info'
            )
        </script>
    <?php } ?>
    <span class="screen-darken"></span>
    <!-- loader Start -->
    <!-- <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div> -->
    <!-- loader END -->

    <?= $this->include('layout/nav_front'); ?>

    <main class="main-content">
        <!--Nav Start-->

        <div class="iq-height" style="height: 89px;"></div>
        <!--Nav End-->

        <?= $this->renderSection('content') ?>

        <footer class="footer bg-soft-primary">
            <div class="footer-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <div class="footer-logo">
                                <a href="javascript:void(0)">
                                    <img class="img-fluid" src="<?= base_url('template/frontend/') ?>assets/images/logo.png" alt="foodsto1">
                                </a>
                            </div>
                            <div class="widget mb-4">
                                <div class="textwidget text-body">
                                    <p>Subscribe to our newsletter and get 10% off your<br>
                                        first purchase.
                                    </p>
                                </div>
                            </div>
                            <ul class="info-share social-icone d-inline list-inline">
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fab fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0 ">
                            <div class="widget">
                                <h5 class="footer-title">Link</h5>
                                <div class="menu-footer1-container">
                                    <ul id="menu-footer1" class="menu list-inline p-0 m-0">
                                        <li class="menu-item"><a href="<?= base_url('template/frontend/') ?>checkout.html"><i class="fas fa-chevron-right me-2"></i>Checkout</a></li>
                                        <li class="menu-item"><a href="<?= base_url('template/frontend/') ?>wishlist.html"><i class="fas fa-chevron-right me-2"></i>Wishlist</a></li>
                                        <li class="menu-item"><a href="<?= base_url('template/frontend/') ?>cart.html"><i class="fas fa-chevron-right me-2"></i>Shopping Cart</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
                            <div class="widget">
                                <h5 class="footer-title">Information</h5>
                                <div class="menu-footer2-container">
                                    <ul id="menu-footer2" class="menu list-inline p-0 m-0">
                                        <li class="menu-item"><a href="<?= base_url('template/frontend/') ?>about-us.html"><i class="fas fa-chevron-right me-2"></i>About Us</a></li>
                                        <li class="menu-item"><a href="<?= base_url('template/frontend/') ?>our-team.html"><i class="fas fa-chevron-right me-2"></i>Our Team</a></li>
                                        <li class="menu-item"><a href="<?= base_url('template/frontend/') ?>contact-us.html"><i class="fas fa-chevron-right me-2"></i>Contact Us</a></li>
                                        <li class="menu-item"><a href="<?= base_url('template/frontend/') ?>blog/left-sidebar-blog.html"><i class="fas fa-chevron-right me-2"></i>Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
                            <div class="widget">
                                <h5 class="footer-title ">Quick Contact</h5>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="iq-contact list-inline p-0 m-0">
                                            <li>
                                                <a href="javascript:void(0)"><i class="fa fa-home"></i><span>1234 North Avenue Luke Lane, South Bend, IN 360001</span></a>
                                            </li>
                                            <li>
                                                <a href="mailto:jondoe@demo.com"><i class="fa fa-envelope"></i><span>jondoe@demo.com</span></a>
                                            </li>
                                            <li>
                                                <a href="tel:+0123456789"><i class="fa fa-phone"></i><span>+0123456789</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright-footer bg-soft-primary">
            <div class="container">
                <div class="pt-3 pb-3">
                    <div class="d-flex justify-content-between">
                        <span class="copyright">Copyright 2021 foodsto All Rights Reserved.</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="back-to-top">
            <a class="top" id="top" href="#top">
                <svg width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 15.5L12 8.5L19 15.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </main>

    <!-- Library Bundle Script -->
    <script src="<?= base_url('template/frontend/') ?>assets/js/libs.min.js"></script>

    <!-- GSAP Animation JS-->
    <script src="<?= base_url('template/frontend/') ?>assets/vendors/gsap/gsap.min.js"></script>
    <script src="<?= base_url('template/frontend/') ?>assets/vendors/gsap/ScrollTrigger.min.js"></script>

    <!-- App Script -->
    <script src="<?= base_url('template/frontend/') ?>assets/js/app.js"></script>

    <!-- Gsap Animation Init -->
    <script src="<?= base_url('template/frontend/') ?>assets/js/gsap.js"></script>

    <!-- Slider Script -->
    <script src="<?= base_url('template/frontend/') ?>assets/js/slider.js"></script>

    <!-- components -->


    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-primary ms-3 text-white fw-bold h6',
                cancelButton: 'btn btn-secondary text-white fw-bold h6'
            },
            buttonsStyling: false
        })
        <?php if (session()->get('role')) { ?>
            const alertButton = document.querySelectorAll('[data-alert="sweetalert-cart"]')
            Array.from(alertButton, (btn) => {
                btn.addEventListener('click', () => {
                    swalWithBootstrapButtons.fire({
                        title: 'Menambahkan Ke Keranjang!',
                        text: "Silahkan cek keranjang anda.",
                        icon: 'success',
                        showCancelButton: true,
                        confirmButtonText: 'Lanjut Membeli',
                        cancelButtonText: 'Checkout',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // btn.querySelector('.btn').innerHTML = 'View Cart <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>'
                            return true
                        } else if (
                            /* Read more about handling dismissals below */
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            window.location.replace('<?= base_url('checkout') ?>')
                        }
                    })
                })
            })
        <?php } else { ?>

            function addCart(id_produk) {
                Swal.fire(
                    'Gagal!',
                    'Anda Harus Login Terlebih Dahulu',
                    'info'
                )
            }
        <?php } ?>
    </script>

    <script>
        function getCountCart() {
            $.ajax({
                url: '<?= base_url('cart/get') ?>',
                type: 'GET',
                success: function(response) {
                    $('#cart').remove()
                    $('#addcart').append('<span id="cart">' + response + '</span>')
                }
            })
        }
    </script>
    <script>
        function getAllCart() {
            $.ajax({
                url: '<?= base_url('cart/getAll') ?>',
                type: 'GET',
                success: function(response) {
                    // console.log(response)
                    $('.delcart').remove()
                    $('.pasteCart').append(response)
                }
            })
        }
    </script>
    <script>
        function delCart(id_cart) {
            $.ajax({
                url: '<?= base_url('cart/') ?>' + id_cart + '/del',
                type: 'GET',
                success: function(response) {
                    // console.log(response)
                    getAllCart()
                    getCountCart()
                }
            })
        }
    </script>
    <?php if (session()->get('role')) { ?>
        <script>
            window.onload = function() {
                getCountCart()
                getAllCart()
                // alert('tes')
            }
        </script>
    <?php } ?>

</body>

</html>