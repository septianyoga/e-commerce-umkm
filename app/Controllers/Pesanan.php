<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelOrders;

class Pesanan extends BaseController
{
    private $ModelPesanan;

    public function __construct()
    {
        $this->ModelPesanan = new ModelOrders();
    }


    public function index()
    {
        // dd($this->ModelPesanan->select(['orders.*', 'user.nama_user'])->join('user', 'user.id_user = orders.id_user')->orderBy('tanggal', 'DESC')->findAll());
        return view('backend/pesanan/v_pesanan', [
            'title' => 'Pesanan',
            'data'  => $this->ModelPesanan->select(['orders.*', 'user.nama_user'])->join('user', 'user.id_user = orders.id_user')->orderBy('tanggal', 'DESC')->findAll()
        ]);
    }

    public function approv($id_order)
    {
        $this->ModelPesanan->update($id_order, ['status_pesanan' => 'Dikemas']);
        return redirect()->to(base_url('pesanan'))->with('success', 'Status Berhasil Dirubah. Silahkan segera kemas dan kirim pesanan!.');
    }

    public function updateResi($id_order)
    {
        $this->ModelPesanan->update($id_order, $this->request->getPost());
        return redirect()->to(base_url('pesanan'))->with('success', 'Resi Berhasil Diupload!.');
    }
}
