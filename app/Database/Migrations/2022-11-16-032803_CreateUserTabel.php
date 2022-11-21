<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTabel extends Migration
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
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],      
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],      
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
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
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}