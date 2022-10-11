<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelStatus extends Migration
{
    public function up()
    {
        //Create Table Status with id_status, nama_status
        $this->forge->addField([
            'id_status'     => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'nama_status'   => [
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
        $this->forge->addKey('id_status', true);
        $this->forge->createTable('status');
    }

    public function down()
    {
        $this->forge->dropTable('status');
    }
}
