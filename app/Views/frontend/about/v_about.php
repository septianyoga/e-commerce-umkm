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
<section class="about-us section-padding-120">
    <div class="container">
        <div class="row">
            <div class="scrolling-text middle left">
                <div data-iq-gsap="onStart" data-iq-opacity="1" data-iq-position-x="-200" data-iq-trigger="scroll" data-iq-scroll-scrub="true" data-iq-ease="power.inOut">
                    About
                </div>
            </div>
            <div class="col-lg-4" data-iq-gsap="onStart" data-iq-position-x="-150" data-iq-rotate="0" data-iq-trigger="scroll">
                <div class="iq-title-box mb-2">
                    <span class="iq-subtitle">About Us</span>
                    <h2 class="iq-title">Kami Membuat Kripik Dengan Rasa Alami</h2>
                    <div class="iq-title-divider"></div>
                </div>
                <p class="mb-0">
                    Rasa alami adalah rasa asli yang berasal dari buah dan tidak menggunakan gula / pemanis buatan.</p>
                <p>Kami menyediakan produk yang dapat dibeli satuan atau pun perpaket jika anda mendaftarkan akun sebagai reseller.
                </p>
                <p>Silahkan pesan produk kami dan lakukan pemesanan hanya menggunakan 1 website saja. Atau dapat menghubungi via WhatsApp berikut:</p>
                <a target="_blank" onclick="showLoading()" href="https://api.whatsapp.com/send?phone=6285221779826&text=Halo%20Bu%2C%20Aku%20mau%20pesen%20Sale%20pisangnya%20dong..." class="btn btn-primary text-white"><i class="bi bi-whatsapp text-white"></i> WhatsApp</a>
            </div>
            <div class="col-lg-4" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.inOut">
                <div class="about-img">
                    <a href="javascript:void(0)">
                        <img width="386" height="470" src="<?= base_url('asset/foto/produk-kripik1.jpg') ?>" class="attachment-full size-full" alt="banner" style=" aspect-ratio: 4/3; object-fit: contain; ">
                    </a>
                </div>
            </div>
            <div class="col-lg-4" data-iq-gsap="onStart" data-iq-position-x="150" data-iq-rotate="0" data-iq-trigger="scroll" data-iq-ease="power.inOut">
                <div class="about-img">
                    <a href="javascript:void(0)">
                        <img width="386" height="470" src="<?= base_url('asset/foto/produk-kripik2.jpg') ?>" class="attachment-full size-full" alt="banner" style=" aspect-ratio: 4/3; object-fit: contain; ">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>