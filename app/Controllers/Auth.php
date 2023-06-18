<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{

    public function index()
    {
        $data = ["title" => "login"];
        return view('auth/index', $data);
    }
    public function register()
    {
        $data = ["title" => "login"];
        return view('auth/register', $data);
    }
}
