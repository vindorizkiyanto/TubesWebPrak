<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'password', 'nama', 'notelepon', 'level'];

    public function getUser($username)
    {
        return $this->where(['username' => $username])->first();
    }
}
