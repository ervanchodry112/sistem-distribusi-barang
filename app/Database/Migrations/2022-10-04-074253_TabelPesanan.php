<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelPesanan extends Migration
{
    public function up()
    {
        //Create Tabel Pesanan with id_pesanan, id_toko, id_list_produk, id_supir, id_status
        $this->forge->addField([
            'id_pesanan'    => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'id_toko'       => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
            ],
            'id_supir'      => [
                'type'              => 'INT',
                'constraint'        => 11,
                'null'          => true,
            ],
            'id_status'     => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
            ],
            'tanggal'       => [
                'type'              => 'DATE',
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
        $this->forge->addPrimaryKey('id_pesanan');

        $this->forge->addKey('id_toko');
        $this->forge->addKey('id_supir');
        $this->forge->addKey('id_status');

        $this->forge->createTable('pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pesanan');
    }
}
