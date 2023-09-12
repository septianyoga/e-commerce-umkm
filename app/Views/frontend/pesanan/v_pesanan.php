<?= $this->extend('layout/main_front') ?>
<?= $this->section('content') ?>
<?php if (isset($_GET['message'])) { ?>
    <script>
        Swal.fire(
            '<?= $_GET['message'] ?>',
            '<?= $_GET['message'] == 'success' ? 'Pembayaran Berhasil Dibayar' : ($_GET['message'] == 'info' ? 'Pembayaran Belum Diselesaikan' : 'Pembayaran Error')  ?>',
            '<?= $_GET['message'] ?>'
        )
    </script>
<?php } ?>
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
<section class="organic-products mt-5 pb-0 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-product-block">
                    <div class="row">
                        <?php foreach ($data as $row) { ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="card card-product">
                                    <div class="card-body">
                                        <a onclick="showLoading()" href="<?= base_url('order/' . $row['id_order']) . '/detail' ?>">
                                            <div class="d-flex align-items-center">
                                                <div class="iq-product-img iq-product-image me-3">
                                                    <?php foreach ($produk as $val) {
                                                        if ($val['id_order'] == $row['id_order']) {
                                                    ?>
                                                            <img src="<?= base_url('foto_produk/' . $val['foto_produk']) ?>" class="img-fluid" style="height: 100px; aspect-ratio: 4/3; object-fit: contain; " alt=" product-image">
                                                    <?php
                                                            break;
                                                        }
                                                    } ?>
                                                </div>
                                                <div class="iq-product-info">
                                                    <h6>Pesanan Tanggal <?= date('d-m-Y H:i', strtotime($row['tanggal'])) ?></h6>
                                                    <?php foreach ($produk as $val) {
                                                        if ($val['id_order'] == $row['id_order']) {
                                                    ?>
                                                            <p class="my-0"><?= $val['nama_produk'] ?></p>
                                                    <?php
                                                            break;
                                                        }
                                                    } ?>
                                                    <p class="my-0 mb-1">Status Pesanan : <?= $row['status_pesanan'] == 'Menunggu Pembayaran' ? '<span class="text-secondary">' . $row['status_pesanan'] . '</span>' : $row['status_pesanan'] ?></p>
                                                    <h6 class="text-primary my-0 py-0">Total : Rp. <?= number_format($row['total_pembayaran'], 0, ",", ".") ?></h6>
                                                    <small class="my-0 py-0"> (Klik untuk lihat detail)</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>