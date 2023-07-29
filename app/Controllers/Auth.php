<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Auth extends BaseController
{
    private $ModelUser;

    public function __construct()
    {
        $this->ModelUser = new ModelUser();
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
        ];

        if (!$this->validate($validasi)) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        $this->ModelUser->insert($this->request->getPost());
        return redirect()->to(base_url('auth'))->with('berhasil', 'Silahkan Cek Email Anda Untuk Aktivasi Akun.');
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
