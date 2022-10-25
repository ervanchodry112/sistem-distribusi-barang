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
			'title' => 'Dashboard'
		];
		return view('/toko/dashboard', $data);
	}
}
