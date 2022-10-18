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

	public function pesanan_masuk()
	{
		$data = [
			'title' => 'Pesanan Masuk'
		];
		return view('gudang/pesanan/pesanan_masuk', $data);
	}

	public function dalam_proses()
	{
		$data = [
			'title' => 'Pesanan Dalam Proses'
		];
		return view('gudang/pesanan/dalam_proses', $data);
	}

	public function pesanan_selesai()
	{
		$data = [
			'title' => 'Pesanan Selesai'
		];
		return view('gudang/pesanan/pesanan_selesai', $data);
	}

	public function proses_pesanan()
	{
		return view('gudang/pesanan/proses_pesanan');
	}

	public function detail_pesanan()
	{
		$data = [
			'title' => 'Detail Pesanan'
		];
		return view('gudang/pesanan/detail_pesanan', $data);
	}

	public function produk()
	{
		$data = [
			'title' => 'Detail Pesanan'
		];
		return view('gudang/produk', $data);
	}
}
