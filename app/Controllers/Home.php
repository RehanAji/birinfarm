<?php

namespace App\Controllers;

use App\Models\CoreRedirectModel;
class Home extends BaseController
{
    
	protected $config;

	public function __construct(){
		$this->config 	= config('App'); // bo settings
		
		$this->CoreRedirectModel 	= new CoreRedirectModel();
	}

    public function index(){
        $data['config'] = $this->config;
		$url			= $this->request->getVar("url");

		if ($url) {
			$data_url	= $this->CoreRedirectModel->detailData($url);

			if (!empty($data_url)) {
				return redirect()->to($data_url->url); 
			}
		}
		
		return view('home/index', $data);
    }
}
