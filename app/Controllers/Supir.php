<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pesanan;

class Supir extends BaseController
{

	protected $pesanModel;
	protected $supirModel;

	public function __construct()
	{
		$this->pesanModel = new Pesanan();
		$this->supirModel = new \App\Models\Supir();
	}

	public function index()
	{
		return redirect()->to('/supir/dashboard');
	}

	public function dashboard()
	{
		$siap = $this->pesanModel->where('id_status', 2)->countAllResults();
		$kirim = $this->pesanModel->where('id_status', 3)->countAllResults();
		$selesai = $this->pesanModel->where('id_status', 4)->countAllResults();
		$pesanan = $this->pesanModel->get_dalam_pengiriman();


		$data = [
			'title' => 'Dashboard',
			'siap' => $siap,
			'kirim' => $kirim,
			'selesai' => $selesai,
			'pesanan' => $pesanan,
		];

		return view('/supir/dashboard', $data);
	}

	public function pesanan_masuk()
	{
		$pesanan = $this->pesanModel->get_dalam_proses();
		$data = [
			'title' => 'Pesanan Masuk',
			'pesanan' => $pesanan
		];
		return view('/supir/pesanan/pesanan_masuk', $data);
	}

	public function dalam_pengiriman()
	{
		$pengiriman = $this->pesanModel->get_dalam_pengiriman();
		$data = [
			'title' => 'Pesanan Dalam Pengiriman',
			'pengiriman' => $pengiriman
		];
		return view('/supir/pesanan/dalam_pengiriman', $data);
	}

	public function pesanan_selesai()
	{
		$selesai = $this->pesanModel->get_pesanan_selesai();
		$data = [
			'title' => 'Pesanan Selesai',
			'selesai' => $selesai

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

	public function take_pesanan($id)
	{
		$idSupir = $this->supirModel->select('id_supir')->where('id_users', user_id())->first();
		$data = [
			'id_pesanan' => $id,
			'id_status' => 3,
			'id_supir' => $idSupir,
		];
		$this->pesanModel->save($data);
		return redirect()->to('supir/pesanan_masuk');
	}

	public function finish_pesanan($id)
	{
		$data = [
			'id_pesanan' => $id,
			'id_status' => 4,
		];
		$this->pesanModel->save($data);
		return redirect()->to('supir/dalam_pengiriman');
	}

	public function cancel_pesanan($id)
	{
		$data = [
			'id_pesanan' => $id,
			'id_status' => 2,
		];
		$this->pesanModel->save($data);
		return redirect()->to('supir/dalam_pengiriman');
	}

	public function create()
	{

		$data = [
			'titel' => 'supir'
		];
		return view('supir/create', $data);
	}
	public function add_supir()
	{

		$input = $this->request->getVar();
		$supir = [
			'name' => $input['nama'],
			'email' => $input['email'],
			'slug' => url_title($input['nama'], '-', true)
		];
		$this->supir->insert($supir);

		$balance = [
			'id_supir' => $this->supir->insertID(),
			'balance' => $input['balance']
		];
		$this->balance->insert($balance);
		if ($this->supir->affectedRows() > 0 && $this->balance->affectedRows() > 0) {
			session()->setFlashdata('pesan', 'Supir has been added successfully');
			return redirect()->to('/dashboard/supir');
		}
	}

}
