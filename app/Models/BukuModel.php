<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $useTimestamps = true;
    protected $allowedFields = ['kode_buku', 'judul', 'penulis', 'sampul', 'deskripsi'];

    public function getBuku($kode_buku = false)
    {
        if ($kode_buku == false) {
            return $this->findAll();
        }

        return $this->where(['kode_buku' => $kode_buku])->first();
    }
}
