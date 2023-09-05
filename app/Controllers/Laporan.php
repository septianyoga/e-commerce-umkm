<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCart;
use App\Models\ModelOrders;
use Dompdf\Dompdf;

class Laporan extends BaseController
{
    private $ModelPesanan, $ModelCart;

    public function __construct()
    {
        $this->ModelPesanan = new ModelOrders();
        $this->ModelCart = new ModelCart();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        // dd($this->ModelPesanan->select(['orders.*', 'user.nama_user'])->join('user', 'user.id_user = orders.id_user')->orderBy('tanggal', 'DESC')->findAll());
        $dari = $this->request->getVar('dari_tgl');
        $sampe = $this->request->getVar('sampe_tgl');
        return view('backend/laporan/v_laporan', [
            'title' => 'Laporan',
            'data'  => $this->ModelPesanan->select(['orders.*', 'user.nama_user', 'user.kota', 'user.provinsi'])->join('user', 'user.id_user = orders.id_user')->orderBy('tanggal', 'DESC')->where(['tanggal >=' => $dari . ' 00:00', 'tanggal <=' => $sampe . ' 23:59'])->findAll(),
            'produk'   => $this->ModelCart->select(['cart.id_order', 'produk.nama_produk'])->join('produk', 'produk.id_produk = cart.id_produk')->where('status_cart', 'Checkout')->findAll()
        ]);
    }

    public function cetak()
    {
        $filename = 'Laporan_penjualan-' . date('y-m-d-H-i-s');

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        $dari = $this->request->getPost('dari_tgl');
        $sampe = $this->request->getPost('sampe_tgl');

        // load HTML content
        $dompdf->loadHtml(view('backend/laporan/v_cetak_laporan', [
            'title' => 'Cetak Laporan',
            'data'  => $this->ModelPesanan->select(['orders.*', 'user.nama_user', 'user.kota', 'user.provinsi'])->join('user', 'user.id_user = orders.id_user')->orderBy('tanggal', 'DESC')->where(['tanggal >=' => $dari . ' 00:00', 'tanggal <=' => $sampe . ' 23:59'])->findAll(),
            'produk'   => $this->ModelCart->select(['cart.id_order', 'produk.nama_produk'])->join('produk', 'produk.id_produk = cart.id_produk')->where('status_cart', 'Checkout')->findAll(),
            'tanggal' => [
                'dari'  => $dari,
                'sampe' => $sampe
            ]
        ]));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
        // $dompdf->stream("", array("Attachment" => false));
    }
}
