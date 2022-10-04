<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Gudang extends BaseController
{
    public function index()
    {
        return redirect()->to('/gudang/dashboard');
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('gudang/dashboard', $data);
    }
}
