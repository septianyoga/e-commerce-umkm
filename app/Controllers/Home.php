<?php

namespace App\Controllers;

use App\Models\ModelProduk;

class Home extends BaseController
{

    private $ModelProduk;

    public function __construct()
    {
        $this->ModelProduk = new ModelProduk();
    }

    public function index()
    {
        return view('frontend/v_home', [
            'title' => 'Home',
            'data'  => $this->ModelProduk->findAll()
        ]);
    }
}
