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
                                    <div class="d-flex justify-content-end">
                                        <a href="<?= base_url('auth/edit_alamat') ?>" class="btn btn-primary btn-sm text-white">Edit Alamat</a>
                                    </div>
                                    <!-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Edit Alamat
                                    </button> -->
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Penerima *</label>
                                            <input type="email" class="form-control" id="nama" value="<?= $user['nama_user'] ?>" placeholder="Masukan Nama Penerima" readonly>
                                            <span class="text-danger d-none" id="alert-nama">Nama Penerima Wajib Diisi.</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nomor Telepon *</label>
                                            <input type="email" class="form-control" id="no_telp" value="<?= $user['no_telp'] ?>" placeholder="Masukan Nomor Telepon Penerima" readonly>
                                            <span class="text-danger d-none" id="alert-notelp">Nomor Telepon Wajib Diisi.</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputcountry" class="form-label">Alamat Lengkap Pengiriman *</label>
                                            <textarea class="form-control" id="alamat" rows="5" placeholder="Masukan Alamat Lengkap Anda Untuk Pengiriman." readonly><?= $user['alamat'] ?></textarea>
                                            <span class="text-danger d-none d" id="alert-alamat">Alamat Lengkap Wajib Diisi.</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Provinsi *</label>
                                            <input type="email" class="form-control" id="no_telp" value="<?= $user['provinsi'] ?>" placeholder="Masukan Nomor Telepon Penerima" readonly>
                                            <span class="text-danger d-none" id="alert-notelp">Nomor Telepon Wajib Diisi.</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Kabupaten / Kota *</label>
                                            <input type="email" class="form-control" id="no_telp" value="<?= $user['kota'] ?>" placeholder="Masukan Nomor Telepon Penerima" readonly>
                                            <span class="text-danger d-none" id="alert-notelp">Nomor Telepon Wajib Diisi.</span>
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="ong" class="form-label">Opsi Pengiriman *</label>
                                            <select name="ongkir" id="ongkir" class="form-control form-select choicesjs">
                                                <option value="" class="pilih_ongkir">-- Loading --</option>
                                            </select>
                                            <small class="d-block">*Dikirim Dari Kabupaten Subang.</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Pesan (opsional)</label>
                                            <input type="text" class="form-control mb-2" id="pesan" placeholder="Silahkan masukan catatan pesanan">
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
                                            $berat = 0;
                                            foreach ($cart as $row) {
                                                $total = $total + ($row['qty'] * $row['harga_produk']);
                                                $berat = $berat + ($row['qty'] * $row['berat']);
                                            ?>
                                                <tr class="cart_item">
                                                    <td class="ps-3"><?= $row['nama_produk'] ?><strong class="product-quantity"><i class="fas fa-times mx-1"></i><?= $row['qty'] ?></strong></td>
                                                    <td class="product-total">
                                                        <span class="rowpad">Rp. <?= number_format($row['harga_produk'] * $row['qty'], 0, ",", ".") ?></span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <tr class="cart_item">
                                                <td class="ps-3">Ongkos Kirim</td>
                                                <td class="product-total">
                                                    <span class="rowpad ongkoskirim">Rp. </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <!-- <tr class="cart-subtotal">
                                                <th><span class="h5">Subtotal</span></th>
                                                <td><span class="rowpad"><span class="">$</span>8.00</span></td>
                                            </tr> -->
                                            <tr class="order-total">
                                                <th><span class="h5">Total Pembayaran</span></th>
                                                <td><strong><span class="h5 rowpad total">Rp. </span></strong> </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="card">
                                        <!-- <div class="card-header block2 pb-3">
                                            Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.
                                        </div> -->
                                        <div class="card-body">
                                            <!-- <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our.</p> -->
                                            <div class="iq-btn-container d-flex justify-content-center tombol-pesan d-none">
                                                <a class="" href="javascript:void(0)" onclick="document.getElementById('form_bayar').submit();">
                                                    <!-- id="pay-button" -->
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
<form action="<?= base_url('order') ?>" method="post" id="form_bayar">
    <input type="hidden" name="total_pembayaran" id="form_total_pembayaran">
    <input type="hidden" name="kurir" id="form_kurir">
    <input type="hidden" name="ongkir" id="form_ongkir">
</form>

<!-- modal box edit -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Alamat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Penerima *</label>
                                <input type="email" class="form-control" id="nama" value="<?= $user['nama_user'] ?>" placeholder="Masukan Nama Penerima">
                                <span class="text-danger d-none" id="alert-nama">Nama Penerima Wajib Diisi.</span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                <input type="email" class="form-control" id="no_telp" value="<?= $user['no_telp'] ?>" placeholder="Masukan Nomor Telepon Penerima">
                                <span class="text-danger d-none" id="alert-notelp">Nomor Telepon Wajib Diisi.</span>
                            </div>
                            <div class="mb-3">
                                <label for="inputcountry" class="form-label">Alamat Lengkap Pengiriman *</label>
                                <textarea class="form-control" id="alamat" rows="5" placeholder="Masukan Alamat Lengkap Anda Untuk Pengiriman."><?= $user['alamat'] ?></textarea>
                                <span class="text-danger d-none d" id="alert-alamat">Alamat Lengkap Wajib Diisi.</span>
                            </div>
                            <div class="mb-3">
                                <label for="provinsi" class="form-label">Provinsi *</label>
                                <select class="form-select form-control choicesjs" name="provinsi" id="provinsi">
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">Kota / Kabupaten *</label>
                                <select class="form-select form-control choicesjs" name="kota" id="kota">
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script> -->


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-hdw1KyHZBVA0yrSQ"></script>
<script>
    $(document).ready(function() {
        var id_prov = '<?= $user['id_provinsi'] ?>'

        $.ajax({
            url: '<?= base_url('cekongkir/getCost') ?>',
            type: 'post',
            data: {
                'tujuan': <?= $user['id_kota'] ?>,
                'berat': <?= $berat ?>,
                'kurir': 'jne'
            },
            success: function(response) {
                var rest = JSON.parse(response)
                $('.pilih_ongkir').remove();
                rest.rajaongkir.results[0].costs.forEach(element => {
                    $('#ongkir').append(`<option value="${element.service}-${element.cost[0].value}">JNE ${element.service} ~ ${element.cost[0].etd} hari ~ Rp. ${element.cost[0].value}</option>`);
                });
                $('#ongkir option[value="OKE"]').attr('selected', 'selected')
                var ongkir = $('#ongkir').val().split('-')
                $('.ttl').remove()
                $('.ongkoskir').remove()
                $('.ongkoskirim').append(`<span class="ongkoskir">${parseInt(ongkir[1])}</span>`)
                $('.total').append(`<span class="ttl">${parseInt(ongkir[1]) + <?= $total ?>}</span>`)
                $('#form_total_pembayaran').val(parseInt(ongkir[1]) + <?= $total ?>)
                $('#form_kurir').val(ongkir[0])
                $('#form_ongkir').val(parseInt(ongkir[1]))
                $('.tombol-pesan').removeClass('d-none')
            }
        })
    });
</script>
<script>
    $('#ongkir').on('change', function() {
        var ongkir = $('#ongkir').val().split('-')
        $('.ttl').remove()
        $('.ongkoskir').remove()
        $('.ongkoskirim').append(`<span class="ongkoskir">${parseInt(ongkir[1])}</span>`)
        $('.total').append(`<span class="ttl">${parseInt(ongkir[1]) + <?= $total ?>}</span>`)
        $('#form_total_pembayaran').val(parseInt(ongkir[1]) + <?= $total ?>)
        $('#form_kurir').val(ongkir[0])
        $('#form_ongkir').val(parseInt(ongkir[1]))
    })
</script>
<script>
    $('#provinsi').on('change', function() {
        var id_kot = '<?= $user['id_kota'] ?>'
        // alert($(this).val())
        $.ajax({
            url: '<?= base_url('cekongkir/') ?>' + $(this).val(),
            type: 'GET',
            success: function(response) {
                var respon = JSON.parse(response)
                var selected = 'selected'
                var notselected = ''
                $('#kot').remove()
                // console.log(respon.rajaongkir.results);
                respon.rajaongkir.results.forEach(element => {
                    $('#kota').append(`<option id="kot" value="${element.city_id}" ${element.city_id == id_kot ? selected : notselected}>${element.city_name}</option>`);
                    // console.log(element)
                });
            }
        })
    })
</script>

<script>
    $('#pay-button').on('click', function() {
        var nama = $('#nama').val();
        var no_telp = $('#no_telp').val();
        var alamat = $('#alamat').val();
        if (nama == '') {
            $('#alert-nama').removeClass('d-none').addClass('d-block')
        }
        if (no_telp == '') {
            $('#alert-notelp').removeClass('d-none').addClass('d-block')
        }
        if (alamat == '') {
            $('#alert-alamat').removeClass('d-none').addClass('d-block')
        }
        if (nama == '' || no_telp == '' || alamat == '') {
            return false;
        }
        $('#alert-nama').removeClass('d-block').addClass('d-none')
        $('#alert-notelp').removeClass('d-block').addClass('d-none')
        $('#alert-alamat').removeClass('d-block').addClass('d-none')

        $.ajax({
            url: '<?= base_url('payment') ?>',
            type: 'GET',
            data: {
                'id': <?= $user['id_user'] ?>
            },
            success: function(response) {
                // console.log(response)
                var rest = JSON.parse(response)
                // // console.log(`${snap.snapToken}`);
                snap.pay(`${rest.snapToken}`, {
                    // Optional
                    onSuccess: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        console.log(JSON.stringify(result, null, 2));
                    },
                    // Optional
                    onPending: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        console.log(JSON.stringify(result, null, 2));
                    },
                    // Optional
                    onError: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        console.log(JSON.stringify(result, null, 2));
                    }
                });
            }
        })
    });
</script>

<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
<?= $this->endSection() ?>