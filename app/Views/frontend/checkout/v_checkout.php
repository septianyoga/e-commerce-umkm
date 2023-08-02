<?= $this->extend('layout/main_front') ?>
<?= $this->section('content') ?>
<div class="text-left iq-breadcrumb-one iq-bg-over black" style="background: url(<?= base_url('asset/foto/banner.png') ?>) no-repeat scroll right center; background-size: contain;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                    <h1 class="title"><?= $title ?></h1>
                    <ol class="breadcrumb main-bg">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('/') ?>"><i class="fas fa-home me-2"></i>Home</a>
                        </li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="section-padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="block1">
                            <p class="mb-0">Have a coupon?
                                <a href="javascript:void(0)" class="showcoupon">Click here to enter your code</a>
                            </p>
                        </div> -->
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="mb-3">Alamat Pengiriman</h3>
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Penerima *</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" value="<?= $user['nama_user'] ?>" placeholder="Masukan Nama Penerima">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                            <input type="email" class="form-control" id="exampleInputEmail3" value="<?= $user['no_telp'] ?>" placeholder="Masukan Nomor Telepon Penerima">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputcountry" class="form-label">Alamat Lengkap Pengiriman *</label>
                                            <textarea class="form-control" id="exampleInputEmail122" rows="5" placeholder="Masukan Alamat Lengkap Anda Untuk Pengiriman."><?= $user['alamat'] ?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Pesan (opsional)</label>
                                            <input type="text" class="form-control mb-2" id="exampleInputEmail4" placeholder="Silahkan masukan catatan pesanan">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h2 class="mb-5">Pesanan Anda</h2>
                                    <table class="table table-borderless product-table">
                                        <thead>
                                            <tr>
                                                <th><span class="h5">Produk</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $total = 0;
                                            foreach ($cart as $row) {
                                                $total = $total + ($row['qty'] * $row['harga_produk']);
                                            ?>
                                                <tr class="cart_item">
                                                    <td class="ps-3"><?= $row['nama_produk'] ?><strong class="product-quantity"><i class="fas fa-times mx-1"></i><?= $row['qty'] ?></strong></td>
                                                    <td class="product-total">
                                                        <span class="rowpad">Rp. <?= number_format($row['harga_produk'] * $row['qty'], 0, ",", ".") ?></span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <!-- <tr class="cart-subtotal">
                                                <th><span class="h5">Subtotal</span></th>
                                                <td><span class="rowpad"><span class="">$</span>8.00</span></td>
                                            </tr> -->
                                            <tr class="order-total">
                                                <th><span class="h5">Total Pembayaran</span></th>
                                                <td><strong><span class="h5 rowpad">Rp. <?= number_format($total, 0, ",", ".") ?></span></strong> </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="card">
                                        <!-- <div class="card-header block2 pb-3">
                                            Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.
                                        </div> -->
                                        <div class="card-body">
                                            <!-- <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our.</p> -->
                                            <div class="iq-btn-container d-flex justify-content-center">
                                                <a class="" href="javascript:void(0)">
                                                    <div class="btn btn-secondary animation-btn">
                                                        Buat Pesanan
                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right ms-2"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>