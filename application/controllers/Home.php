<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = "Selamat Datang Kopi Saerah";
		
		$this->load->view('homepage/index', $data);
	}

	public function about()
	{
		$data['title'] = "Tentang Kami | Kopi Saerah";

		$this->load->view('homepage/about', $data);
	}

	public function schedule()
	{
		$data['title'] = "Jadwal kerja Kami | Kopi Saerah";

		$this->load->view('homepage/jadwal', $data);
	}
}
