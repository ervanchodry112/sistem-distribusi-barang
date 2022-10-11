<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelProduk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk'    => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nama_product'  => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'harga'         => [
                'type'              => 'INT',
                'constraint'        => 12,
            ],
            'stok'          => [
                'type'              => 'INT',
                'constraint'        => 11,
            ],
            'slug'          => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
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
        $this->forge->addKey('id_product', true);
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
