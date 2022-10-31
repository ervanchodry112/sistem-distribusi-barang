<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddGroup extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'superadmin',
                'description' => 'Superadmin'
            ],
            [
                'id' => 2,
                'name' => 'gudang',
                'description' => 'Gudang'
            ],
            [
                'id' => 3,
                'name' => 'toko',
                'description' => 'Toko'
            ],
            [
                'id' => 4,
                'name' => 'supir',
                'description' => 'Supir'
            ],
        ];
        $this->db->table('auth_groups')->insertBatch($data);
    }
}
