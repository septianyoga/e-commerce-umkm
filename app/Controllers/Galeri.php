<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelGaleri;

class Galeri extends BaseController
{
    private $ModelGaleri;
    public function __construct()
    {
        $this->ModelGaleri = new ModelGaleri();
    }
    public function index()
    {
        return view('backend/galeri/v_galeri', [
            'title' => 'Kelola Galeri',
            'data'  => $this->ModelGaleri->findAll()
        ]);
    }

    public function tambah()
    {
        $validasi = [
            'nama_foto' => [
                'label' => 'Nama Foto',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'foto' => [
                'label' => 'Foto Galeri',
                'rules' => 'uploaded[foto]|mime_in[foto,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi.',
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ],
            ],
        ];

        if (!$this->validate($validasi)) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        $foto = $this->request->getFile('foto');
        $nama_foto = $foto->getRandomName();

        $data = [
            'nama_foto' => $this->request->getPost('nama_foto'),
            'foto'  => $nama_foto
        ];
        $foto->move('foto_galeri', $nama_foto);
        $this->ModelGaleri->insert($data);
        return redirect()->to(base_url('kelola_galeri'))->with('pesan', 'Galeri Berhasil ditambahkan!.');
    }

    public function edit($id)
    {
        $validasi = [
            'nama_foto' => [
                'label' => 'Nama Foto',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi.',
                ],
            ],
            'foto' => [
                'label' => 'Foto Galeri',
                'rules' => 'mime_in[foto,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => '{field} Maksimal Ukurannya 1 MB',
                    'mime_in' => 'Format {field} Wajib PNG/JPG/JPEG',
                ],
            ],
        ];

        if (!$this->validate($validasi)) {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->back()->withInput();
        }

        $foto = $this->request->getFile('foto');
        if ($foto->getError() == 4) {
            // kalo dia ga ngubah gambar
            $this->ModelGaleri->update($id, ['nama_foto' => $this->request->getPost('nama_foto')]);
            return redirect()->to(base_url('kelola_galeri'))->with('pesan', 'Galeri Berhasil Diubah.');
        }
        $foto_lama = $this->ModelGaleri->find($id);
        unlink('galeri/' . $foto_lama['foto']);
        $nama_foto = $foto->getRandomName();
        $data = [
            'nama_foto' => $this->request->getPost('nama_foto'),
            'foto'  => $nama_foto
        ];
        $foto->move('foto_galeri', $nama_foto);
        $this->ModelGaleri->update($id, $data);
        return redirect()->to(base_url('kelola_galeri'))->with('pesan', 'Galeri Berhasil Diubah.');
    }

    public function hapus($id)
    {
        $galeri = $this->ModelGaleri->find($id);
        unlink('galeri/' . $galeri['foto']);
        $this->ModelGaleri->delete($id);
        return redirect()->to(base_url('kelola_galeri'))->with('pesan', 'Galeri Berhasil Dihapus.');
    }
}
