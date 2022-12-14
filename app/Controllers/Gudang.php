<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ListPesanan;
use App\Models\Produk;

class Gudang extends BaseController
{
	protected $pesanModel;
	protected $produkModel;
	protected $listPesananModel;

	public function __construct()
	{
		$this->pesanModel = new \App\Models\Pesanan();
		$this->produkModel = new \App\Models\Produk();
		$this->listPesananModel = new \App\Models\ListPesanan();
	}

	public function index()
	{
		if (in_groups('toko')) {
			return redirect()->to(base_url('toko/dashboard'));
		} else if (in_groups('supir')) {
			return redirect()->to(base_url('supir/dashboard'));
		} else {
			return redirect()->to(base_url('gudang/dashboard'));
		}
	}

	public function dashboard()
	{
		if (in_groups('toko')) {
			return redirect()->to(base_url('toko/dashboard'));
		} else if (in_groups('supir')) {
			return redirect()->to(base_url('supir/dashboard'));
		}
		$semua = $this->pesanModel->join('toko', 'pesanan.id_toko=toko.id_toko')->join('status', 'status.id_status = pesanan.id_status')->findAll();
		$masuk = $this->pesanModel->where('id_status', 1)->countAllResults();
		$proses = $this->pesanModel->where('id_status', 2)->countAllResults();
		$selesai = $this->pesanModel->where('id_status', 4)->countAllResults();
		$tanggalMasuk = $this->pesanModel->selectCount('id_pesanan')->select('tanggal')->where('id_status', 1)->groupBy('tanggal')->findAll();
		$tanggalProses = $this->pesanModel->selectCount('id_pesanan')->select('tanggal')->where('id_status', 2)->groupBy('tanggal')->findAll();
		$tanggalSelesai = $this->pesanModel->selectCount('id_pesanan')->select('tanggal')->where('id_status', 3)->groupBy('tanggal')->findAll();
		$pesananMasuk = $this->pesanModel->get_pesanan();
		$pesananSelesai = $this->pesanModel->get_pesanan_selesai();

		$data = [
			'title' => 'Dashboard',
			'semua' => $semua,
			'pesanan_masuk' => $masuk,
			'pesanan_diproses' => $proses,
			'pesanan_selesai' => $selesai,
			'tanggal_masuk' => $tanggalMasuk,
			'tanggal_diproses' => $tanggalProses,
			'tanggal_selesai' => $tanggalSelesai,
			'pesanan_masuk_list' => $pesananMasuk,
			'pesanan_selesai_list' => $pesananSelesai,
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
		$pesanan = $this->pesanModel->get_dalam_pengiriman_gudang();
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
		return view('gudang/pesanaproses_pesanan');
	}


	public function detail_pesanan($id)
	{
		$pesanan = $this->pesanModel
			->join('toko', 'pesanan.id_toko=toko.id_toko')
			->join('status', 'pesanan.id_status=status.id_status')
			->where('pesanan.receipt', $id)->first();


		$produk = $this->listPesananModel->join('produk', 'list_pesanan.id_produk = produk.id_produk')->where('list_pesanan.id_pesanan', $pesanan->id_pesanan)->findAll();
		// dd($produk);
		$data = [
			'title' => 'Detail Pesanan',
			'pesanan' => $pesanan,
			'produk' => $produk,
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
		$TEMP = 'GS-P';
		$id = $this->produkModel->selectMax('id_produk')->first();
		$id = substr($id->id_produk, 4);
		$id++;
		$id = $TEMP . sprintf('%03s', $id);
		$produk = [
			'id_produk'		=> $id,
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
		$produk = $this->produkModel->where('slug', $id)->first();
		$data = [
			'title' => 'Restok Produk',
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

	public function detail_produk($id)
	{
		$produk = $this->produkModel->where('slug', $id)->first();

		$data = [
			'title' => 'Detail Produk',
			'produk' => $produk,
		];
		return view('gudang/produk/detail_produk', $data);
	}
}
