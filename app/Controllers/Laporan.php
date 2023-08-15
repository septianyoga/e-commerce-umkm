<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelOrders;

class Laporan extends BaseController
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
            'title' => 'Laporan',
            'data'  => $this->ModelPesanan->select(['orders.*', 'user.nama_user'])->join('user', 'user.id_user = orders.id_user')->orderBy('tanggal', 'DESC')->findAll()
        ]);
    }
}
