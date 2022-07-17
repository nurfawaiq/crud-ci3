<?php
class Home extends CI_Controller {

	public function index()
	{
		$data = array(
				'header' => 'Beranda - CRUD CI3 YukCoding',
				'isi' => "Selamat datang di halaman utama"
			);
		$this->load->view('_header', $data);
		$this->load->view('home');
		$this->load->view('_footer');
	}

}
