<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Toko extends BaseController
{
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
        $data = [
            'title' => 'Pesanan',
            'active' => 'pesanan',
        ];
        return view('toko/pesanan', $data);
    }
}
