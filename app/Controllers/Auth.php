<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
	protected $userModel;
	public function __construct()
	{
		$this->userModel = new UserModel();
	}

	public function login()
	{
		$data = [
			'title' => 'Buku Ku | Login'
		];

		if (session()->get('logged_in') && (session()->get('level') == "admin")) {
			return redirect()->to('/admin');
		} else if (session()->get('logged_in') && (session()->get('level') == "user")) {
			return redirect()->to('/');
		} else {
			return view('auth/login', $data);
		}
	}

	public function authenticate()
	{
		$inputUsername = $this->request->getVar('username');
		$inputPassword = $this->request->getVar('password');
		$user = $this->userModel->getUser($inputUsername);

		if ($user) {
			$password = $user['password'];
			if ($inputPassword == $password) {
				if ($user['level'] == "admin") {
					$dataSession = [
						'id' => $user['id'],
						'username' => $user['username'],
						'email' => $user['email'],
						'nama' => $user['nama'],
						'notelepon' => $user['notelepon'],
						'level' => "admin",
						'logged_in' => TRUE
					];
					session()->set($dataSession);
					return redirect()->to('/admin');
				} else if ($user['level'] == "user") {
					$dataSession = [
						'id' => $user['id'],
						'username' => $user['username'],
						'email' => $user['email'],
						'nama' => $user['nama'],
						'notelepon' => $user['notelepon'],
						'level' => "user",
						'logged_in' => TRUE
					];
					session()->set($dataSession);
					return redirect()->to('/');
				}
			} else {
				session()->setFlashdata('pesan', 'Password salah.');
				return redirect()->to('/login');
			}
		} else {
			session()->setFlashdata('pesan', 'Username tidak ditemukan.');
			return redirect()->to('/login');
		}
	}

	public function register()
	{
		$data = [
			'title' => 'Buku Ku | Register'
		];

		if (session()->get('logged_in') && (session()->get('level') == "admin")) {
			return redirect()->to('/admin');
		} else if (session()->get('logged_in') && (session()->get('level') == "user")) {
			return redirect()->to('/');
		} else {
			return view('auth/register', $data);
		}
	}

	public function createAcc()
	{
		if ($this->request->getVar('password') == $this->request->getVar('repassword')) {
			$this->userModel->save([
				'username' => $this->request->getVar('username'),
				'email' => $this->request->getVar('email'),
				'password' => $this->request->getVar('password'),
				'nama' => $this->request->getVar('nama'),
				'notelepon' => $this->request->getVar('notelepon'),
				'level' => 'user'
			]);
			session()->setFlashdata('pesan', 'Akun telah dibuat, silahkan login.');
			return redirect()->to('/login');
		} else {
			session()->setFlashdata('pesan', 'Password tidak sama.');
			return redirect()->to('/register')->withInput();
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}
}
