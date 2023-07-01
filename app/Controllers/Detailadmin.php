<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    protected $config;

    public function __construct()
    {
        $this->config     = config('App'); // bo settings

    }
    public function index()
    {
        $data['config'] = $this->config;

        $data = ["title" => "Detailadmin"];
        return view('Detailadmin', $data);
    }
}
