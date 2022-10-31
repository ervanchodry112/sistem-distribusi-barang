<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AddProduk extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_produk'     => 1,
                'nama_produk'   => 'Chitato',
                'harga'         => 8900,
                'stok'          => 80,
                'slug'          => 'chitato',
                'created_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_produk'     => 2,
                'nama_produk'   => 'Teh Pucuk',
                'harga'         => 3500,
                'stok'          => 150,
                'slug'          => 'teh-pucuk',
                'created_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_produk'     => 3,
                'nama_produk'   => 'Akua',
                'harga'         => 3000,
                'stok'          => 708,
                'slug'          => 'akua',
                'created_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_produk'     => 4,
                'nama_produk'   => 'Qoqa Qola',
                'harga'         => 6999,
                'stok'          => 57,
                'slug'          => 'qoqa-qola',
                'created_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_produk'     => 5,
                'nama_produk'   => 'Gogomi',
                'harga'         => 1000,
                'stok'          => 35,
                'slug'          => 'gogomi',
                'created_at'    => Time::now('Asia/Jakarta'),
            ],
        ];

        $this->db->table('produk')->insertBatch($data);
    }
}
