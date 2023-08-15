<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelCart;
use App\Models\ModelUser;

class Auth extends BaseController
{
    private $ModelUser, $ModelCart;

    public function __construct()
    {
        $this->ModelUser = new ModelUser();
        $this->ModelCart = new ModelCart();
    }

    public function index()
    {
        // dd(session()->getFlashdata());
        return view('auth/v_login', [
            'title' => 'Login'
        ]);
    }

    public function login()
    {
        $validate = $this->validate([
            'username' => 'required',
            'password' => 'required|min_length[3]'
        ]);
        if (!$validate) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        $cek_data = $this->ModelUser->where([
            'username'  => $this->request->getPost('username'),
            'password'  => $this->request->getPost('password')
        ])->first();

        if ($cek_data) {
            session()->set('id_user', $cek_data['id_user']);
            session()->set('nama_user', $cek_data['nama_user']);
            session()->set('username', $cek_data['username']);
            session()->set('email', $cek_data['email']);
            session()->set('role', $cek_data['role']);
            return redirect()->to(base_url('admin'));
        }
        return redirect()->back()->with('fail', 'Username atau Password Salah!');
    }

    public function regist()
    {
        return view('auth/v_daftar', [
            'title' => 'Daftar'
        ]);
    }

    public function daftar()
    {
        $validasi = [
            'nama_user' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                    'valid_email' => '{field} Harus Valid.',
                    'is_unique' => '{field} Sudah Digunakan.',
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                    'min_length' => '{field} Minimal Terdiri Dari 6 Huruf.',
                ],
            ],
            'no_telp' => [
                'label' => 'Nomor Telepon',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'id_provinsi' => [
                'label' => 'Provinsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'id_kota' => [
                'label' => 'Kota / Kabupaten',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
        ];

        if (!$this->validate($validasi)) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        if ($this->request->getPost('role') == 'Admin') {
            return redirect()->back()->with('pesan', 'Tidak Semudah Itu Ferguso.');
        }

        $this->ModelUser->insert($this->request->getPost());
        return redirect()->to(base_url('auth'))->with('berhasil', 'Silahkan Cek Email Anda Untuk Aktivasi Akun.');
    }

    public function editAlamat()
    {
        return view('auth/v_edit_alamat', [
            'title' => 'Edit Alamat',
            'cart'          => session()->get('id_user') == null ? null : $this->ModelCart->join('produk', 'produk.id_produk = cart.id_produk')->where(['cart.id_user' => session()->get('id_user'), 'id_order' => null])->findAll(),
            'user'          => $this->ModelUser->find(session()->get('id_user')),
        ]);
    }

    public function prosesEdit()
    {
        $validasi = [
            'nama_user' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'no_telp' => [
                'label' => 'Nomor Telepon',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'kota' => [
                'label' => 'Kota / Kabupaten',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'provinsi' => [
                'label' => 'Provinsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'id_provinsi' => [
                'label' => 'Provinsi',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'id_kota' => [
                'label' => 'Kota / Kabupaten',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
        ];

        if (!$this->validate($validasi)) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        $this->ModelUser->update(session()->get('id_user'), $this->request->getPost());
        return redirect()->to(base_url('auth/edit_alamat'))->with('pesan', 'Berhasil Edit Alamat');
    }

    public function getProvinsi()
    {
        $curl = curl_init();

        $key = env('API_ONGKIR_KEY');

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: $key"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function getKota()
    {
        $id_prov = $this->request->getVar('id_prov');

        $curl = curl_init();

        $key = env('API_ONGKIR_KEY');

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=$id_prov",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: $key"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function logout()
    {
        session()->remove('id_user');
        session()->remove('nama_user');
        session()->remove('username');
        session()->remove('email');
        session()->remove('role');
        return redirect()->to(base_url('auth'))->with('logout', 'Logout Berhasil!');
    }
}
