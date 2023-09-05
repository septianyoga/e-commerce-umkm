<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCart;
use App\Models\ModelOrders;
use App\Models\ModelProduk;
use App\Models\ModelUser;

class Payment extends BaseController
{

    private $ModelCart, $ModelOrders, $ModelUser, $ModelProduk;

    public function __construct()
    {
        $this->ModelCart = new ModelCart();
        $this->ModelOrders = new ModelOrders();
        $this->ModelUser = new ModelUser();
        $this->ModelProduk = new ModelProduk();
    }

    public function index()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        // dd($this->request->getVar('id_order'));

        $data = $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where([
            'cart.id_user' => session()->get('id_user'),
            'id_order'  => $this->request->getPost('id_order')
        ])->findAll();
        $items = [];
        foreach ($data as $row) {
            $items[] = [
                'id' => $row['id_produk'],
                'price' => $row['harga_produk'],
                'quantity' => $row['qty'],
                'name' => $row['nama_produk'],
            ];
        }

        $order = $this->ModelOrders->find($this->request->getPost('id_order'));

        $items[] = [
            'id'    => '',
            'price' => $order['ongkir'],
            'quantity'  => 1,
            'name'  => "Ongkir JNE $order[kurir]"
        ];
        // dd($items);

        $user = $this->ModelUser->find(session()->get('id_user'));

        $customer_details = array(
            'first_name'    => "$user[nama_user]",
            'email'         => "$user[email]",
            'phone'         => "$user[no_telp]",
            'address'       => "$user[alamat]",
            'city'          => "$user[kota]",
        );
        $params = array(
            'transaction_details' => array(
                'order_id' => $this->request->getPost('id_order'),
                'gross_amount' => $order['total_pembayaran'],
            ),
            'customer_details'    => $customer_details,
            'item_details'        => $items,
        );

        $data = [
            'snapToken' => \Midtrans\Snap::getSnapToken($params)
        ];

        echo json_encode($data);
        // return view('frontend/payment/v_pay', $data);
    }

    public function pending()
    {
        $data = [
            'id_order'          => $this->request->getPost('id_order'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'bank'              => $this->request->getPost('bank'),
            'va_number'         => $this->request->getPost('va_number'),
            'batas_transaksi'   => $this->request->getPost('batas_transaksi'),
            'id_transaksi'      => $this->request->getPost('id_transaksi'),
            'status_pesanan'    => 'Pending'
        ];
        $this->ModelOrders->update($this->request->getPost('id_order'), $data);
        echo 'success';
    }

    public function pay()
    {
        // var_dump($this->request->getVar());
        // die();



        // handle status pending
        if ($this->request->getVar('transaction_status') == 'pending') {

            // payment type virtual account
            if ($this->request->getVar('payment_type') == 'bank_transfer') {
                $bank = $this->request->getVar('va_numbers');
                $data = [
                    'id_order'          => $this->request->getVar('order_id'),
                    'metode_pembayaran' => $this->request->getVar('payment_type'),
                    'bank'              => $bank[0]->bank,
                    'va_number'         => $bank[0]->va_number,
                    'batas_transaksi'   => $this->request->getVar('expiry_time'),
                    'id_transaksi'      => $this->request->getVar('transaction_id'),
                    'status_pesanan'    => 'Pending'
                ];
                $this->ModelOrders->update($this->request->getVar('order_id'), $data);
                $success = [
                    'status' =>  '201',
                    'message'   => 'Payment On Pending'
                ];
                return json_encode($success);
            }

            // payment type e-money
            if ($this->request->getVar('payment_type') != 'bank_transfer') {
                $data = [
                    'metode_pembayaran' => $this->request->getVar('payment_type') == 'cstore' ? $this->request->getVar('store') : $this->request->getVar('payment_type'),
                    'batas_transaksi'   => $this->request->getVar('expiry_time'),
                    'id_transaksi'      => $this->request->getVar('transaction_id'),
                    'status_pesanan'    => 'Pending'
                ];
                $success = [
                    'status' =>  '201',
                    'message'   => 'Payment On Pending'
                ];
            }
            $this->ModelOrders->update($this->request->getVar('order_id'), $data);
            return json_encode($success);
        }

        // handle status settlement
        if ($this->request->getVar('transaction_status') == 'settlement') {


            $order = $this->ModelOrders->where([
                'id_order'      => $this->request->getVar('order_id'),
                'id_transaksi'  => $this->request->getVar('transaction_id'),
            ])->first();
            if (!$order) { // check order id and transaction id is find?
                $err = [
                    'status' =>  '404',
                    'message'   => 'Transaction Not Found'
                ];
                return json_encode($err);
            }

            $this->ModelOrders->update($this->request->getVar('order_id'), ['status_pesanan' => 'Selesai']);
            $success = [
                'status' =>  '200',
                'message'   => 'Payment Success'
            ];
            return json_encode($success);
        }

        // handle status expired
        if ($this->request->getVar('transaction_status') == 'expire') {
            $order = $this->ModelOrders->where([
                'id_order'      => $this->request->getVar('order_id'),
                'id_transaksi'  => $this->request->getVar('transaction_id'),
            ])->first();
            if (!$order) { // check order id and transaction id is find?
                $err = [
                    'status' =>  '404',
                    'message'   => 'Transaction Not Found'
                ];
                return json_encode($err);
            }

            $this->ModelOrders->update($this->request->getVar('order_id'), ['status_pesanan' => 'Expired']);
            $success = [
                'status' =>  '202',
                'message'   => 'Payment Expired'
            ];
            // update balikin stok produk lagi
            $cart_produk = $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where('id_order', $this->request->getVar('order_id'))->findAll();
            foreach ($cart_produk as $dt) {
                if ($dt['stok_produk'] != null) {
                    $sisa_stok = $dt['stok_produk'] + $dt['qty'];
                    $this->ModelProduk->update($dt['id_produk'], ['stok_produk' => $sisa_stok]);
                }
            }
            return json_encode($success);
        }

        // handle payment qris
        // if ($this->request->getVar('payment_type') == 'qris') {
        //     if ($this->request->getVar('transaction_status') == 'pending') {
        //         $data = [
        //             'metode_pembayaran' => $this->request->getVar('payment_type'),
        //             'batas_transaksi'   => $this->request->getVar('expiry_time'),
        //             'id_transaksi'      => $this->request->getVar('transaction_id'),
        //             'status_pesanan'    => 'Pending'
        //         ];
        //         $success = [
        //             'status' =>  '201',
        //             'message'   => 'Payment On Pending'
        //         ];
        //     } elseif ($this->request->getVar('transaction_status') == 'expire') {
        //         $data = [
        //             'status_pesanan'    => 'Expired'
        //         ];
        //         $success = [
        //             'status' =>  '202',
        //             'message'   => 'Payment Expired'
        //         ];
        //     } elseif ($this->request->getVar('transaction_status') == 'settlement') {
        //         $data = [
        //             'status_pesanan'    => 'Selesai'
        //         ];
        //         $success = [
        //             'status' =>  '200',
        //             'message'   => 'Payment Complete'
        //         ];
        //     }
        //     $this->ModelOrders->update($this->request->getVar('order_id'), $data);
        //     return json_encode($success);
        // }
        // if ($this->request->getVar('transaction_status') == 'pending') {
        //     $bank = $this->request->getVar('va_numbers');
        //     $data = [
        //         'id_order'          => $this->request->getVar('order_id'),
        //         'metode_pembayaran' => $this->request->getVar('payment_type'),
        //         'bank'              => $bank[0]->bank,
        //         'va_number'         => $bank[0]->va_number,
        //         'batas_transaksi'   => $this->request->getVar('expiry_time'),
        //         'id_transaksi'      => $this->request->getVar('transaction_id'),
        //         'status_pesanan'    => 'Pending'
        //     ];
        //     $this->ModelOrders->update($this->request->getVar('order_id'), $data);
        //     $success = [
        //         'status' =>  '201',
        //         'message'   => 'Payment On Pending'
        //     ];
        //     return json_encode($success);
        // } elseif ($this->request->getVar('transaction_status') == 'settlement') {

        //     if ($this->request->getVar('status_code') != 200) {
        //         $err = [
        //             'status' =>  '500',
        //             'message'   => 'Payment Failed'
        //         ];
        //         return json_encode($err);
        //     }
        //     // $coba = $this->request->getVar('va_numbers');
        //     $id_order = $this->request->getVar('order_id');
        //     $order = $this->ModelOrders->find($id_order);
        //     if (!$order) {
        //         $err = [
        //             'status' =>  '404',
        //             'message'   => 'Payment Not Found'
        //         ];
        //         return json_encode($err);
        //     }
        //     if ($order['id_transaksi'] != $this->request->getVar('transaction_id')) {
        //         $err = [
        //             'status' =>  '404',
        //             'message'   => 'Transaction Not Found'
        //         ];
        //         return json_encode($err);
        //     }
        //     $this->ModelOrders->update($id_order, ['status_pesanan' => 'Selesai']);
        //     $success = [
        //         'status' =>  '200',
        //         'message'   => 'Payment Success'
        //     ];
        //     return json_encode($success);
        // }
        $success = [
            'status' =>  '500',
            'message'   => 'Transaction Not Found'
        ];
        return json_encode($success);
    }

    public function direct()
    {
        $id_order = $this->request->getVar('order_id');
        $message = $this->request->getVar('message');

        if ($id_order == '') {
            return redirect()->to(base_url('order?message=' . $message));
        }
        return redirect()->to(base_url('order/' . $id_order . '/detail?message=' . $message));
    }
}
