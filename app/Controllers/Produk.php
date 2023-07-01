<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produk extends BaseController
{
    protected $config;

    public function __construct()
    {
        $this->config     = config('App'); // bo settings

    }
    public function index()
    {
        $data['config'] = $this->config;

        $data = ["title" => "Produk"];
        return view('produk', $data);
    }
    public function index(
        
    )
}
