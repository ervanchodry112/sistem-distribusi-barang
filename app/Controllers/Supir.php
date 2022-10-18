<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Supir extends BaseController
{
    public function index()
    {
        return redirect()->to('/supir/dashboard');
    }

    public function dashbord()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('/supir/dashbord', $data);
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
}
