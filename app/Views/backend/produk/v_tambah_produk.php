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
                        <form action="<?= base_url('produk/add') ?>" data-toggle="validator" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Produk *</label>
                                        <input type="text" class="form-control" name="nama_produk" placeholder="Contoh Kripik Pisang Sale" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Harga *<small>(Tidak Memakai Titik)</small></label>
                                        <input type="number" class="form-control" name="harga_produk" placeholder="Contoh : 100000" data-errors=" Please Enter Code." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Foto Produk *</label>
                                        <input type="file" class="form-control image-file" name="foto_produk">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Berat * (satuan gram)</label>
                                        <input type="number" class="form-control" name="berat" placeholder="Contoh : 500" data-errors="Please Enter Code." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Stok *</label>
                                        <input type="number" class="form-control" name="stok_produk" placeholder="Contoh : 20" data-errors="Please Enter Code." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description Produk</label>
                                        <textarea class="form-control" rows="4" name="deskripsi_produk" placeholder="Masukan Deskripsi Produk" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button onclick="showLoading()" type="submit" class="btn btn-primary mr-2">Tambah Produk</button>
                            <a href="<?= base_url('produk') ?>" onclick="showLoading()" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>

<?= $this->endSection() ?>