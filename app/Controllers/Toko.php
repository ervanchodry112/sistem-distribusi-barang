<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Toko extends BaseController
{
    protected $pesanModel;
   
    public function __construct()
	{
		$this->pesanModel = new \App\Models\Pesanan();
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
        $data = [
            'title' => 'Tambah Pesanan'
        ];
        return view('toko/tambah_pesanan',$data);
    }
}
