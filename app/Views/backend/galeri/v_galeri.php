<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Galeri</h4>
                    </div>
                    <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="bi bi-plus-lg"></i> Tambah</button>
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
                <div class="container-fluid">
                    <div class="table-responsive rounded mb-3">
                        <table class="data-tables table mb-0 tbl-server-info">
                            <thead class="bg-white text-uppercase">
                                <tr class="ligth ligth-data">
                                    <th>No</th>
                                    <th>Nama Foto</th>
                                    <th>Foto</th>
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
                                        <td><?= $row['nama_foto'] ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?= base_url('galeri/' . $row['foto']) ?>" class="img-fluid w-50" alt="image" style="aspect-ratio: 4/3; object-fit: contain;">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <button class="btn btn-danger btn-sm mr-1" onclick="hapus(<?= $row['id_foto'] ?>)">Hapus</button>
                                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit">Edit</button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>

<!-- modal tambah -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Paket Reseller</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('kelola_galeri') ?>" data-toggle="validator" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Foto Galeri *</label>
                                <input type="text" class="form-control" name="nama_foto" placeholder="Masukan Judul Foto" data-errors="Please Enter Name." required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto Galeri* </label>
                                <div class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Pilih Foto</label>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="sumbit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit -->
<?php foreach ($data as $d) { ?>
    <div class="modal fade bd-example-modal-lg" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Paket Reseller</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('kelola_galeri/' . $d['id_foto']) ?>" data-toggle="validator" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Foto Galeri *</label>
                                    <input type="text" class="form-control" name="nama_foto" placeholder="Masukan Judul Foto" data-errors="Please Enter Name." value="<?= $d['nama_foto'] ?>" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Foto Galeri* </label>
                                    <div class="custom-file">
                                        <input type="file" name="foto" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Pilih Foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="sumbit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<script>
    function hapus(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            document.location.href = '<?= base_url('kelola_galeri/del/') ?>' + id;
        })
    }
</script>

<?= $this->endSection() ?>