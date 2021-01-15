<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
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
			'id_user'		=> [
				'type'           => 'INT',
				'unsigned'       => true
			],
			'id_buku'		=> [
				'type'           => 'INT',
				'unsigned'       => true
			],
			'nama_buku'       => [
				'type'          => 'VARCHAR',
				'constraint'	=> '100'
			],
			'tgl_pinjam'       => [
				'type'           => 'VARCHAR',
				'constraint'	=> '100'
			],
			'tgl_kembali'       => [
				'type'           => 'VARCHAR',
				'constraint'	=> '100'
			],
			'status'       => [
				'type'          => 'VARCHAR',
				'constraint'	=> '100'
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('id_user', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('id_buku', 'buku', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('peminjaman');
	}
	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('peminjaman');
	}
}
