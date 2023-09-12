<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Pesanan</h4>
                    </div>
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
                                <th>Nama Pemesan</th>
                                <th>Tanggal</th>
                                <th>Total Harga</th>
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
                                    <td><?= $no++; ?></td>
                                    <td><?= $row['nama_user'] ?></td>
                                    <td><?= $row['tanggal'] ?></td>
                                    <td>Rp. <?= number_format($row['total_pembayaran'], 0, ",", ".") ?></td>
                                    <td><span class="badge badge-<?= $row['status_pesanan'] == 'Selesai' ? 'success' : ($row['status_pesanan'] == 'Menunggu Pembayaran' ? 'secondary' : ($row['status_pesanan'] == 'Pending' ? 'warning' : ($row['status_pesanan'] == 'Expired' ? 'danger' : ' border border-success text-success'))) ?>"><?= $row['status_pesanan'] == 'Selesai' ? 'Selesai Dibayar' : $row['status_pesanan'] ?></span></td>
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge badge-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Detail" href="<?= base_url('pesanan/' . $row['id_order']) ?>">Detail</a>
                                            <?php if ($row['status_pesanan'] == 'Selesai') { ?>
                                                <a class="badge badge-info mr-2" title="Terima Pesanan" href="#" data-toggle="modal" data-target="#approv-<?= $row['id_order'] ?>">Approv</a>
                                            <?php } elseif ($row['status_pesanan'] == 'Dikemas') { ?>
                                                <a class="badge badge-primary mr-2" title="Kirim Paket" href="#" data-toggle="modal" data-target="#kirim-<?= $row['id_order'] ?>">Kirim Paket</a>
                                            <?php }
                                            if ($row['tanggal_dikirim'] > date('Y-m-d H:i:s', strtotime('+14 days', strtotime($row['tanggal_dikirim'])))) { ?>
                                                <a class="badge badge-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat Detail" href="#">Pesanan Diterima</a>

                                            <?php } ?>
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
</div>

<?php foreach ($data as $val) { ?>
    <!-- Modal approv -->
    <div class="modal fade" id="approv-<?= $val['id_order'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <div class="media align-items-top justify-content-between">
                            <h3 class="mb-3">Terima Pesanan</h3>
                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                        <div class="content edit-notes">
                            <div class="card card-transparent card-block card-stretch event-note mb-0">
                                <div class="card-body px-0 bukmark">
                                    <div id="quill-toolbar1">
                                        <p>Yakin ingin menerima pesanan dari <b><?= $val['nama_user'] ?> </b> dan segera mengemas pesanan?</p>
                                    </div>
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                        <div class="btn btn-outline-primary mr-3" data-dismiss="modal">Batal</div>
                                        <a onclick="showLoading()" href="<?= base_url('pesanan/' . $val['id_order'] . '/approv') ?>" class="btn btn-primary">Ya, Terima</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php foreach ($data as $roww) { ?>
    <!-- Modal kirim -->
    <div class="modal fade" id="kirim-<?= $roww['id_order'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <div class="media align-items-top justify-content-between">
                            <h3 class="mb-3">Pesanan Dikirim</h3>
                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                        <form action="<?= base_url('pesanan/' . $roww['id_order'] . '/updateResi') ?>" data-toggle="validator" method="post">
                            <input type="hidden" name="status_pesanan" value="Dikirim">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Masukan Nomor Resi Pesanan Jika Sudah Dikirimkan*</label>
                                            <input type="text" class="form-control" name="resi" placeholder="Masukan Resi Pengiriman" data-errors="Please Enter Name." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Masukan Tanggal Paket Diserahkan Ke Kurir*</label>
                                            <input type="date" class="form-control" name="tanggal_dikirim" placeholder="Masukan Resi Pengiriman" data-errors="Please Enter Name." value="<?= date('Y-m-d') ?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="sumbit" onclick="showLoading()" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<?= $this->endSection() ?>