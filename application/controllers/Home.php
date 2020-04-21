<?php
class Home extends CI_Controller {

	public function index()
	{
		$data = array(
				'header' => 'Halaman Utama',
				'isi' => "Selamat datang di halaman utama"
			);
		$this->load->view('_header', $data);
		$this->load->view('home');
		$this->load->view('_footer');
	}

}
