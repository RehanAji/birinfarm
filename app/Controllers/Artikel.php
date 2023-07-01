<?php

namespace App\Controllers;

use App\Models\BrArtikelModel;

class Artikel extends BaseController
{

	protected $config;

	protected $BrArtikelModel;

	public function __construct()
	{
		$this->config 	= config('App'); // bo settings

		$this->BrArtikelModel 	= new BrArtikelModel();
	}

	public function index()
	{
		$data['config'] = $this->config;
		$data['data']	= $this->BrArtikelModel->findAll();

		return view('artikel/index', $data);
	}


	public function detail($id)
	{
		$data['config'] = $this->config;
		$data['data']	= $this->BrArtikelModel->detailData($id);
		$data['data']->foto = img_data('artikel/' . $data['data']->foto);
		$data['dataLatest']	= $this->BrArtikelModel->latestData($id);

		$paramsSosmes = array(
			"title"             => 'Detail ' . $data['data']->nama,
			"desc"              => substr($data['data']->deskripsi, 0, 50),
			"email_address"     => '',
			"url"               => base_url('artikel/detail/' . $id),
			"text"              => $data['data']->nama,
			"bcc_email_address" => '',
			"cc_email_address"  => '',
			"hash_tags"         => '',
			"via"               => '',
		);

		$data['sosmed'] = sosmed($paramsSosmes);

		return view('artikel/detail', $data);
	}
	// 	public function index()
	// 	{
	// 		$brArtikelFileModel = new BrArtikelFileModel();
	// 		$data['files'] = $brArtikelFileModel->allData();

	// 		return view('dashboard', $data);
	// 	}
	// 	public function index()
	// 	{
	// 		$model = new BrArtikelModel();
	// 		$data['data'] = $model->findAll();

	// 		return view('artikel/index', $data);
	// 	}
}
