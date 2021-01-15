<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\PeminjamanModel;

class Main extends BaseController
{
	protected $bukuModel;

	public function __construct()
	{
		$this->bukuModel = new BukuModel();
		$this->peminjamanModel = new PeminjamanModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Buku Ku | Home',
			'databuku' => $this->bukuModel->getBuku()
		];

		if (session()->get('logged_in') && (session()->get('level') == "admin")) {
			return redirect()->to('/admin');
		} else if (session()->get('logged_in') && (session()->get('level') == "user")) {
			return view('pages/home', $data);
		} else {
			return redirect()->to('/login');
		}
	}

	public function admin()
	{
		$data = [
			'title' => 'Buku Ku | Home',
			'databuku' => $this->bukuModel->getBuku()
		];

		if (session()->get('logged_in') && (session()->get('level') == "admin")) {
			return view('admin/homeadmin', $data);
		} else if (session()->get('logged_in') && (session()->get('level') == "user")) {
			return redirect()->to('/');
		} else {
			return redirect()->to('/login');
		}
	}

	public function adminpeminjamanbuku()
	{
		$data = [
			'title' => 'Buku Ku | Data Peminjam',
		];

		if (session()->get('logged_in') && (session()->get('level') == "admin")) {
			return view('admin/peminjamanbuku', $data);
		} else if (session()->get('logged_in') && (session()->get('level') == "user")) {
			return redirect()->to('/');
		} else {
			return redirect()->to('/login');
		}
	}

	public function adminverifikasipeminjaman()
	{
		$data = [
			'title' => 'Buku Ku | Verifikasi Peminjaman',
		];

		if (session()->get('logged_in') && (session()->get('level') == "admin")) {
			return view('admin/verifikasipeminjaman', $data);
		} else if (session()->get('logged_in') && (session()->get('level') == "user")) {
			return redirect()->to('/');
		} else {
			return redirect()->to('/login');
		}
	}

	public function adminverifikasipengembalian()
	{
		$data = [
			'title' => 'Buku Ku | Verifikasi Peminjaman',
		];

		if (session()->get('logged_in') && (session()->get('level') == "admin")) {
			return view('admin/verifikasipengembalian', $data);
		} else if (session()->get('logged_in') && (session()->get('level') == "user")) {
			return redirect()->to('/');
		} else {
			return redirect()->to('/login');
		}
	}

	public function halamantambahdata()
	{
		$data = [
			'title' => 'Buku Ku | Tambah Data',
			'validation' => \Config\Services::validation()
		];

		if (session()->get('logged_in') && (session()->get('level') == "admin")) {
			return view('admin/tambahdata', $data);
		} else if (session()->get('logged_in') && (session()->get('level') == "user")) {
			return redirect()->to('/');
		} else {
			return redirect()->to('/login');
		}
	}

	public function halamaneditdata($kode_buku)
	{
		$data = [
			'title' => 'Buku Ku | Edit Data',
			'validation' => \Config\Services::validation(),
			'databuku' => $this->bukuModel->getBuku($kode_buku)
		];

		if (session()->get('logged_in') && (session()->get('level') == "admin")) {
			return view('admin/editdata', $data);
		} else if (session()->get('logged_in') && (session()->get('level') == "user")) {
			return redirect()->to('/');
		} else {
			return redirect()->to('/login');
		}
	}

	public function listBukuDipinjam($id_user)
	{
		$data = [
			'title' => 'Buku Ku | Status Buku',
			'datapinjam' => $this->peminjamanModel->getListPinjam($id_user)
		];

		if (session()->get('logged_in') && (session()->get('level') == "admin")) {
			return redirect()->to('/admin');
		} else if (session()->get('logged_in') && (session()->get('level') == "user")) {
			return view('pages/status', $data);
		} else {
			return redirect()->to('/login');
		}
	}
	//--------------------------------------------------------------------

}
