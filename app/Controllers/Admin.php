<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelGaleri;
use App\Models\ModelOrders;
use App\Models\ModelProduk;

class Admin extends BaseController
{
    private $ModelOrders, $ModelGaleri, $ModelProduk;
    public function __construct()
    {
        $this->ModelOrders = new ModelOrders();
        $this->ModelGaleri = new ModelGaleri();
        $this->ModelProduk = new ModelProduk();
    }
    public function index()
    {
        // dd($this->ModelOrders->countAllResults());
        return view('backend/admin/v_dashboard', [
            'title' => 'Dashboard Admin',
            'total_order'   => $this->ModelOrders->countAllResults(),
            'total_galeri'   => $this->ModelGaleri->countAllResults(),
            'total_produk'   => $this->ModelProduk->countAllResults(),
            'total_paket_reseller'   => $this->ModelProduk->where('stok_produk', null)->countAllResults(),
        ]);
    }
}
