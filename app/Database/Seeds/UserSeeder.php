<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'username'    => 'novaladitya',
                'email'       => 'noval@bukuku.com',
                'password'    => 'admin',
                'level'       => 'admin',
                'nama'        => 'Noval Aditya Marlon',
                'notelepon'   => '123',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ],
            [
                'username'    => 'fajruramadhan',
                'email'       => 'fajru@bukuku.com',
                'password'    => 'admin',
                'level'       => 'admin',
                'nama'        => 'Muhammad Fajru Ramadhan',
                'notelepon'   => '132',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ],
            [
                'username'    => 'vindorizkiyanto',
                'email'       => 'vindo@bukuku.com',
                'password'    => 'admin',
                'level'       => 'admin',
                'nama'        => 'Vindo Rizkiyanto',
                'notelepon'   => '213',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ],
            [
                'username'    => 'azrielbintang',
                'email'       => 'azriel@bukuku.com',
                'password'    => 'admin',
                'level'       => 'admin',
                'nama'        => 'Muhammad Azriel Bintang Saputra',
                'notelepon'   => '231',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ]
        ];

        $this->db->table('user')->insertBatch($data);
    }
}
