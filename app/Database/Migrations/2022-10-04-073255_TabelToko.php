<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelToko extends Migration
{
    public function up()
    {
        //Create Table Toko with id_toko, nama_toko, alamat, pemilik, slug
        $this->forge->addField([
            'id_toko'       => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nama_toko'     => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'alamat'        => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'pemilik'       => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
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
        $this->forge->addKey('id_toko', true);
        $this->forge->createTable('toko');
    }

    public function down()
    {
        $this->forge->dropTable('toko');
    }
}
