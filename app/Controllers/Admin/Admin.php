<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function login()
	{
		//
		$data = [];
		return view("admin/v_login", $data);
	}
}
