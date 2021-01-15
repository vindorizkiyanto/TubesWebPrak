<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function tambahdata()
    {
        //validasi input
        if (!$this->validate([
            'kode_buku' => [
                'rules' => 'required|is_unique[buku.kode_buku]|max_length[10]',
                'errors' => [
                    'required' => 'Kode Buku harus diisi.',
                    'is_unique' => 'Kode Buku sudah terdaftar',
                    'max_length' => 'Kode Buku tidak boleh lebih dari 6 karakter.'
                ]
            ],
            'judul' => [
                'rules' => 'required|is_unique[buku.judul]|max_length[100]',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah terdaftar',
                    'max_length' => 'Judul tidak boleh lebih dari 100 karakter.'
                ]
            ],
            'penulis' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Nama Penulis harus diisi.',
                    'max_length' => 'Nama tidak boleh lebih dari 100 Karakter.'
                ]
            ],
            'sampul' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Sampul (Berupa link) harus diisi.',
                    'max_length' => 'Link Sampul tidak boleh lebih dari 255 Karakter.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Deskripsi Buku harus diisi.',
                    'max_length' => 'Deskripsi Buku tidak boleh lebih dari 255 Karakter.'
                ]
            ],
            'stok' => [
                'rules' => 'required|max_length[3]',
                'errors' => [
                    'required' => 'Stok Buku harus diisi.',
                    'max_length' => 'Stok Buku tidak boleh lebih dari 3 digit angka.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/tambahdata')->withInput()->with('validation', $validation);
        }

        $this->bukuModel->save([
            'kode_buku' => $this->request->getVar('kode_buku'),
            'judul' => $this->request->getVar('judul'),
            'penulis' => $this->request->getVar('penulis'),
            'sampul' => $this->request->getVar('sampul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'stok' => $this->request->getVar('stok')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect()->to('/admin');
    }

    public function update($id)
    {
        $dataLama = $this->bukuModel->getBuku($this->request->getVar('kode_buku'));

        if ($dataLama['kode_buku'] == $this->request->getVar('kode_buku')) {
            $rules_kode_buku = 'required|max_length[10]';
        } else {
            $rules_kode_buku = 'required|max_length[10]|is_unique[buku.kode_buku]';
        }
        if ($dataLama['judul'] == $this->request->getVar('judul')) {
            $rules_judul = 'required|max_length[100]';
        } else {
            $rules_judul = 'required|max_length[100]|is_unique[buku.judul]';
        }
        if (!$this->validate([
            'kode_buku' => [
                'rules' => $rules_kode_buku,
                'errors' => [
                    'required' => 'Kode Buku harus diisi.',
                    'is_unique' => 'Kode Buku sudah terdaftar',
                    'max_length' => 'Kode Buku tidak boleh lebih dari 6 karakter.'
                ]
            ],
            'judul' => [
                'rules' => $rules_judul,
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah terdaftar',
                    'max_length' => 'Judul tidak boleh lebih dari 100 karakter.'
                ]
            ],
            'penulis' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Nama Penulis harus diisi.',
                    'max_length' => 'Nama tidak boleh lebih dari 100 Karakter.'
                ]
            ],
            'sampul' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Sampul (Berupa link) harus diisi.',
                    'max_length' => 'Link Sampul tidak boleh lebih dari 255 Karakter.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Deskripsi Buku harus diisi.',
                    'max_length' => 'Deskripsi Buku tidak boleh lebih dari 255 Karakter.'
                ]
            ],
            'stok' => [
                'rules' => 'required|max_length[3]',
                'errors' => [
                    'required' => 'Stok Buku harus diisi.',
                    'max_length' => 'Stok Buku tidak boleh lebih dari 3 digit angka.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/editdata/' . $this->request->getVar('kode_buku'))->withInput()->with('validation', $validation);
        }
        $this->bukuModel->save([
            'id' => $id,
            'kode_buku' => $this->request->getVar('kode_buku'),
            'judul' => $this->request->getVar('judul'),
            'penulis' => $this->request->getVar('penulis'),
            'sampul' => $this->request->getVar('sampul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'stok' => $this->request->getVar('stok')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin');
    }
    //--------------------------------------------------------------------

}
