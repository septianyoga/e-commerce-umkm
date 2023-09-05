<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between">
                    <div>
                        <h4 class="mb-3">Laporan</h4>
                    </div>
                    <!-- <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Cetak</button> -->
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <form action="<?= base_url('laporan/cetak') ?>" data-toggle="validator" method="post" id="form-laporan"> -->
                <form action="<?= base_url('laporan') ?>" data-toggle="validator" method="get" id="form-laporan">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="dari_tgl">Dari Tanggal :</label>
                                    <input type="date" name="dari_tgl" class="form-control" id="dari_tgl" value="<?= date('Y-m-d') ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="sampe_tgl">Sampai Tanggal :</label>
                                    <input type="date" name="sampe_tgl" class="form-control" id="sampe_tgl" value="<?= date('Y-m-d') ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Tampilkan</button>
                            </div>
                        </div>
                    </div>
                </form>
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
                <?php if (isset($_GET['dari_tgl'])) { ?>
                    <form class="float-right mb-2" action="<?= base_url('laporan/cetak') ?>" method="post">
                        <input type="hidden" name="dari_tgl" class="form-control" id="dari_tgl" value="<?= $_GET['dari_tgl'] ?>">
                        <input type="hidden" name="sampe_tgl" class="form-control" id="sampe_tgl" value="<?= $_GET['sampe_tgl'] ?>">
                        <button type="submit" class="btn btn-success">Cetak</button>
                    </form>
                    <div class="table-responsive rounded mb-3">
                        <table class="data-tables table mb-0 tbl-server-info">
                            <thead class="bg-white text-uppercase">
                                <tr class="ligth ligth-data">
                                    <th>No</th>
                                    <th>Nama Pemesan</th>
                                    <th>Produk Yang Dibeli</th>
                                    <th>Tanggal Beli</th>
                                    <th>Dikirim Ke</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body">
                                <?php
                                $no = 1;
                                foreach ($data as $row) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['nama_user'] ?></td>
                                        <td>
                                            <ul>
                                                <?php foreach ($produk as $p) {
                                                    if ($p['id_order'] == $row['id_order']) {
                                                ?>
                                                        <li><?= $p['nama_produk'] ?></li>
                                                <?php }
                                                } ?>
                                            </ul>
                                        </td>
                                        <td><?= $row['tanggal'] ?></td>
                                        <td><?= $row['kota'] ?>, <?= $row['provinsi'] ?></td>
                                        <td>Rp. <?= number_format($row['total_pembayaran'], 0, ",", ".") ?></td>
                                        <td><span class="badge badge-<?= $row['status_pesanan'] == 'Selesai' ? 'success' : ($row['status_pesanan'] == 'Menunggu Pembayaran' ? 'secondary' : ($row['status_pesanan'] == 'Pending' ? 'warning' : ($row['status_pesanan'] == 'Expired' ? 'danger' : ' border border-success text-success'))) ?>"><?= $row['status_pesanan'] == 'Selesai' ? 'Selesai Dibayar' : $row['status_pesanan'] ?></span></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>


<!-- modal tambah -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cetak Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('laporan/cetak') ?>" data-toggle="validator" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="dari_tgl">Dari Tanggal :</label>
                                <input type="date" name="dari_tgl" class="form-control" id="dari_tgl" value="<?= date('Y-m-d') ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sampe_tgl">Sampai Tanggal :</label>
                                <input type="date" name="sampe_tgl" class="form-control" id="sampe_tgl" value="<?= date('Y-m-d') ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="sumbit" class="btn btn-primary">Cetak</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>