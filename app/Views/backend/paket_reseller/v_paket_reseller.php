<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Paket Reseller</h4>
                    </div>
                    <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="las la-plus mr-1"></i>Tambah</button>
                </div>
            </div>
            <div class="col-lg-12">
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
                <div class="table-responsive rounded mb-3">
                    <table class="data-tables table mb-0 tbl-server-info">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">
                                <th>No</th>
                                <th>Nama Paket</th>
                                <th>Harga Perpaket</th>
                                <th>Berat</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            <?php
                            $no = 1;
                            foreach ($data as $row) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="<?= base_url('foto_produk/' . $row['foto_produk']) ?>" class="img-fluid rounded avatar-50 mr-3" alt="image" style="aspect-ratio: 4/3; object-fit: contain;">
                                            <div>
                                                <?= $row['nama_produk'] ?>
                                                <!-- <p class="mb-0"><small>This is test Product</small></p> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rp. <?= number_format($row['harga_produk'], 0, ",", ".") ?></td>
                                    <td><?= $row['berat'] ?> gr</td>
                                    <td><?= $row['status_produk'] ?></td>
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="<?= base_url('produk/' . $row['id_produk']) ?>">Detail</a>
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="<?= base_url('produk/' . $row['id_produk'] . '/ubah') ?>">Ubah</a>
                                            <a class="badge bg-warning mr-2" href="#" data-toggle="modal" data-target="#del-<?= $row['id_produk'] ?>">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <div class="media align-items-top justify-content-between">
                            <h3 class="mb-3">Product</h3>
                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                        <div class="content edit-notes">
                            <div class="card card-transparent card-block card-stretch event-note mb-0">
                                <div class="card-body px-0 bukmark">
                                    <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                                        <div class="quill-tool">
                                        </div>
                                    </div>
                                    <div id="quill-toolbar1">
                                        <p>Virtual Digital Marketing Course every week on Monday, Wednesday and
                                            Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                    </div>
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                        <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Paket Reseller</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('produk/add') ?>" data-toggle="validator" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Paket *</label>
                                <input type="text" class="form-control" name="nama_produk" placeholder="Contoh : Paket Reseller 20 pcs Kripik Pisang Sale" data-errors="Please Enter Name." required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Perpaket* <small>(Tidak Memakai Titik)</small></label>
                                <input type="number" class="form-control" name="harga_produk" placeholder="Contoh : 100000" data-errors="Please Enter Code." required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Foto Paket Produk *</label>
                                <input type="file" class="form-control image-file" name="foto_produk">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Berat Paket* (satuan gram)</label>
                                <input type="number" class="form-control" name="berat" placeholder="Contoh : 1000" data-errors="Please Enter Code." required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi Paket Produk</label>
                                <textarea class="form-control" rows="4" name="deskripsi_produk" placeholder="Masukan Deskripsi Paket Produk" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="sumbit" class="btn btn-primary">Tambah Paket Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal hapus -->
<?php foreach ($data as $val) { ?>
    <div class="modal fade" id="del-<?= $val['id_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin ingin menghapus produk <b><?= $val['nama_produk'] ?> ? </b> Semua data pesanan pada produk ini akan ikut terhapus.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('produk/' . $val['id_produk'] . '/hapus') ?>" class="btn btn-danger">Ya, Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?= $this->endSection() ?>