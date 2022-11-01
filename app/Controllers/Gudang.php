<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Gudang extends BaseController
{
	protected $pesanModel;
	protected $produkModel;

	public function __construct()
	{
		$this->pesanModel = new \App\Models\Pesanan();
		$this->produkModel = new \App\Models\Produk();
	}

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
		$pesanan = $this->pesanModel->get_pesanan();
		$data = [
			'title' => 'Pesanan Masuk',
			'pesanan' => $pesanan,
		];

		return view('gudang/pesanan/pesanan_masuk', $data);
	}

	public function dalam_proses()
	{
		$pesanan = $this->pesanModel->get_dalam_proses();
		$data = [
			'title' => 'Pesanan Dalam Proses',
			'pesanan' => $pesanan,
		];
		return view('gudang/pesanan/dalam_proses', $data);
	}

	public function dalam_pengiriman()
	{
		$pesanan = $this->pesanModel->get_dalam_pengiriman();
		$data = [
			'title' => 'Pesanan Dalam Proses',
			'pesanan' => $pesanan,
		];

		return view('gudang/pesanan/dalam_pengiriman', $data);
	}

	public function pesanan_selesai()
	{
		$pesanan = $this->pesanModel->get_pesanan_selesai();
		$data = [
			'title' => 'Pesanan Selesai',
			'pesanan' => $pesanan,
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
		$produk = $this->produkModel->findAll();
		$data = [
			'title' => 'Produk',
			'produk' => $produk,
		];
		return view('gudang/produk', $data);
	}

	public function proses($id)
	{
		$data = [
			'id_pesanan' => $id,
			'id_status'	=> 2,
		];
		$this->pesanModel->save($data);
		return redirect()->to(base_url('gudang/pesanan_masuk'));
	}

	public function reject($id)
	{
		$data = [
			'id_pesanan' => $id,
			'id_status'	=> 5,
		];
		$this->pesanModel->save($data);
		return redirect()->to(base_url('gudang/pesanan_masuk'));
	}
}
