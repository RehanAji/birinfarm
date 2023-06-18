<?php

namespace App\Controllers;

class Coming extends BaseController{
    
	protected $config;

	public function __construct(){
		$this->config 	= config('App'); // settings

	}

    public function index($url=null){
        $data['config'] = $this->config;
		$data['url']	= (!empty($url)) ? $url : base_url("/") ; 

		return view('coming', $data);
    }
}
