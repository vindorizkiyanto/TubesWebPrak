<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => '100',
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'penulis'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'sampul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'kode_buku'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'deskripsi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'stok'       => [
				'type'           => 'INT',
				'constraint'     => '100',
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
		$this->forge->createTable('buku');
	}

	public function down()
	{
		$this->forge->dropTable('buku');
	}
}
