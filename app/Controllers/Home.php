<?php

namespace App\Controllers;

use App\Models\BarangModels;

class Home extends BaseController
{
    public function index()
    {
        $barangModel = new BarangModels();
        $dataBarang = $barangModel->findAll();

        $data = [
            'barang' => $dataBarang,
        ];
        
        return view('home', $data);
    }
}