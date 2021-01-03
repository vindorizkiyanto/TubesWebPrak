<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PeminjamanBuku extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 100,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'kode_pinjam'       => [
				'type'           => 'INT',
				'constraint'     => '100',
			],
			'judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'npm'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tgl_pinjam'       => [
				'type'           => 'DATETIME'
			],
			'tgl_kembali'       => [
				'type'           => 'DATETIME'
			],
			'status'       => [
				'type'          => 'VARCHAR',
				'constraint'	=> '100'
			],
			'created_at' => [
				'type'			=> 'DATETIME',
				'null'			=> true
			],
			'updated_at' => [
				'type'			=> 'DATETIME',
				'null'			=> true
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('peminjaman_buku');
	}

	public function down()
	{
		$this->forge->dropTable('peminjaman_buku');
	}
}
