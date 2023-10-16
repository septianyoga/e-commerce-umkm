<?php

namespace App\Controllers;

use App\Models\ModelCart;
use App\Models\ModelGaleri;
use App\Models\ModelProduk;

class Home extends BaseController
{

    private $ModelProduk, $ModelCart, $ModelGaleri;

    public function __construct()
    {
        helper('download');
        $this->ModelProduk = new ModelProduk();
        $this->ModelCart = new ModelCart();
        $this->ModelGaleri = new ModelGaleri();
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

    public function galeri()
    {
        return view('frontend/galeri/v_galeri', [
            'title' => 'Galeri',
            'cart'  => session()->get('id_user') == null ? null : $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where('cart.id_user', session()->get('id_user'))->findAll(),
            'data'  => $this->ModelGaleri->findAll()
        ]);
    }

    public function download()
    {
        $data = file_get_contents(base_url('asset/apk/RasaAlami.apk'));
        $nama = 'RasaAlami.apk';

        return $this->response->download($nama, $data);
    }
}
