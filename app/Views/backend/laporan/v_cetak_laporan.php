<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            margin: 0 auto;
            /* border: 0.5px solid black; */
        }
    </style>
</head>

<body>
    <h1>Cetak Laporan</h1>
    <p>Tanggal : <?= date('d-m-Y', strtotime($tanggal['dari'])) ?> sampai <?= date('d-m-Y', strtotime($tanggal['sampe'])) ?></p>
    <table border="1" cellspacing="0" cellpadding="3">
        <tr>
            <td>No</td>
            <td>Nama Pembeli</td>
            <td>Produk Yang Dibeli</td>
            <td>Tanggal Beli</td>
            <td>Dikirim Ke</td>
            <td>Total Harga</td>
            <td>Status</td>
        </tr>
        <?php
        $no = 1;
        foreach ($data as $row) { ?>
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
                <td><?= $row['status_pesanan'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>