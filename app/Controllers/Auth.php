<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        //
    }

    public function registrasi()
    {
        $data = [
            'title' => 'Registrasi'
        ];
        return view('auth/data_toko', $data);
    }
}
