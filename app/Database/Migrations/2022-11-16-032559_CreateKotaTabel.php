<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKotaTabel extends Migration
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
            'nama_kota' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],      
            'ongkos_kirim' => [
                'type'       => 'INT',
                'constraint' => '8',
            ],      
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kota');
    }

    public function down()
    {
        $this->forge->dropTable('kota');
    }
}