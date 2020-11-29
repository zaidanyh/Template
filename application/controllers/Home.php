<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = "Selamat Datang Kopi Saerah";
		$data['whatsapp'] = $this->db->get_where('contacts', ['id_contact' => "1"])->row_array();
		$this->load->view('homepage/index', $data);
	}

	public function about()
	{
		$data['title'] = "Tentang Kami | Kopi Saerah";
		$data['data'] = $this->db->get_where('blogs', ['id' => "6"])->row_array();
		$data['whatsapp'] = $this->db->get_where('contacts', ['id_contact' => "1"])->row_array();
		$this->load->view('homepage/about', $data);
	}

	public function schedule()
	{
		$data['title'] = "Jadwal kerja Kami | Kopi Saerah";

		$data['schedule'] = $this->db->get('schedules')->result_array();
		$data['whatsapp'] = $this->db->get_where('contacts', ['id_contact' => "1"])->row_array();
		$data['address'] = $this->db->get_where('contacts', ['id_contact' => "4"])->row_array();

		$this->load->view('homepage/jadwal', $data);
	}
}
