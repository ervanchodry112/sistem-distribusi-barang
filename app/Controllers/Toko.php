<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Cart;
use App\Models\ListPesanan;
use App\Models\Toko as ModelsToko;

// use CodeIgniterCart\Cart;

class Toko extends BaseController
{
    protected $pesanModel;
    protected $produkModel;
    protected $cart;
    protected $tokoModel;
    protected $listPesananModel;

    public function __construct()
    {
        $this->pesanModel = new \App\Models\Pesanan();
        $this->produkModel = new \App\Models\Produk();
        $this->cart = new Cart();
        $this->tokoModel = new ModelsToko();
        $this->listPesananModel = new ListPesanan();
    }

    public function index()
    {
        return redirect()->to('/toko/dashboard');
    }

    public function dashboard()
	{
        $semua_pesanan_card = $this->pesanModel->get_semua_pesanan_toko()->countAllResults();
        $semua_pesanan = $this->pesanModel->get_semua_pesanan_toko()->get()->getResultObject();
        $pesanan_diproses_card = $this->pesanModel->get_pesanan_diproses_toko()->countAllResults();
        $pesanan_diproses = $this->pesanModel->get_pesanan_diproses_toko()->get()->getResultObject();
        $pesanan_selesai_card = $this->pesanModel->get_pesanan_selesai_toko()->countAllResults();
        $pesanan_selesai = $this->pesanModel->get_pesanan_selesai_toko()->get()->getResultObject();

        // d($semua_pesanan_card, $semua_pesanan, $pesanan_diproses_card, $pesanan_diproses);
        // exit();

		$data = [
			'title' => 'Dashboard',
            'semua_pesanan_card' => $semua_pesanan_card,
            'semua_pesanan' => $semua_pesanan,
            'pesanan_diproses_card' => $pesanan_diproses_card,
            'pesanan_diproses' => $pesanan_diproses,
            'pesanan_selesai_card' => $pesanan_selesai_card,
            'pesanan_selesai' => $pesanan_selesai,
		];
		return view('toko/dashboard', $data);
	}

    public function pesanan()
    {
        $pesanan = $this->pesanModel->get_pesanan_toko();
        $data = [
            'title' => 'Pesanan',
            'active' => 'pesanan',
            'pesanan' => $pesanan,
        ];
        return view('toko/pesanan', $data);
    }

    public function delete_pesanan($id)
    {
        $this->listPesananModel->where('id_pesanan', $id)->delete();
        if (!$this->pesanModel->delete($id)) {
            session()->setFlashdata('error', 'Gagal menghapus pesanan');
            return redirect()->to('/toko/pesanan');
        }
        session()->setFlashdata('success', 'Berhasil menghapus pesanan');
        return redirect()->to(base_url('toko/pesanan'));
    }

    public function produk()
    {
        $produk = $this->produkModel->findAll();
        $data = [
            'title' => 'Produk',
            'active' => 'produk',
            'produk' => $produk,
        ];
        return view('toko/produk', $data);
    }

    public function quantity($slug)
    {
        $produk = $this->produkModel->where('slug', $slug)->first();
        $data = [
            'title' => 'Jumlah',
            // 'active' => 'produk',
            'produk' => $produk,
        ];
        return view('toko/quantity', $data);
    }

    public function add_to_cart()
    {
        // $harga = $this->request->getVar('harga_produk');
        $jumlah = $this->request->getVar('jumlah_produk');
        $id_produk = $this->request->getVar('id_produk');
        $cek = $this->cart->select('id_keranjang')->select('jumlah')->where('id_produk', $id_produk)->where('id_user', user_id())->first();
        if ($cek == null) {
            $data = [
                'id_produk'    => $id_produk,
                'id_user'   => user_id(),
                'jumlah'   => $jumlah,
            ];
        } else {
            $data = [
                'id_keranjang'  => $cek->id_keranjang,
                'id_produk'     => $id_produk,
                'id_user'       => user_id(),
                'jumlah'        => $cek->jumlah + $jumlah,
            ];
        }
        // dd($data);

        if ($this->cart->save($data)) {
            $this->session->setFlashdata('success', 'Berhasil menambahkan produk ke keranjang');
        } else {
            $this->session->setFlashdata('error', 'Gagal menambahkan produk ke keranjang');
        }
        return redirect()->to(base_url('toko/produk'));
    }

    public function delete_keranjang($id)
    {
        if ($this->cart->delete($id)) {
            $this->session->setFlashdata('success', 'Berhasil menghapus produk dari keranjang');
        } else {
            $this->session->setFlashdata('error', 'Gagal menghapus produk dari keranjang');
        }
        return redirect()->to(base_url('toko/keranjang'));
    }

    public function clear_cart()
    {
        if ($this->cart->where('id_user', user_id())->delete()) {
            $this->session->setFlashdata('success', 'Berhasil menghapus produk dari keranjang');
        } else {
            $this->session->setFlashdata('error', 'Gagal menghapus produk dari keranjang');
        }
        return redirect()->to(base_url('toko/keranjang'));
    }

    public function edit_keranjang($id)
    {
        $produk = $this->cart->where('id_keranjang', $id)->join('produk', 'keranjang.id_produk=produk.id_produk')->first();
        $data = [
            'title' => 'Edit Keranjang',
            'produk' => $produk,
        ];
        return view('toko/edit_keranjang', $data);
    }

    public function update_keranjang()
    {
        $input = $this->request->getVar();

        $data = [
            'id_keranjang' => $input['id_keranjang'],
            'jumlah' => $input['jumlah_produk'],
        ];

        if (!$this->cart->save($data)) {
            $this->session->setFlashdata('error', 'Gagal mengubah jumlah produk');
            return redirect()->to(base_url('toko/keranjang'));
        }
        $this->session->setFlashdata('success', 'Berhasil mengubah jumlah produk');
        return redirect()->to(base_url('toko/keranjang'));
    }

    public function keranjang()
    {
        $isi = $this->cart->join('produk', 'produk.id_produk=keranjang.id_produk')
            ->where('id_user', user_id())->findAll();

        // dd($isi);
        $data = [
            'title' => 'Keranjang',
            'keranjang' => $isi,
        ];
        return view('toko/keranjang', $data);
    }

    public function cekout()
    {
        $keranjang = $this->request->getVar('produk');

        $id_toko = $this->tokoModel->select('id_toko')->where('id_users', user_id())->first();
        $pesanan = [
            'receipt'   => uniqid(),
            'id_toko'   => $id_toko->id_toko,
            'id_status' => 1,
            'tanggal'   => date('Y-m-d'),
        ];
        $this->pesanModel->insert($pesanan);
        $pesanan = $this->pesanModel->selectMax('id_pesanan', 'id_pesanan')->where('id_toko', $id_toko->id_toko)->first();
        // dd($pesanan);
        foreach ($keranjang as $k) {
            $list = $this->cart->where('id_keranjang', $k)->first();
            $produk = $this->produkModel->select('harga')->select('stok')->where('id_produk', $list->id_produk)->first();

            $data = [
                'id_pesanan' => $pesanan->id_pesanan,
                'id_produk' => $list->id_produk,
                'jumlah_produk' => $list->jumlah,
                'total_harga' => ($produk->harga * $list->jumlah),
            ];
            if ($this->listPesananModel->insert($data)) {
                $this->cart->delete($k);
                $stok = [
                    'id_produk' => $list->id_produk,
                    'stok' =>  $produk->stok - $list->jumlah,
                ];
                $this->produkModel->save($stok);
            } else {
                $this->session->setFlashdata('error', 'Gagal membuat pesanan');
                return redirect()->to(base_url('toko/keranjang'));
            }
        }

        $this->session->setFlashdata('success', 'Berhasil membuat pesanan');
        return redirect()->to(base_url('toko/pesanan'));
    }
}
