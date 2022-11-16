<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Cart;
// use CodeIgniterCart\Cart;

class Toko extends BaseController
{
    protected $pesanModel;
    protected $produkModel;
    protected $cart;

    public function __construct()
    {
        $this->pesanModel = new \App\Models\Pesanan();
        $this->produkModel = new \App\Models\Produk();
        $this->cart = new Cart();
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

    public function create_pesanan()
    {
        $produk = $this->produkModel->findAll();
        $data = [
            'title' => 'Tambah Pesanan',
            'produk' => $produk,
        ];
        return view('toko/tambah_pesanan', $data);
    }

    public function delete_pesanan($id)
    {
        $this->pesanModel->delete($id);
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
}
