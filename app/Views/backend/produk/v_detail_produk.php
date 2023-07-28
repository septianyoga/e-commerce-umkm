<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title"><?= $title ?></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-md-6 col-lg-4">
                                <img src="<?= base_url('foto_produk/' . $data['foto_produk']) ?>" class="card-img w-100" alt="#">
                            </div>
                            <div class="col-md-6 col-lg-8">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $data['nama_produk'] ?></h4>
                                    <p class="card-text">Deskripsi : <?= $data['deskripsi_produk'] ?></p>
                                    <p class="card-text">Harga : Rp. <?= number_format($data['harga_produk'], 0, ",", ".") ?></p>
                                    <p class="card-text">Stok : <?= $data['stok_produk'] ?></p>
                                    <p class="card-text"><small class="text-muted">Status : <?= $data['status_produk'] ?></small></p>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url('produk') ?>" class="btn btn-secondary mt-2"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>

<?= $this->endSection() ?>