<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelProduk;

class Produk extends BaseController
{

    private $ModelProduk;

    public function __construct()
    {
        $this->ModelProduk = new ModelProduk();
    }

    public function index()
    {
        return view('backend/produk/v_produk', [
            'title' => 'Produk',
            'data'  => $this->ModelProduk->where('stok_produk !=', null)->findAll()
        ]);
    }

    public function tambah_produk()
    {
        return view('backend/produk/v_tambah_produk', [
            'title' => 'Tambah Produk',
        ]);
    }

    public function add()
    {
        $validasi = [
            'nama_produk' => [
                'label' => 'Nama Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'harga_produk' => [
                'label' => 'Harga Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'foto_produk' => [
                'label' => 'Foto Produk',
                'rules' => 'uploaded[foto_produk]|max_size[foto_produk,3072]|mime_in[foto_produk,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ],
            ],
            'berat' => [
                'label' => 'Berat Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'deskripsi_produk' => [
                'label' => 'Deskripsi Produk',
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

        // dd($this->request->getPost());

        $foto_produk = $this->request->getFile('foto_produk');
        $nama_foto = $foto_produk->getRandomName();
        $data = [
            'nama_produk'       => $this->request->getPost('nama_produk'),
            'harga_produk'      => $this->request->getPost('harga_produk'),
            'berat'             => $this->request->getPost('berat'),
            'foto_produk'       => $nama_foto,
            'stok_produk'       => $this->request->getPost('stok_produk'),
            'deskripsi_produk'  => $this->request->getPost('deskripsi_produk'),
            'status_produk'     => 'Aktif'
        ];
        $this->ModelProduk->insert($data);
        $foto_produk->move('foto_produk', $nama_foto);
        if (!$this->request->getPost('stok_produk')) {
            return redirect()->to(base_url('paketreseller'))->with('pesan', 'Berhasil Menambahkan Paket Produk Reseller!.');
        }
        return redirect()->to(base_url('produk'))->with('pesan', 'Berhasil Menambahkan Produk!.');
    }

    public function ubah_produk($id)
    {
        return view('backend/produk/v_ubah_produk', [
            'title' => 'Ubah Produk',
            'data'  => $this->ModelProduk->find($id)
        ]);
    }

    public function edit($id)
    {
        $validasi = [
            'nama_produk' => [
                'label' => 'Nama Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'harga_produk' => [
                'label' => 'Harga Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'stok_produk' => [
                'label' => 'Stok Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'berat' => [
                'label' => 'Berat Produk',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'deskripsi_produk' => [
                'label' => 'Deskripsi Produk',
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

        $foto_produk = $this->request->getFile('foto_produk');
        if ($foto_produk->getError() == 4) {
            $data = [
                'nama_produk'       => $this->request->getPost('nama_produk'),
                'harga_produk'      => $this->request->getPost('harga_produk'),
                'berat'             => $this->request->getPost('berat'),
                'stok_produk'       => $this->request->getPost('stok_produk'),
                'deskripsi_produk'  => $this->request->getPost('deskripsi_produk'),
                'status_produk'     => $this->request->getPost('status_produk'),
            ];
            $this->ModelProduk->update($id, $data);
        } else {
            $nama_foto = $foto_produk->getRandomName();
            $data = [
                'nama_produk'       => $this->request->getPost('nama_produk'),
                'harga_produk'      => $this->request->getPost('harga_produk'),
                'berat'             => $this->request->getPost('berat'),
                'foto_produk'       => $nama_foto,
                'stok_produk'       => $this->request->getPost('stok_produk'),
                'deskripsi_produk'  => $this->request->getPost('deskripsi_produk'),
                'status_produk'     => $this->request->getPost('status_produk'),
            ];
            $foto_lama = $this->ModelProduk->find($id);
            unlink('foto_produk/' . $foto_lama['foto_produk']);
            $this->ModelProduk->update($id, $data);
            $foto_produk->move('foto_produk', $nama_foto);
        }
        return redirect()->to(base_url('produk'))->with('pesan', 'Berhasil Mengubah Produk!.');
    }

    public function detail_produk($id)
    {
        return view('backend/produk/v_detail_produk', [
            'title' => 'Detail Produk',
            'data'  => $this->ModelProduk->find($id)
        ]);
    }

    public function hapus_produk($id)
    {
        $produk = $this->ModelProduk->find($id);
        unlink('foto_produk/' . $produk['foto_produk']);
        $this->ModelProduk->delete($id);
        return redirect()->to(base_url('produk'))->with('pesan', 'Berhasil Menghapus Produk!.');
    }
}
