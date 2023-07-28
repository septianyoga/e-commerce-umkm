<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?> | UMKM Rasa Alami</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('template/backend/html/') ?>assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/css/backend.css?v=1.0.0">
    <!-- <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/vendor/remixicon/fonts/remixicon.css">
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default@4/default.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <!-- css loader -->
    <link rel="stylesheet" href="<?= base_url('asset/css/loading.css') ?>">
    <!-- <style>
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
    </style> -->
</head>

<body class="  ">
    <?php if (session()->getFlashdata('pesan')) { ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '<?= session()->getFlashdata('pesan') ?>',
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
    <div class="lds-ellipsis" id="spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <?= $this->include('layout/nav'); ?>

        <?= $this->renderSection('content') ?>


    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="<?= base_url('template/backend/html/') ?>backend/privacy-policy.html">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="<?= base_url('template/backend/html/') ?>backend/terms-of-service.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>©
                            </span> <a href="#" class="">POS Dash</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
        }
    </script>
    <script>
        function showLoading() {
            document.getElementById("spinner").style.display = "block";
        }
    </script>

</body>

</html>