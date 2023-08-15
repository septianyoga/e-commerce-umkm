<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCart;
use App\Models\ModelOrders;

class Order extends BaseController
{
    protected $ModelCart, $ModelOrders;

    public function __construct()
    {
        $this->ModelCart = new ModelCart();
        $this->ModelOrders = new ModelOrders();
        date_default_timezone_set('Asia/Jakarta');
        $this->autoUbahStatus();
    }

    public function index()
    {
        return view('frontend/pesanan/v_pesanan', [
            'title' => 'Pesanan',
            'cart'  => session()->get('id_user') == null ? null : $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where('cart.id_user', session()->get('id_user'))->findAll(),
            'data'  => $this->ModelOrders->where('id_user', session()->get('id_user'))->orderBy('tanggal', 'DESC')->findAll(),
            'produk'    => $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where([
                'id_user' => session()->get('id_user'),
                // 'id_order !=' => null
            ])->findAll()
        ]);
    }

    public function autoUbahStatus()
    {
        $data = $this->ModelOrders->where('status_pesanan', 'Pending')->findAll();
        foreach ($data as $row) {
            if (date('Y-m-d H:i') > $row['batas_transaksi']) {
                $this->ModelOrders->update($row['id_order'], ['status_pesanan' => 'Expired']);
            }
        }
    }

    public function insertOrder()
    {
        $id_order = date('Ymd') . '-' . rand();
        $data = [
            'id_order'          => $id_order,
            'id_user'           => session()->get('id_user'),
            'total_pembayaran'  => $this->request->getPost('total_pembayaran'),
            'kurir'             => $this->request->getPost('kurir'),
            'ongkir'            => $this->request->getPost('ongkir'),
            'status_pesanan'    => 'Menunggu Pembayaran'
        ];

        $this->ModelOrders->insert($data);
        $this->ModelCart->edit($id_order);
        return redirect()->to(base_url('order/' . $id_order . '/detail'))->with('pesan', 'Berhasil Membuat Pesanan!. Silahkan Lakukan Pembayaran.');
    }

    public function detail($id_order)
    {
        // dd($this->ModelOrders->find($id_order));
        return view('frontend/pesanan/v_detail_pesanan', [
            'title' => 'Detail Pesanan',
            'cart'  => session()->get('id_user') == null ? null : $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where('cart.id_user', session()->get('id_user'))->findAll(),
            'detail'  => $this->ModelOrders->find($id_order),
            'data'  => $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where('id_order', $id_order)->findAll()
        ]);
    }
}
