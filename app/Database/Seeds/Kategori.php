<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kategori extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kategori' => 'Obat Keras',
            ],
            [
                'kategori' => 'Obat Bebas',
            ],
            [
                'kategori' => 'Alat Kesehatan',
            ],
        ];

        foreach($data as $dt) {
            $this->db->table('kategori')->insert($dt);
        }
    }
}