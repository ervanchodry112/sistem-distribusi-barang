<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Toko extends BaseController
{
    protected $pesanModel;
   
    public function __construct()
	{
		$this->pesanModel = new \App\Models\Pesanan();
		$this->produkModel = new \App\Models\Produk();
	}
    
    public function index()
    {
        return redirect()->to('/toko/dashboard');
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
        ];
        return view('toko/dashboard', $data);
    }

    public function pesanan()
    {
        $pesanan = $this->pesanModel->get_pesanan_toko();
        $data = [
            'title' => 'Pesanan',
            'active' => 'pesanan',
            'pesanan' => $pesanan,
        ];
        return view('toko/pesanan', $data);
    }

    public function create_pesanan()
    {
        $produk = $this->produkModel->findAll();
        $data = [
            'title' => 'Tambah Pesanan',
            'produk' => $produk,
        ];
        return view('toko/tambah_pesanan',$data);
    }

    public function delete_pesanan($id)
    {
        $this->pesanModel->delete($id);
        return redirect()->to(base_url('toko/pesanan'));
    }
}
