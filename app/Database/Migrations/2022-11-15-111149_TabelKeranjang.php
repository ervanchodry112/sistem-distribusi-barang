<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelKeranjang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_keranjang' => [
                'type' => 'INT',
                'constraint' => 11,
                // 'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_produk' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_produk', false, false);
        $this->forge->addKey('id_user', false, false);
        $this->forge->createTable('keranjang');
    }

    public function down()
    {
        $this->forge->dropTable('keranjang');
    }
}
