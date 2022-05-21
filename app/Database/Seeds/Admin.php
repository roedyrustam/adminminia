<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
	public function run()
	{
		//
		$data = [
			'username' => 'admin',
			'password' => password_hash('cobasaja', PASSWORD_DEFAULT),
			'nama_lengkap' => 'Roedy Rustam',
			'email' => 'roedyrustam.id@gmail.com',

		];
		$this->db->table('admin')->insert($data);
	}
}
