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
                            <div class="col-md-6 col-lg-8">
                                <div class="card-body">
                                    <h4 class="card-title">Nama Pemesan : <?= $data['nama_user'] ?></h4>
                                    <p class="card-text">Alamat : <?= $data['alamat'] ?></p>
                                    <ol>
                                        <?php foreach ($produk as $value) {
                                            if ($value['id_order'] == $data['id_order']) {
                                        ?>
                                                <li><?= $value['nama_produk'] ?></li>
                                                <p><?= $value['harga_produk'] ?> X <?= $value['qty'] ?> = <?= $value['harga_produk'] * $value['qty'] ?></p>
                                        <?php }
                                        } ?>
                                    </ol>
                                    <p class="card-text">Ongkir : <?= $data['ongkir'] ?></p>
                                    <p class="card-text">Tanggal Pemesanan : <?= date('l, d-m-Y H:i', strtotime($data['tanggal'])) ?></p>
                                    <p class="card-text">Total Pembayaran : <?= $data['total_pembayaran'] ?></p>
                                    <p class="card-text">Jenis Kurir : JNE <?= $data['kurir'] ?></p>
                                    <p class="card-text">No Resi : <?= $data['resi'] == null ? 'Belum dikirim' : $data['resi'] ?></p>
                                    <p class="card-text">Tanggal Dikirim : <?= $data['tanggal_dikirim'] == null ? 'Belum dikirim' : $data['tanggal_dikirim'] ?></p>
                                    <p class="card-text">Metode Pembayaran : <?= $data['metode_pembayaran'] == null ? 'Belum Dibayar' : $data['metode_pembayaran'] ?></p>
                                    <p class="card-text">Jenis Bank : <?= $data['bank'] ?></p>
                                    <p class="card-text">VA Number : <?= $data['va_number'] ?></p>
                                    <p class="card-text">Batas Waktu Pemesanan : <?= $data['batas_waktu_pesan'] ?></p>
                                    <p class="card-text">Status Pesanan: <?= $data['status_pesanan'] ?></p>


                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url('pesanan') ?>" onclick="showLoading()" class="btn btn-secondary mt-2"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>
</main>


<?= $this->endSection() ?>