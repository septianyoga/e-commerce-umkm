<?php

namespace App\Controllers;

use App\Models\ModelCart;
use App\Models\ModelProduk;

class Home extends BaseController
{

    private $ModelProduk, $ModelCart;

    public function __construct()
    {
        $this->ModelProduk = new ModelProduk();
        $this->ModelCart = new ModelCart();
    }

    public function index()
    {
        return view('frontend/v_home', [
            'title' => 'Home',
            'data'  => session()->get('role') == 'Reseller' ? $this->ModelProduk->where('stok_produk', null)->findAll() : $this->ModelProduk->where('stok_produk !=', null)->findAll(),
            'cart'  => session()->get('id_user') == null ? null : $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where('cart.id_user', session()->get('id_user'))->findAll()
        ]);
    }

    public function product($id)
    {
        return view('frontend/product/v_detail_product', [
            'title' => 'Detail Product',
            'data'  => $this->ModelProduk->find($id),
            'cart'  => session()->get('id_user') == null ? null : $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where('cart.id_user', session()->get('id_user'))->findAll()
        ]);
    }

    public function about()
    {
        return view('frontend/about/v_about', [
            'title' => 'About',
            'cart'  => session()->get('id_user') == null ? null : $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where('cart.id_user', session()->get('id_user'))->findAll()
        ]);
    }
}
