<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = 'peminjaman';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'id_buku', "nama_buku", 'tgl_pinjam', 'tgl_kembali', 'status'];

    public function getListPinjam($id_user)
    {
        return $this->where('id_user', $id_user);
    }
}
