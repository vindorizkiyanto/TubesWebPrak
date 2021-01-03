<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Main extends BaseController
{
	protected $bukuModel;

	public function __construct()
	{
		$this->bukuModel = new BukuModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Buku Ku | Home',
			'databuku' => $this->bukuModel->getBuku()
		];

		if (session()->get('logged_in')) {
			return view('pages/home', $data);
		} else {
			return redirect()->to('/login');
		}
	}

	//--------------------------------------------------------------------

}
