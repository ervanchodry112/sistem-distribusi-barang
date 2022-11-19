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
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
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
        $data = [
            'id_produk'    => $id_produk,
            'id_user'   => user_id(),
            'jumlah'   => $jumlah,
        ];
        // dd($data);

        if ($this->cart->insert($data)) {
            $this->session->setFlashdata('success', 'Berhasil menambahkan produk ke keranjang');
        } else {
            $this->session->setFlashdata('error', 'Gagal menambahkan produk ke keranjang');
        }
        return redirect()->to(base_url('toko/produk'));
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
            
            'id_toko'   => $id_toko->id_toko,
            'id_status' => 1,
            'tanggal'   => date('Y-m-d'),
        ];
        $this->pesanModel->insert($pesanan);
        $pesanan = $this->pesanModel->selectMax('id_pesanan', 'id_pesanan')->where('id_toko', $id_toko->id_toko)->first();
        // dd($pesanan);
        foreach ($keranjang as $k) {
            $list = $this->cart->where('id_keranjang', $k)->first();
            $produk = $this->produkModel->select('harga')->where('id_produk', $list->id_produk)->first();

            $data = [
                'id_pesanan' => $pesanan->id_pesanan,
                'id_produk' => $list->id_produk,
                'jumlah_produk' => $list->jumlah,
                'total_harga' => ($produk->harga * $list->jumlah),
            ];
            if ($this->listPesananModel->insert($data)) {
                $this->cart->delete($k);
            } else {
                $this->session->setFlashdata('error', 'Gagal membuat pesanan');
                return redirect()->to(base_url('toko/keranjang'));
            }
        }

        $this->session->setFlashdata('success', 'Berhasil membuat pesanan');
        return redirect()->to(base_url('toko/pesanan'));
    }
}
