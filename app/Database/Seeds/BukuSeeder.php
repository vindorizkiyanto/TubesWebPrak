<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class BukuSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_buku'   => 'WTHAY',
                'judul'       => 'Who The Hell Are You?',
                'penulis'     => 'Helmy Yahya & Baban S',
                'sampul'      => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2020/12/12/1b8b1c94-42e3-44af-8654-ef668d526c87.jpg',
                'deskripsi'   => ' Personal Branding for All
                Jangan pernah bermimpi meraih sukses jika Anda tidak memiliki personal branding yang kuat dan positif!
                Burung yang sama hinggap di dahan yang sama.
                Apa pun pilihan hidup dan karir Anda, jadilah yang terbaik!',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ],
            [
                'kode_buku'   => 'KUDSWDB',
                'judul'       => 'Kesalahan Umum Dalam Salat , Wudhu & Berhadas',
                'penulis'     => 'Ahmad Harjani',
                'sampul'      => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2020/12/24/82c75fa3-2397-43b9-9e51-2976c6fe2bc5.jpg',
                'deskripsi'   => 'Serial kali ini membahas tentang kesalahan umum dalam Salat, Wudhu, dan Berhadas',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ],
            [
                'kode_buku'   => 'MEIM',
                'judul'       => 'MICROSOFT EXCEL ITU MUDAH',
                'penulis'     => 'Ibnu Teguh Wibowo',
                'sampul'      => 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2020/12/24/5677655b-db24-45fc-a2e8-45443edbebe4.jpg',
                'deskripsi'   => 'Kamu bingung gimana cara mengoperasikan
                rumus-rumus dan formulanya? Tenang, kamu perlu
                membaca buku ini supaya bisa membuktikan kalau Microsoft Excel itu
                memang mudah.',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ],
            [
                'kode_buku'   => 'SSUBBM',
                'judul'       => 'SEBUAH SENI UNTUK BERSIKAP BODO AMAT',
                'penulis'     => 'Mark Manson',
                'sampul'      => 'https://ecs7.tokopedia.net/img/cache/900/product-1/2020/10/15/24721293/24721293_376dec6b-2b77-4d72-9d88-b80c5973ccf8_775_775',
                'deskripsi'   => 'Dalam hidup ini, kita hanya punya
                kepedulian dalam jumlah yang terbatas.
                Makanya, Anda harus bijaksana dalam menentukan kepedulian Anda.',
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ],

        ];

        $this->db->table('buku')->insertBatch($data);
    }
}
