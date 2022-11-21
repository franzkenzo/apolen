<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailTransaksiTabel extends Migration
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
            'id_barang' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'id_transaksi' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'jumlah_barang' => [
                'type'       => 'INT',
                'constraint' => '6',
            ],            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kategori_detail');
    }

    public function down()
    {
        $this->forge->dropTable('kategori_detail');
    }
}