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
                        <form action="<?= base_url('produk/edit/' . $data['id_produk']) ?>" data-toggle="validator" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Produk *</label>
                                        <input type="text" class="form-control" name="nama_produk" placeholder="Masukan Nama Produk" data-errors="Please Enter Name." value="<?= $data['nama_produk'] ?>" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Harga *</label>
                                        <input type="number" class="form-control" name="harga_produk" placeholder="Masukan Harga Produk" data-errors="Please Enter Code." value="<?= $data['harga_produk'] ?>" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img src="<?= base_url('foto_produk/' . $data['foto_produk']) ?>" class="w-100" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto Produk</label>
                                        <input type="file" class="form-control image-file" name="foto_produk">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Stok *</label>
                                        <input type="text" class="form-control" name="stok_produk" placeholder="Masukan Stok Produk" data-errors="Please Enter Code." value="<?= $data['stok_produk'] ?>" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description Produk</label>
                                        <textarea class="form-control" rows="4" name="deskripsi_produk" required><?= $data['deskripsi_produk'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Status Produk <small>(Aktif artinya produk tersebut dapat dipesan)</small></label>
                                        <select name="status_produk" id="status_produk" class="form-control">
                                            <option value="Aktif" <?= $data['status_produk'] == 'Aktif' ? 'selected' : '' ?>>Aktif</option>
                                            <option value="Non Aktif" <?= $data['status_produk'] == 'Non Aktif' ? 'selected' : '' ?>>Non Aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Ubah Produk</button>
                            <a href="<?= base_url('produk') ?>" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>

<?= $this->endSection() ?>