<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>POS Dash | Responsive Bootstrap 4 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('template/backend/html/') ?>assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/vendor/remixicon/fonts/remixicon.css">
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default@4/default.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <!-- css loader -->
    <!-- <link rel="stylesheet" href="<?= base_url('asset/css/loading.css') ?>"> -->
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

<body class="bg-load" id="loader">
    <div class="lds-ellipsis" id="spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <?php if (session()->getFlashdata('fail')) { ?>
        <script>
            Swal.fire({
                icon: 'error',
                text: 'Username atau Password Salah!',
                footer: '<a href="">Lupa Password ?</a>'
            })
        </script>
    <?php } ?>
    <?php if (session()->getFlashdata('pesan')) { ?>
        <script>
            Swal.fire(
                'Gagal!',
                'Anda Harus Login Terlebih Dahulu',
                'info'
            )
        </script>
    <?php } ?>
    <?php if (session()->getFlashdata('logout')) { ?>
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Logout Berhasil',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php } ?>
    <!-- loader Start -->
    <!-- <div id="loading">
        <div id="loading-center">
        </div>
    </div> -->
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-lg-8">
                        <h2 class="mb-2 text-center">UMKM Rasa Alami</h2>
                        <div class="card auth-card ">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center auth-content">
                                    <div class="col-lg-7 align-self-center">
                                        <div class="p-3">
                                            <h2 class="mb-2">Log In</h2>
                                            <?php
                                            $errors = session()->getFlashdata('errors');
                                            if (!empty($errors)) { ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <ul>
                                                        <?php foreach ($errors as $key => $value) { ?>
                                                            <li><?= esc($value); ?></li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            <?php  } ?>
                                            <p>Silahkan Login menggunakan akun anda.</p>
                                            <form action="<?= base_url('auth/login') ?>" method="post" onsubmit="showLoading()">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="username" type="text" placeholder=" ">
                                                            <label>Username</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="password" type="password" placeholder=" ">
                                                            <label>Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <a href="auth-recoverpw.html" class="text-primary float-right">Lupa Password?</a>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Log in</button>
                                                <p class="mt-3">
                                                    Belum Mempunyai Akun ? <a href="auth-sign-up.html" class="text-primary">Daftar Sekarang.</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 content-right">
                                        <img src="<?= base_url('template/backend/html/') ?>assets/images/login/01.png" class="img-fluid image-right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="<?= base_url('template/backend/html/') ?>assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>assets/js/app.js"></script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(1500, 0).slideUp(1500, function() {
                $(this).remove();
            });
        }, 4000);
    </script>
    <script>
        window.onload = function() {
            document.getElementById("spinner").style.display = "none";
            $('.bg-load').removeClass('bg-load');
        }
    </script>
    <script>
        function showLoading() {
            document.getElementById("spinner").style.display = "block";
            $('#loader').addClass('bg-load')
        }
    </script>
</body>

</html>