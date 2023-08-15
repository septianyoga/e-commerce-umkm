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
                            <a href="<?= base_url('order') ?>"><i class="fas fa-home me-2"></i>Pesanan</a>
                        </li>
                        <li class="breadcrumb-item"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="organic-products mt-3 pb-0 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-product-block">
                    <h4>Produk</h4>
                    <div class="row">
                        <?php foreach ($data as $row) { ?>
                            <div class="col-lg-12 col-md-6">
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="iq-product-img iq-product-image me-3">
                                                <img src="<?= base_url('foto_produk/' . $row['foto_produk']) ?>" class="img-fluid" alt="product-image" style="min-height: 100px; aspect-ratio: 4/3; object-fit: contain;">
                                            </div>
                                            <div class="iq-product-info w-100">
                                                <h5><?= $row['nama_produk'] ?></h5>
                                                <div class="d-flex justify-content-between">
                                                    <p>Rp. <?= number_format($row['harga_produk'], 0, ",", ".") ?> X <?= $row['qty'] ?></p>
                                                    <h5 class="text-primary">Rp. <?= number_format($row['harga_produk'] * $row['qty'], 0, ",", ".") ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <h4>Pengiriman</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex align-items-center pt-2">
                                        <div class="iq-product-info w-100">
                                            <div class="d-flex justify-content-between">
                                                <p>JNE -- <?= $detail['kurir'] ?></p>
                                                <h5 class="text-primary">Rp. <?= number_format($detail['ongkir'], 0, ",", ".") ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="d-flex align-items-center pt-2">
                                        <div class="iq-product-info w-100">
                                            <div class="d-flex justify-content-between">
                                                <h5>Total Pesanan</h5>
                                                <h5 class="text-primary">Rp. <?= number_format($detail['total_pembayaran'], 0, ",", ".") ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($detail['status_pesanan'] == 'Menunggu Pembayaran') {  ?>
                            <div class="col-lg-12 d-flex">
                                <button id="pay-button" class="btn btn-primary w-100 fs-5 text-white mb-2"><strong>Bayar Sekarang</strong></button>
                                <!-- <a class="iq-button iq-btn-style2" href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <i aria-hidden="true" class="fas fa-pencil-alt me-2"></i><span class="me-2 iq-button-effact">EDIT TITLE</span>
                                    </div>
                                </a> -->
                            </div>
                        <?php } elseif ($detail['status_pesanan'] == 'Pending') { ?>
                            <div class="col-lg-12">
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center pt-2">
                                            <div class="iq-product-info w-100">
                                                <h5>Pembayaran :</h5>
                                                <?php if ($detail['metode_pembayaran'] != null) { ?>
                                                    <div class="d-flex justify-content-between">
                                                        <b>Metode Pembayaran :</b>
                                                        <h5 class="text-primary"><?= $detail['metode_pembayaran'] ?></h5>
                                                    </div>
                                                <?php }
                                                if ($detail['bank'] != null) { ?>
                                                    <div class="d-flex justify-content-between">
                                                        <b>Bank :</b>
                                                        <h5 class="text-primary"><?= $detail['bank'] ?></h5>
                                                    </div>
                                                <?php }
                                                if ($detail['va_number'] != null) { ?>
                                                    <div class="d-flex justify-content-between">
                                                        <b>VA Number :</b>
                                                        <h5 class="text-primary"><?= $detail['va_number'] ?></h5>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <p>Mohon lakukan pembayaran sebelum tanggal <?= $detail['batas_transaksi'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($detail['status_pesanan'] == 'Selesai') { ?>
                            <div class="col-lg-12">
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center pt-2">
                                            <div class="iq-product-info w-100">
                                                <h5>Pembayaran :</h5>
                                                <?php if ($detail['metode_pembayaran'] != null) { ?>
                                                    <div class="d-flex justify-content-between">
                                                        <b>Metode Pembayaran :</b>
                                                        <h5 class="text-primary"><?= $detail['metode_pembayaran'] ?></h5>
                                                    </div>
                                                <?php }
                                                if ($detail['bank'] != null) { ?>
                                                    <div class="d-flex justify-content-between">
                                                        <b>Bank :</b>
                                                        <h5 class="text-primary"><?= $detail['bank'] ?></h5>
                                                    </div>
                                                <?php }
                                                if ($detail['va_number'] != null) { ?>
                                                    <div class="d-flex justify-content-between">
                                                        <b>VA Number :</b>
                                                        <h5 class="text-primary"><?= $detail['va_number'] ?></h5>
                                                    </div>
                                                <?php } ?>
                                                <div class="d-flex justify-content-between">
                                                    <b>Status Pembayaran :</b>
                                                    <h5 class="text-primary">Selesai</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($detail['status_pesanan'] == 'Expired') { ?>
                            <div class="col-lg-12">
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center pt-2">
                                            <div class="iq-product-info w-100">
                                                <h5>Pembayaran :</h5>
                                                <?php if ($detail['metode_pembayaran'] != null) { ?>
                                                    <div class="d-flex justify-content-between">
                                                        <b>Metode Pembayaran :</b>
                                                        <h5 class="text-primary"><?= $detail['metode_pembayaran'] ?></h5>
                                                    </div>
                                                <?php }
                                                if ($detail['bank'] != null) { ?>
                                                    <div class="d-flex justify-content-between">
                                                        <b>Bank :</b>
                                                        <h5 class="text-primary"><?= $detail['bank'] ?></h5>
                                                    </div>
                                                <?php }
                                                if ($detail['va_number'] != null) { ?>
                                                    <div class="d-flex justify-content-between">
                                                        <b>VA Number :</b>
                                                        <h5 class="text-primary"><?= $detail['va_number'] ?></h5>
                                                    </div>
                                                <?php } ?>
                                                <div class="d-flex justify-content-between">
                                                    <b>Status Pembayaran :</b>
                                                    <h5 class="text-primary"><?= $detail['status_pesanan'] ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Silahkan Melakukan Checkout Ulang.</p>
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
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?= env('MIDTRANS_CLIENT_KEY') ?>"></script>
</script>
<script>
    $('#pay-button').on('click', function() {
        $.ajax({
            url: '<?= base_url('payment') ?>',
            type: 'POST',
            data: {
                'id_order': '<?= $detail['id_order'] ?>'
            },
            success: function(response) {
                var rest = JSON.parse(response)
                snap.pay(`${rest.snapToken}`, {
                    // Optional
                    onSuccess: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        // console.log(JSON.stringify(result, null, 2));
                        Swal.fire({
                            title: 'Pembayaran Berhasil!.',
                            text: "Berhasi Melakukan Pembayaran!",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        })
                    },
                    // Optional
                    onPending: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        // console.log(JSON.stringify(result, null, 2));
                        // if (result.status_code != 201) {
                        //     return alert('Pembayaran Error');
                        // }
                        // console.log(result.va_numbers)
                        // $.ajax({
                        //     url: '<?= base_url('payment/pending') ?>',
                        //     type: 'POST',
                        //     data: {
                        //         'id_order': result.order_id,
                        //         'metode_pembayaran': result.payment_type,
                        //         'bank': result.va_numbers[0].bank,
                        //         'va_number': result.va_numbers[0].va_number,
                        //         'batas_transaksi': result.transaction_time,
                        //         'id_transaksi': result.transaction_id
                        //     },
                        //     success: function(response) {
                        //         if (response != 'success') {
                        //             return alert('gagal mengupdate data');
                        //         }
                        //     }
                        // })
                        Swal.fire({
                            title: 'Status Pembayaran Pending!.',
                            text: "Silahkan Lakukan Pembayaran!",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        })
                    },
                    // Optional
                    onError: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        console.log(JSON.stringify(result, null, 2));
                        Swal.fire({
                            title: 'Pembayaran Gagal!.',
                            text: "Pastikan Internetmu Stabil ya!",
                            icon: 'error',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        })
                    }
                });
            }
        })
    });
</script>
<?= $this->endSection() ?>