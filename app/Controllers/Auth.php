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
        return view('auth/v_login');
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

    public function logout()
    {
        session()->remove('id_user');
        session()->remove('nama_user');
        session()->remove('username');
        session()->remove('email');
        session()->remove('role');
        return redirect()->to(base_url('auth'))->with('logout', 'LogoutTTTTTTTTTTT Berhasil!');
    }
}
