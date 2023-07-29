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
    <link rel="stylesheet" href="<?= base_url('template/frontend/') ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('template/frontend/') ?>assets/css/foodsto.min.css?v=1.0.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="  ">
    <span class="screen-darken"></span>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <?= $this->include('layout/nav_front'); ?>

    <?= $this->renderSection('content') ?>

    <!-- Library Bundle Script -->
    <script src="<?= base_url('template/frontend/') ?>assets/js/libs.min.js"></script>

    <!-- GSAP Animation JS-->
    <script src="<?= base_url('template/frontend/') ?>assets/vendor/gsap/gsap.min.js"></script>
    <script src="<?= base_url('template/frontend/') ?>assets/vendor/gsap/ScrollTrigger.min.js"></script>

    <!-- App Script -->
    <script src="<?= base_url('template/frontend/') ?>assets/js/app.js"></script>

    <!-- Gsap Animation Init -->
    <script src="<?= base_url('template/frontend/') ?>assets/js/gsap.js"></script>

    <!-- Slider Script -->
    <script src="<?= base_url('template/frontend/') ?>assets/js/slider.js"></script>

    <!-- components -->


</body>

</html>