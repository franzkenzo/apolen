<?php

namespace App\Controllers;

use App\Models\Barang;

class Home extends BaseController
{
    public function index()
    {
        $barangModel = new Barang();
        $dataBarang = $barangModel->findAll();

        $data = [
            'barang' => $dataBarang,
        ];
        
        return view('home', $data);
    }
}