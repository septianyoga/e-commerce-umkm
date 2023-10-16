<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?> | UMKM Rasa Alami</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('asset/foto/logo-umkm.png') ?>" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/') ?>assets/css/libs.min.css">
    <!-- fontawsome Css Build -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/') ?>assets/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/') ?>assets/css/foodsts.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default@4/default.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <style>
        .lds-ellipsis {
            display: flex;
            position: fixed;
            width: 80px;
            height: 80px;
            z-index: 99999;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            /* min-height: 100vh; */
            justify-content: center;
            align-items: center;
            background-color: rgba(84, 98, 111, 0.5);

        }

        .lds-ellipsis div {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #1d1c1c;
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }

        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 0.6s infinite;
        }

        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(0);
            }
        }

        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(24px, 0);
            }
        }

        .bg-load {
            background-color: rgba(84, 98, 111, 0.5);
            /* position: absolute; */
        }
    </style>
</head>

<body class="  ">
    <div class="lds-ellipsis" id="spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
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
                                    <h4 class="my-0 text-primary">UMKM</h4>
                                    <h6 class="my-0 text-secondary">Rasa Alami</h6>
                                    <!-- <img class="img-fluid" src="<?= base_url('template/frontend/') ?>assets/images/logo.png" alt="foodsto1"> -->
                                </a>
                            </div>
                            <div class="widget mb-4">
                                <div class="textwidget text-body">
                                    <p>Diskon untuk pelanggan yang sering membeli.<br>
                                        Syarat & Ketentuan Berlaku.
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
                                        <li class="menu-item"><a href="<?= base_url('/') ?>"><i class="fas fa-chevron-right me-2"></i>Home</a></li>
                                        <li class="menu-item"><a href="<?= base_url('checkout') ?>"><i class="fas fa-chevron-right me-2"></i>Checkout</a></li>
                                        <li class="menu-item"><a href="<?= base_url('order') ?>"><i class="fas fa-chevron-right me-2"></i>Pesanan</a></li>
                                        <li class="menu-item"><a href="<?= base_url('about') ?>"><i class="fas fa-chevron-right me-2"></i>About Us</a></li>
                                        <li class="menu-item"><a href="<?= base_url('galeri') ?>"><i class="fas fa-chevron-right me-2"></i>Galeri</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
                            <div class="widget">
                                <h5 class="footer-title">Information</h5>
                                <div class="menu-footer2-container">
                                    <p>Kini Sudah Tersedia untuk Mobile.</p>
                                    <a href="<?= base_url('download_mobileapp') ?>" class="text-secondary">*Klik Disini Untuk Mendownload*</a>
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
                                                <a href="javascript:void(0)"><i class="fa fa-home"></i><span>Kp. Cijengkol RT 03 RW 02 Desa Cijengkol, Kec. Serangpanjang, Kab. Subang</span></a>
                                            </li>
                                            <li>
                                                <a href="mailto:rasaalami.official@gmail.com"><i class="fa fa-envelope"></i><span>rasaalami.official@gmail.com</span></a>
                                            </li>
                                            <li>
                                                <a href="https://api.whatsapp.com/send?phone=6285221779826&text=Halo%20Bu%2C%20Aku%20mau%20pesen%20Sale%20pisangnya%20dong..."><i class="fa fa-phone"></i><span>6285221779826</span></a>
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
                    <div class="d-flex justify-content-center">
                        <span class="copyright">Copyright 2023 UMKM Rasa Alami All Rights Reserved.</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="back-to-top" style="z-index: 999999 !important;">
            <a class="top" target="_blank" href="https://api.whatsapp.com/send?phone=6295330930059&text=Halo%20kak%2C%20Aku%20mau%20pesen%20kripik%20pisangnya%20dong...">
                <i class="bi bi-whatsapp"></i>
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

    <?php if ($title != 'Checkout') { ?>
        <script>
            window.onload = function() {
                document.getElementById("spinner").style.display = "none";
            }
        </script>
    <?php } ?>
    <script>
        function showLoading() {
            document.getElementById("spinner").style.display = "block";
        }
    </script>
</body>

</html>