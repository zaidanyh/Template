<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_Model');
		$this->load->library('form_validation');

		if ($this->session->userdata('email') == null) {
			redirect('login', 'refresh');
		}
	}
	public function index()
	{
		$data['title'] = "Dashboard";

		$data['user'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/adminHeader', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/adminFooter');
	}

	public function category()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');

		if ($this->form_validation->run() == false) {

			$data['title'] = "Daftar Kategori Menu";

			$data['user'] = $this->db->get_where('users', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data['result'] = $this->Admin_Model->getTypeMenu();

			$this->load->view('templates/adminHeader', $data);
			$this->load->view('admin/daftarJenisMenu', $data);
			$this->load->view('templates/adminFooter');
		} else {

			$data = [
				'name' => htmlspecialchars($this->input->post('name', true))
			];

			$this->db->insert('menu_types', $data);
			$this->session->set_flashdata('message', '<div class="alert 
			alert-success" role="alert">Kategori menu berhasil ditambahkan</div>');
			redirect('admin/category', 'refresh');
		}
	}

	public function editcategory()
	{
		$this->form_validation->set_rules('nameCategory', 'Name', 'required|trim');
		if ($this->form_validation->run() == true) {
			$id = $this->input->post('idCategory');
			$data = [
				'name' => htmlspecialchars($this->input->post('nameCategory', true))
			];
			$this->db->where('type_id', $id)->update('menu_types', $data);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('message', '<div class="alert 
					alert-success" role="alert">Menu berhasil diedit</div>');
				redirect('admin/category', 'refresh');
			} else {
				$this->session->set_flashdata('message', '<div class="alert 
					alert-danger" role="alert">Menu gagal diedit</div>');
				redirect('admin/category', 'refresh');
			}
		}
	}

	public function allmenu()
	{
		$this->form_validation->set_rules('nameMenu', 'Name', 'required|trim');
		$this->form_validation->set_rules('priceMenu', 'Price', 'required|trim');
		$this->form_validation->set_rules('typeMenu', 'Type', 'required');

		if ($this->form_validation->run() == false) {
			$data['title'] = "Daftar Menu";

			$data['user'] = $this->db->get_where('users', ['email' =>
			$this->session->userdata('email')])->row_array();

			$data['menu'] = $this->Admin_Model->getMenu();
			$data['type'] = $this->Admin_Model->getTypeMenu();

			$this->load->view('templates/adminHeader', $data);
			$this->load->view('admin/daftarMenu', $data);
			$this->load->view('templates/adminFooter');
		} else {
			$id = $this->input->post('idMenu');
			if ($id != null) {
				$data = [
					'name' => htmlspecialchars($this->input->post('nameMenu', true)),
					'price' => htmlspecialchars($this->input->post('priceMenu', true)),
					'type_id' => htmlspecialchars($this->input->post('typeMenu', true))
				];
				$this->db->where('menu_id', $id)->update('menus', $data);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('message', '<div class="alert 
					alert-success" role="alert">Menu berhasil diedit</div>');
					redirect('admin/allmenu', 'refresh');
				} else {
					$this->session->set_flashdata('message', '<div class="alert 
					alert-danger" role="alert">Menu gagal diedit</div>');
					redirect('admin/allmenu', 'refresh');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert 
				alert-danger" role="alert">Menu gagal diedit</div>');
				redirect('admin/allmenu', 'refresh');
			}
		}
	}

	public function addmenu()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('price', 'Price', 'required|trim');
		$this->form_validation->set_rules('type', 'Type', 'required');

		if ($this->form_validation->run() == true) {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'price' => htmlspecialchars($this->input->post('price', true)),
				'type_id' => $this->input->post('type', true)
			];

			$this->db->insert('menus', $data);
			$this->session->set_flashdata('message', '<div class="alert 
				alert-success" role="alert">Menu baru berhasil ditambahkan</div>');
			redirect('admin/allmenu', 'refresh');
		} else {
			$this->session->set_flashdata('message', '<div class="alert 
				alert-danger" role="alert">Menu gagal ditambahkan</div>');
			redirect('admin/allmenu', 'refresh');
			redirect('admin/allmenu', 'refresh');
		}
	}

	public function orders()
	{
		$data['title'] = "Pesanan";

		$data['user'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();
	}

	public function history()
	{
		$data['title'] = "Riwayat Data Pesanan";
	}

	public function deletemenu($id)
	{
		$this->db->where('menu_id', $id)->delete('menus');
		$this->session->set_flashdata('message', '<div class="alert 
				alert-info" role="alert">Menu berhasil dihapus</div>');
		redirect('admin/allmenu', 'refresh');
	}
}
