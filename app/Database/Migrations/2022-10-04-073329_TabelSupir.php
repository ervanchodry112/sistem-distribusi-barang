<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelSupir extends Migration
{
    public function up()
    {
        //Create Tabel Supir with id_supir, nama_supir, and plat_nomor
        $this->forge->addField([
            'id_supir'      => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nama_supir'    => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'plat_nomor'    => [
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
        $this->forge->addKey('id_supir', true);
        $this->forge->createTable('supir');
    }

    public function down()
    {
        $this->forge->dropTable('supir');
    }
}
