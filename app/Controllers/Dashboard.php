<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $config;

	public function __construct(){
		$this->config 	= config('App'); // bo settings

	}
    public function index()
    {
        $data['config'] = $this->config;

        $data = ["title" => "ini dashboard"];
		return view('Dashboard/index', $data);
    }
}
