<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCart;
use App\Models\ModelProduk;

class Cart extends BaseController
{

    protected $ModelCart, $ModelProduk;

    public function __construct()
    {
        $this->ModelCart = new ModelCart();
        $this->ModelProduk = new ModelProduk();
    }

    public function index()
    {
        $cart = $this->ModelCart->findAll();
        echo '<pre>';
        var_dump($cart);
        echo '</pre>';
        die();
    }

    public function add()
    {
        $cart = $this->ModelCart->where(['id_produk' => $this->request->getVar('id_produk'), 'id_order' => null, 'id_user' => session()->get('id_user')])->first();

        $produk = $this->ModelProduk->find($this->request->getVar('id_produk'));


        if ($cart) {
            if ($cart['qty'] >= $produk['stok_produk']) {
                return 'Gagal';
            }
            $this->ModelCart->update($cart['id_cart'], ['qty' => $cart['qty'] + 1]);
            $result = 'update';
        } else {
            $this->ModelCart->insert([
                'id_produk' => $this->request->getVar('id_produk'),
                'qty' => 1,
                'id_user' => session()->get('id_user')
            ]);
            $result = 'tambah';
        }
        return $result;
    }

    public function get()
    {
        $cart = $this->ModelCart->where(['id_user' => session()->get('id_user'), 'id_order' => null])->selectSum('qty')->first();
        if ($cart['qty'] == null) {
            return '0';
        }
        return $cart['qty'];
    }

    public function delete($id_cart)
    {
        $this->ModelCart->delete($id_cart);
        return redirect()->to(base_url('/'));
    }

    public function getAll()
    {
        $cart = $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where(['cart.id_user' => session()->get('id_user'), 'id_order' => null])->findAll();

        foreach ($cart as $val) {
            echo '<div class="d-flex justify-content-between mt-2 delcart">
                <div class="d-flex">
                    <div class="me-3">
                        <a href="' . base_url('product/' . $val['id_produk']) . '"><img class="images-size rounded" alt="header-img" src="' . base_url('foto_produk/' . $val['foto_produk']) . '" style="aspect-ratio: 4/3; object-fit: contain;"></a>
                    </div>
                    <div>
                        <h6 class="mb-0"></h6>
                        <span>' . $val['qty'] . ' × Rp. ' . $val['harga_produk'] . ' </span>
                    </div>
                </div>
                <div>
                    <a class="iq-product-remove" onclick="delCart(' . $val['id_cart'] . ')"><i class="fas fa-times"></i></a>
                </div>
            </div>';
        }
    }
}
