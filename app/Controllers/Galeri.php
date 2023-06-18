<?php

namespace App\Controllers;

use App\Models\BrGaleriModel;
class Galeri extends BaseController
{
    
	protected $config;

	public function __construct(){
		$this->config 	= config('App'); // settings

		$this->BrGaleriModel 	= new BrGaleriModel();
	}

    public function index(){
        $data['config'] = $this->config;
		$data['data']	= $this->BrGaleriModel->allData();

		// echo '<pre>';
		// print_r($data['data']);
		// echo '</pre>';
		// die();
		
		return view('galeri/index', $data);
    }
}
