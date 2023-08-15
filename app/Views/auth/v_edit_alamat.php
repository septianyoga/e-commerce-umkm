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
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="block1">
                            <p class="mb-0">Have a coupon?
                                <a href="javascript:void(0)" class="showcoupon">Click here to enter your code</a>
                            </p>
                        </div> -->
                        <form action="<?= base_url('auth/edit_alamat') ?>" method="post">
                            <input type="hidden" name="kota" id="nama_kota" value="<?= $user['kota'] ?>" required>
                            <input type="hidden" name="provinsi" id="nama_provinsi" value="<?= $user['provinsi'] ?>" required>
                            <input type="hidden" name="id_kota" id="id_kota_form" value="<?= $user['id_kota'] ?>" required>
                            <input type="hidden" name="id_provinsi" id="id_provinsi_form" value="<?= $user['id_provinsi'] ?>" required>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="mb-3">Alamat Pengiriman</h3>
                                    <div class="col-md-12 mb-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Penerima *</label>
                                            <input type="text" name="nama_user" class="form-control" id="nama" value="<?= $user['nama_user'] ?>" placeholder="Masukan Nama Penerima" required>
                                            <span class="text-danger d-none" id="alert-nama">Nama Penerima Wajib Diisi.</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nomor Telepon *</label>
                                            <input type="number" name="no_telp" class="form-control" id="no_telp" value="<?= $user['no_telp'] ?>" placeholder="Masukan Nomor Telepon Penerima" required>
                                            <span class="text-danger d-none" id="alert-notelp">Nomor Telepon Wajib Diisi.</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputcountry" class="form-label">Alamat Lengkap Pengiriman *</label>
                                            <textarea class="form-control" name="alamat" id="alamat" rows="5" placeholder="Masukan Alamat Lengkap Anda Untuk Pengiriman." required><?= $user['alamat'] ?></textarea>
                                            <span class="text-danger d-none d" id="alert-alamat">Alamat Lengkap Wajib Diisi.</span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Provinsi *</label>
                                            <select class="form-select form-control choicesjs" id="provinsi">
                                                <option value="" class="pilih_kota">-- Loading --</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Kabupaten / Kota *</label>
                                            <select class="form-select form-control choicesjs" id="kota">
                                                <option value="" class="pilih_kota">-- Loading --</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var id_prov = '<?= $user['id_provinsi'] ?>'

    $(document).ready(function() {
        $.ajax({
            url: '<?= base_url('cekongkir') ?>',
            type: 'GET',
            success: function(response) {
                var respon = JSON.parse(response)
                var selected = 'selected'
                var notselected = ''
                // console.log(respon.rajaongkir.results);
                respon.rajaongkir.results.forEach(element => {
                    $('#provinsi').append(`<option value="${element.province_id}-${element.province}" ${element.province_id == id_prov ? selected : notselected}>${element.province}</option>`);
                    // console.log(element)
                });
            }
        })
        $.ajax({
            url: '<?= base_url('auth/getKota') ?>',
            type: 'get',
            data: {
                'id_prov': id_prov[0]
            },
            success: function(response) {
                // console.log(response);

                var rest = JSON.parse(response)
                // console.log(rest.rajaongkir);

                var id_kota = '<?= $user['id_kota'] ?>'
                var selected = 'selected'
                var notselected = ''

                $('.pilih_kota').remove()
                rest.rajaongkir.results.forEach(element => {
                    $('#kota').append(`<option class="pilih_kota" value="${element.city_id}-${element.type} ${element.city_name}" ${element.city_id == id_kota ? selected : notselected}>${element.type} ${element.city_name}</option>`);
                });

                // $('#ongkir option[value="OKE"]').attr('selected', 'selected')
                // var ongkir = $('#ongkir').val().split('-')
                // $('.ttl').remove()
                // $('.ongkoskirim').append(`<span class="ongkoskir">${parseInt(ongkir[1])}</span>`)
                // $('#form_kurir').val(ongkir[0])
                // $('#form_ongkir').val(parseInt(ongkir[1]))
            }
        })
        $('#provinsi').on('change', function() {
            var id_prov = $(this).val().split('-')
            $.ajax({
                url: '<?= base_url('auth/getKota') ?>',
                type: 'get',
                data: {
                    'id_prov': id_prov[0]
                },
                success: function(response) {
                    // console.log(response);

                    var rest = JSON.parse(response)
                    // console.log(rest.rajaongkir);

                    $('.pilih_kota').remove()
                    rest.rajaongkir.results.forEach(element => {
                        $('#kota').append(`<option class="pilih_kota" value="${element.city_id}-${element.type} ${element.city_name}">${element.type} ${element.city_name}</option>`);
                    });

                    // $('#ongkir option[value="OKE"]').attr('selected', 'selected')
                    // var ongkir = $('#ongkir').val().split('-')
                    // $('.ttl').remove()
                    // $('.ongkoskirim').append(`<span class="ongkoskir">${parseInt(ongkir[1])}</span>`)
                    // $('#form_kurir').val(ongkir[0])
                    // $('#form_ongkir').val(parseInt(ongkir[1]))
                }
            })
        })
        $('#kota').on('change', function() {
            var prov = $('#provinsi').val().split('-')
            var kot = $('#kota').val().split('-')
            $('#nama_provinsi').val(prov[1])
            $('#nama_kota').val(kot[1])
            $('#id_provinsi_form').val(prov[0])
            $('#id_kota_form').val(kot[0])
        })
    })
</script>

<!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
<?= $this->endSection() ?>