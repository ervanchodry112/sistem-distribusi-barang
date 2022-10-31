<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AddTransaction extends Seeder
{
    public function run()
    {
        $status = [
            [
                'id_status'     => 1,
                'nama_status'   => 'Pesanan Diterima',
            ],
            [
                'id_status'     => 2,
                'nama_status'   => 'Pesanan Diproses',
            ],
            [
                'id_status'     => 3,
                'nama_status'   => 'Pesanan Dikirim',
            ],
            [
                'id_status'     => 4,
                'nama_status'   => 'Pesanan Selesai',
            ],
            [
                'id_status'     => 5,
                'nama_status'   => 'Pesanan Dibatalkan',
            ],
        ];

        $this->db->table('status')->insertBatch($status);

        $pesanan = [
            'id_pesanan' => 1,
            'id_toko'   => 1,
            'id_status' => 1,
            'tanggal'   => Time::now('Asia/Jakarta'),
        ];

        $this->db->table('pesanan')->insert($pesanan);

        $list = [
            [
                'id_pesanan'    => 1,
                'id_produk'    => 3,
                'jumlah_produk' => 12,
                'total_harga'   => 36000,
            ],
            [
                'id_pesanan'    => 1,
                'id_produk'    => 5,
                'jumlah_produk' => 8,
                'total_harga'   => 8000,
            ],
        ];
        $this->db->table('list_pesanan')->insertBatch($list);
    }
}
