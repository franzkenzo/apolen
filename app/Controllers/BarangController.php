<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kategori;
use App\Models\BarangModels;

class BarangController extends BaseController
{
    public function index()
    {
        return view('list-barang');
    }
    
    public function listBarang()
    {
        $barangModel = new BarangModels();
        $dataBarang = $barangModel->getBarangKategori();
        // dd($dataBarang);
        
        $data = [
            'barang' => $dataBarang,
        ];
        
        return view('list-barang', $data);
    }
    
    public function preview()
    {
        $barangModel = new BarangModels();
        $dataBarang = $barangModel->findAll();

        $data = [
            'barang' => $dataBarang,
        ];
        
        return view('preview', $data);
    }

    public function tambahBarang() {
        $kategori = new Kategori();
        $data = [
            'kategori' => $kategori->findAll(),
        ];

        return view('tambah-barang', $data);
    }

    public function handleTambahBarang() {
        $barang = new BarangModels();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kemasan' => $this->request->getPost('kemasan'),
            'indikasi' => $this->request->getPost('indikasi'),
            'dosis' => $this->request->getPost('dosis'),
            'cara_penyimpanan' => $this->request->getPost('penyimpanan'),
            'no_izin_edar' => $this->request->getPost('noizin'),
            'harga' => $this->request->getPost('harga'),
            'id_kategori' => $this->request->getPost('kategori')
        ];
            
        $barang->insert($data);
        return redirect('')->to(base_url('admin'));
    }

    public function updateBarang($id) {
        $barang  = new BarangModels();
        $kategori = new Kategori();
        $barang = $barang->where('id', $id)->find()[0];
        $data = [
            'barang' => $barang,
            'kategori' => $kategori->findAll(),
        ];
        return view('update-barang', $data);
    }

    public function handleUpdateBarang($id) {
        $barang = new BarangModels();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kemasan' => $this->request->getPost('kemasan'),
            'indikasi' => $this->request->getPost('indikasi'),
            'dosis' => $this->request->getPost('dosis'),
            'cara_penyimpanan' => $this->request->getPost('penyimpanan'),
            'no_izin_edar' => $this->request->getPost('noizin'),
            'harga' => $this->request->getPost('harga'),
            'id_kategori' => $this->request->getPost('kategori')
        ];
            
        $barang->update($id, $data);
        return redirect()->to(base_url('admin'));
    }

    public function deleteBarang($id) 
    {
        $barang = new BarangModels();
        $barang->delete($id);
        return redirect()->to(base_url('admin'));
    }
}