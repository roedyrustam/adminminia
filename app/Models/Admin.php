<?php

namespace App\Models;

use CodeIgniter\Database\SQLite3\Table;
use CodeIgniter\Model;

class Admin extends Model
{

	protected $table                = "admin";
	protected $primaryKey           = "email";
	protected $allowedFields        = ['username', 'password', 'nama_lengkap', 'token'];

	// untuk ambildata

	public function getData($parameter)
	{
		$builder = $this->table($this->table);
		$builder->where('username=', $parameter);
		$builder->orWhere('email=', $parameter);
		$query = $builder->get();
		return $query->getRowArray();
	}

	// unutk simpandata 
	public function updateData($data)
	{
		$builder = $this->table($this->table);
		if ($builder->save($data)) {
			return true;
		} else {
			return false;
		}
	}
}
