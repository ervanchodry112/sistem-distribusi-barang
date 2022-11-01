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
			'pemilik'   => $nama,
			'slug'      => ucwords($nama, '-'),
			'id_users'  => 3,
		];
		$this->db->table('toko')->insert($toko);

		$supir = [
			'id_supir'   => 1,
			'nama_supir' => 'Burhanudin',
			'plat_nomor' => 'B 2562 XX',
			'id_users'   => 4,
		];
		$this->db->table('supir')->insert($supir);
	}
}
