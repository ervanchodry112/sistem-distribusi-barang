<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Supir extends BaseController
{
    public function index()
    {
        return redirect()->to('/supir/dashboard');
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('/supir/dashboard', $data);
    }

    public function pesanan_masuk()
    {
        $data = [
            'title' => 'Pesanan Masuk'
        ];
        return view('/supir/pesanan/pesanan_masuk', $data);
    }

    public function dalam_pengiriman()
    {
        $data = [
            'title' => 'Pesanan Dalam Pengiriman'
        ];
        return view('/supir/pesanan/dalam_pengiriman', $data);
    }

    public function pesanan_selesai()
    {
        $data = [
            'title' => 'Pesanan Selesai'
        ];
        return view('/supir/pesanan/pesanan_selesai', $data);
    }

    public function detail_pesanan()
    {
        $data = [
            'title' => 'Detail Pesanan'
        ];
        return view('/supir/pesanan/detail_pesanan', $data);
    }

    public function take_pesanan($id){
        $data = [
            'id_pesanan' => 
        ];
        $this->pesanModel
    }
}
