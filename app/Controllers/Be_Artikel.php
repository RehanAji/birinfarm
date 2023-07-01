<?php

namespace App\Controllers;

use App\Models\BrArtikelModel

class Be_Artikel extends BaseController
{

    protected $config;

    public function __construct()
    {
        $this->config     = config('App'); // bo settings

    }

    public function create()
    {
        $data['config'] = $this->config;

        return view('be_artikel/create', $data);
    }
    public function index()
    {
        $model = new BrArtikelModel();
        $data['data'] = $model->findAll();

        return view('artikel/index', $data);
    }
}
