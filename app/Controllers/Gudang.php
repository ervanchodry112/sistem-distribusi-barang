<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Produk;

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
		$masuk = $this->pesanModel->where('id_status', 1)->countAllResults();
		$proses = $this->pesanModel->where('id_status', 2)->countAllResults();
		$selesai = $this->pesanModel->where('id_status', 3)->countAllResults();
		$tanggalMasuk = $this->pesanModel->selectCount('id_pesanan')->select('tanggal')->where('id_status', 1)->groupBy('tanggal')->findAll();
		$tanggalProses = $this->pesanModel->selectCount('id_pesanan')->select('tanggal')->where('id_status', 2)->groupBy('tanggal')->findAll();
		$tanggalSelesai = $this->pesanModel->selectCount('id_pesanan')->select('tanggal')->where('id_status', 3)->groupBy('tanggal')->findAll();
		// dd($tanggal);
		$data = [
			'title' => 'Dashboard',
			'pesanan_masuk' => $masuk,
			'pesanan_diproses' => $proses,
			'pesanan_selesai' => $selesai,
			'tanggal_masuk' => $tanggalMasuk,
			'tanggal_diproses' => $tanggalProses,
			'tanggal_selesai' => $tanggalSelesai,
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
		return view('gudang/produk/produk', $data);
	}

	public function proses($id)
	{
		$data = [
			'id_pesanan' => $id,
			'id_status'	=> 2,
		];
		$this->pesanModel->save($data);
		return redirect()->to('/gudang/pesanan_masuk');
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

	public function tambah_produk()
	{
		$data = [
			'title' => 'Tambah Produk'
		];

		return view('gudang/produk/tambah_produk', $data);
	}

	public function add_produk()
	{
		$input = $this->request->getVar();
		$fileUpload = $this->request->getFile('gambar');
		$fileUpload->move('assets/img/produk', $fileUpload->getName());
		$produk = [
			'nama_produk' => $input['nama_produk'],
			'harga' => $input['harga'],
			'stok' => $input['stok'],
			'slug' => url_title($input['nama_produk'], '-', true),
			'gambar' => $fileUpload->getName(),
		];

		$this->produkModel->insert($produk);

		if ($this->produkModel->affectedRows() > 0) {
			session()->setFlashdata('pesan', 'Produk Sukses Ditambahkan');
			return redirect()->to('gudang/produk');
		}
	}

	public function edit($id)
	{
		$produk = $this->produkModel->where('id_produk', $id)->first();
		$data = [
			'title' => 'Edit Mahasiswa',
			'produk' => $produk,
		];

		return view('gudang/produk/restock_produk', $data);
	}

	public function restock_produk()
	{
		$produk = $this->produkModel->where('id_produk', $this->request->getVar('id_produk'))->first();
		$data = [
			'stok' => $produk->stok + $this->request->getVar('stok'),
			'id_produk' => $this->request->getVar('id_produk'),
		];

		$this->produkModel->save($data);
		return redirect()->to('/gudang/produk/produk');
	}
}
