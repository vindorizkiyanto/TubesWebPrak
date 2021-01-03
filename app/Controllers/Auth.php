<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		$data = [
			'title' => 'Library'
		];
		return view('auth/login', $data);
	}
	public function register()
	{
		$data = [
			'title' => 'Library'
		];
		return view('auth/register', $data);
	}
	public function main()
	{
		$data = [
			'title' => 'Library'
		];
		return view('home/main', $data);
	}
}
