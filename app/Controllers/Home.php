<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Portfolio | Dede Nurhadi Putra'
		];
		return view('home/index', $data);
	}
}
