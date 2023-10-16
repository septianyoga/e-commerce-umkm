<?= $this->extend('layout/main_front') ?>
<?= $this->section('content') ?>
<div class="text-left iq-breadcrumb-one iq-bg-over black" style="background: url(<?= base_url('asset/foto/banner.png') ?>); background-size: contain;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                    <h2 class="title"><?= $title ?></h2>
                    <ol class="breadcrumb main-bg">
                        <li class="breadcrumb-item">
                            <a onclick="showLoading()" href="<?= base_url('/') ?>"><i class="fas fa-home me-2"></i>Home</a>
                        </li>
                        <li class="breadcrumb-item"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="section-padding-120 position-relative">
    <div class="container">
        <div class="row">
            <?php foreach ($data as $d) { ?>
                <div class="col-xl-3 col-lg-4 col-md-6" data-iq-gsap="onStart" data-iq-position-y="50" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.inOut">
                    <div class="card card-product">
                        <div class="card-body">
                            <img src="<?= base_url('foto_galeri/' . $d['foto']) ?>" class="w-100" alt="1">
                            <div class="text-center mt-1">
                                <h5><?= $d['nama_foto'] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>