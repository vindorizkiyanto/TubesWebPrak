<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{	$data = [
			'title' => 'Library'
	];
		echo view('template/header',$data);
		echo view('auth/login');
		echo view('template/header');
    }
    public function register()
	{
		$data = [
			'title' => 'Library'
	];
		echo view('template/header',$data);
		echo view('auth/register');
		echo view('template/header');
		
    }
    public function main()
	{
		$data = [
			'title' => 'Library'
	];
		echo view('template/mainheader',$data);
		echo view('auth/main');
		echo view('auth/content');
		echo view('template/mainheader');
		
	}
}