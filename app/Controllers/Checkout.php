<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCart;
use App\Models\ModelUser;

class Checkout extends BaseController
{

    protected $ModelCart, $ModelUser;

    public function __construct()
    {
        $this->ModelCart = new ModelCart();
        $this->ModelUser = new ModelUser();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {

        $cart = $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where(['cart.id_user' => session()->get('id_user'), 'id_order' => null])->findAll();

        if (!$cart) {
            return redirect()->to(base_url('/'))->with('peringatan', 'Silahkan Checkout Barang Terlebih Dahulu.');
        }

        return view('frontend/checkout/v_checkout', [
            'title'         => 'Checkout',
            'cart'          => session()->get('id_user') == null ? null : $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where(['cart.id_user' => session()->get('id_user'), 'id_order' => null])->findAll(),
            'user'          => $this->ModelUser->find(session()->get('id_user')),
        ]);
    }
}
