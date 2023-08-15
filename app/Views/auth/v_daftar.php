<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?> | UMKM Rasa Alami</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('template/backend/html/') ?>assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/vendors/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('template/backend/html/') ?>assets/vendors/remixicon/fonts/remixicon.css">
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-default@4/default.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <style>
        .lds-ellipsis {
            display: flex;
            position: fixed;
            width: 80px;
            height: 80px;
            z-index: 99999;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            /* min-height: 100vh; */
            justify-content: center;
            align-items: center;
            background-color: rgba(84, 98, 111, 0.5);

        }

        .lds-ellipsis div {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #1d1c1c;
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }

        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 0.6s infinite;
        }

        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(0);
            }
        }

        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(24px, 0);
            }
        }

        .bg-load {
            background-color: rgba(84, 98, 111, 0.5);
            /* position: absolute; */
        }
    </style>
</head>

<body class=" ">
    <?php if (session()->getFlashdata('pesan')) { ?>
        <script>
            Swal.fire(
                'Gagal!',
                '<?= session()->getFlashdata('pesan') ?>',
                'info'
            )
        </script>
    <?php } ?>
    <!-- loader Start -->
    <!-- <div id="loading">
        <div id="loading-center">
        </div>
    </div> -->
    <!-- loader END -->

    <div class="lds-ellipsis" id="spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-lg-8">
                        <div class="card auth-card">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center auth-content">
                                    <div class="col-lg-12 align-self-center">
                                        <div class="p-3">
                                            <h2 class="mb-2 text-center">Sign Up</h2>
                                            <p class="text-center">Silahkan Isi form dibawah untuk mendaftarkan akun anda.</p>
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
                                            <form action="<?= base_url('auth/daftar') ?>" method="post">
                                                <input type="hidden" name="kota" id="nama_kota">
                                                <input type="hidden" name="provinsi" id="nama_provinsi">
                                                <input type="hidden" name="id_kota" id="id_kota_form">
                                                <input type="hidden" name="id_provinsi" id="id_provinsi_form">
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Nama</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="nama_user" placeholder="Masukan Nama">
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Email</span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" placeholder="Masukan Email">
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">#</span>
                                                    </div>
                                                    <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">No Telp</span>
                                                    </div>
                                                    <input type="number" class="form-control" name="no_telp" placeholder="Masukan Nomor Telpon">
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text text-area">Alamat</span>
                                                    </div>
                                                    <textarea class="form-control" name="alamat" aria-label="With textarea"></textarea>
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="provinsi">Provinsi</label>
                                                    </div>
                                                    <select class="custom-select" id="provinsi">
                                                        <option value="">-- Pilih Provinsi --</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="kota">Kota / Kecamatan</label>
                                                    </div>
                                                    <select class="custom-select" id="kota">
                                                        <option value="" class="pilih_kota">-- Pilih Provinsi Terlebih Dahulu --</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01">Daftar Sebagai</label>
                                                    </div>
                                                    <select class="custom-select" name="role" id="inputGroupSelect01">
                                                        <option value="User">Pembeli</option>
                                                        <option value="Reseller">Reseller</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-2">Sign Up</button>
                                                <p class="mt-3">
                                                    Sudah mempunyai akun ? <a href="<?= base_url('auth') ?>" onclick="showLoading()" class="text-primary">Login</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-5 content-right">
                                        <img src="<?= base_url('template/backend/html/') ?>assets/images/login/01.png" class="img-fluid image-right" alt="">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="<?= base_url('template/backend/html/') ?>assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="<?= base_url('template/backend/html/') ?>assets/js/app.js"></script>
    <script>
        window.onload = function() {
            document.getElementById("spinner").style.display = "none";
            $('.bg-load').removeClass('bg-load');
        }
    </script>
    <script>
        function showLoading() {
            document.getElementById("spinner").style.display = "block";
            $('#loader').addClass('bg-load')
        }
    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '<?= base_url('auth/getProv') ?>',
                type: 'get',
                success: function(response) {

                    var rest = JSON.parse(response)
                    // console.log(rest.rajaongkir.results);
                    rest.rajaongkir.results.forEach(element => {
                        $('#provinsi').append(`<option value="${element.province_id}-${element.province}">${element.province}</option>`);
                    });
                    // $('#ongkir option[value="OKE"]').attr('selected', 'selected')
                    // var ongkir = $('#ongkir').val().split('-')
                    // $('.ttl').remove()
                    // $('.ongkoskir').remove()
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
</body>

</html>