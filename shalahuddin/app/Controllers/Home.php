<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'nama' => 'Muhammad  Shalahuddin'
		];
		return view('welcome_message', $data);
	}

	//--------------------------------------------------------------------

}
