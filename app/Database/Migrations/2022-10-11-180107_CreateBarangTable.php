<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBarangTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'kemasan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'indikasi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'dosis' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cara_penyimpanan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'no_izin_edar' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => true,
            ],
            'kategori' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}