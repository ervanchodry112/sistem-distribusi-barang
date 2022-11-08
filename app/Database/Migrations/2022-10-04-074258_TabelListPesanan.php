<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelListPesanan extends Migration
{
    public function up()
    {
        //Create Tabel List pesanan with id_list_pesanan, id_produk, jumlah_produk, and total_harga
        $this->forge->addField([
            'id_list_pesanan'   => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'id_pesanan'   => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
            ],
            'id_produk'         => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
            ],
            'jumlah_produk'     => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'total_harga'       => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'created_at'    => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'updated_at'    => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'deleted_at'    => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id_list_pesanan');
        $this->forge->addKey('id_produk', false, true);
        $this->forge->addKey('id_pesanan', false, false);
        $this->forge->createTable('list_pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('list_pesanan');
    }
}
