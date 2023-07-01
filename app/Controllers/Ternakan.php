<?php

namespace App\Controllers;

use App\Models\BrTernakModel;
use App\Models\BrTernakRingModel;

class Ternakan extends BaseController
{

	protected $config;
	protected $BrTernakModel;
	protected $BrTernakRingModel;

	public function __construct()
	{
		$this->config 	= config('App'); // bo settings

		$this->BrTernakModel 		= new BrTernakModel();
		$this->BrTernakRingModel 	= new BrTernakRingModel();
	}

	public function index()
	{
		$data['config'] = $this->config;

		return view('ternakan/index', $data);
	}


	public function kenari()
	{
		$data['config'] = $this->config;
		$data['data']	= $this->BrTernakModel->allDataKenari();
		return view('ternakan/kenari', $data);
	}

	public function detail($id)
	{
		$data['config'] = $this->config;
		$data['data']	= $this->BrTernakModel->detailData($id);

		// MASDebugPree($data['data'],1);



		if ($data['data']->id_jenis == 1) {
			$data['data_kerabat']	= $this->BrTernakModel->allDataKenariKerabat($id);
			$data['data_info']		= $this->BrTernakModel->allDataKenariInfo($id);

			$data['data_keturunan'] = $this->BrTernakModel->allDataKeturunan($id);
		}

		return view('ternakan/detail', $data);
	}

	public function cari()
	{

		$data['config'] = $this->config;
		$ring	= $this->request->getVar("ring");

		if (!empty($ring)) {
			$data['ring'] 	= $ring;
			$data['data']	= $this->BrTernakRingModel->allDataRing($ring);
			return view('ternakan/list_cari', $data);
		} else {
			return redirect()->to("/");
		}
		MASDebugPree($ring, 1);
	}
	public function create()
	{
		$data = [
			'title' => 'Form Tambah Data Produk'
		];
		return view('Be_Produk/create');
	}
	public function getAyam()
	{
		return view('ternakan/ayam');
	}
}
