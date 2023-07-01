<?php

namespace App\Controllers;

use App\Models\CoreRedirectModel;

class Be_Galeri extends BaseController
{

    protected $config;

    public function __construct()
    {
        $this->config     = config('App'); // bo settings

    }

    public function index()
    {
        $data['config'] = $this->config;

        return view('be_galeri/index', $data);
    }
}
