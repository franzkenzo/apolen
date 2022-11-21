<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailUserTabel extends Migration
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
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'no_telp' => [
                'type'       => 'VARCHAR',
                'constraint' => '16',
            ],
            'alamat' => [
                'type'       => 'TEXT',
            ],
            'foto_profil' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user_detail');
    }

    public function down()
    {
        $this->forge->dropTable('user_detail');
    }
}