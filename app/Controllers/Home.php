<?php

namespace App\Controllers;

use App\Models\CoreRedirectModel;

class Home extends BaseController
{

	protected $config;

	public function __construct()
	{
		$this->config 	= config('App'); // bo settings

		$this->CoreRedirectModel 	= new CoreRedirectModel();
	}

	public function index()
	{
		$data['config'] = $this->config;

		return view('home/index', $data);
	}
}
