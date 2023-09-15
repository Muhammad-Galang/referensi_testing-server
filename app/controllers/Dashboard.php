<?php

class Dashboard extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/Login');
			exit;
		}
	} 
	public function index()
	{
		$data['title'] = 'Halaman Home';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('dashboard/index', $data);
		$this->view('templates/footer');
		
	}
}