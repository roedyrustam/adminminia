<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin;


class Admin extends BaseController
{
	public function login()
	{
		//

		$data = [];
		return view("admin/v_login", $data);
	}
}
