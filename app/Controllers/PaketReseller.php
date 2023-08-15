<?php

namespace App\Controllers;

use App\Models\ModelProduk;
use App\Controllers\BaseController;

class PaketReseller extends BaseController
{

    private $ModelProduk;

    public function __construct()
    {
        $this->ModelProduk = new ModelProduk();
    }


    public function index()
    {
        return view('backend/paket_reseller/v_paket_reseller', [
            'title' => 'Paket Reseller',
            'data'  => $this->ModelProduk->where('stok_produk', null)->findAll()
        ]);
    }
}
