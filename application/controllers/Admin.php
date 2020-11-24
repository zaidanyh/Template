<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_Model');

		if ($this->session->userdata('email') == null) {
			redirect('login', 'refresh');
		}
	}
	public function index() {
		$data['title'] = "Dashboard";

		$data['user'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/adminHeader', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/adminFooter');
	}

	public function type() {
		$data['title'] = "Daftar Jenis Menu";

		$data['user'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['result'] = $this->Admin_Model->getTypeMenu();

		$this->load->view('templates/adminHeader', $data);
		$this->load->view('admin/daftarJenisMenu', $data);
		$this->load->view('templates/adminFooter');
	}

	public function allmenu() {
		$data['title'] = "Daftar Menu";

		$data['user'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['result'] = $this->Admin_Model->getMenu();

		$this->load->view('templates/adminHeader', $data);
		$this->load->view('admin/daftarMenu', $data);
		$this->load->view('templates/adminFooter');
	}

	public function orders() {
		$data['title'] = "Pesanan";

		$data['user'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();
	}

	public function history() {
		$data['title'] = "Riwayat Data Pesanan";
	}
}
