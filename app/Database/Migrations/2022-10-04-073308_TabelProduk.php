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
                'primary_key'       => true,
                'constraint'        => 11,
                'auto_increment'    => true,
            ],
            'nama_produk'  => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'harga'         => [
                'type'              => 'INT',
                'null'              => false,
                'constraint'        => 12,
            ],
            'stok'          => [
                'type'              => 'INT',
                'null'              => true,
                'constraint'        => 11,
            ],
            'slug'          => [
                'type'              => 'VARCHAR',
                'null'              => false,
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

        $this->forge->addPrimaryKey('id_produk');
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
