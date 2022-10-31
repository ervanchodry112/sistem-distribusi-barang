<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddUsers extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed(1256);
        $data = [
            [
                'id' => 1,
                'email' => 'admin@email.com',
                'username' => 'admin',
                'password_hash' => password_hash('123456', PASSWORD_DEFAULT),
            ],
            [
                'id' => 2,
                'email' => 'gudang@email.com',
                'username' => 'gudang',
                'password_hash' => password_hash('123456', PASSWORD_DEFAULT),
            ],
            [
                'id' => 3,
                'email' => 'indo@april.com',
                'username' => 'indoapril',
                'password_hash' => password_hash('123456', PASSWORD_DEFAULT),
            ],
            [
                'id' => 4,
                'email' => 'burhan@udin.com',
                'username' => 'burhanudin',
                'password_hash' => password_hash('123456', PASSWORD_DEFAULT),
            ],

        ];
        $this->db->table('users')->insertBatch($data);

        $nama = $faker->name;
        $toko = [
            'id_toko'   => 1,
            'nama_toko' => 'Indoapril',
            'alamat'    => $faker->address,
            'pemilik'   => $nama,
            'slug'      => ucwords($nama, '-'),
            'id_users'  => 3,
        ];
        $this->db->table('toko')->insert($toko);

        $supir = [
            'id_supir'   => 1,
            'nama_supir' => 'Burhanudin',
            'alamat'     => $faker->address,
            'plat_nomor' => 'B 2562 XX',
            'id_users'   => 4,
        ];
        $this->db->table('supir')->insert($supir);

        $auth_group = [
            [
                'group_id'  => 1,
                'user_id'   => 1,
            ],
            [
                'group_id'  => 2,
                'user_id'   => 2,
            ],
            [
                'group_id'  => 3,
                'user_id'   => 3,
            ],
            [
                'group_id'  => 4,
                'user_id'   => 4,
            ],
            [
                'group_id'  => 5,
                'user_id'   => 5,
            ],
        ];
        $this->db->table('auth_groups_user')->insertBatch($auth_group);
    }
}
