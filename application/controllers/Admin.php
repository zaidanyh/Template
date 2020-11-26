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
		$data['title'] = "Dashboard | Saerah Kopi";

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

			$data['title'] = "Daftar Kategori Menu | Saerah Kopi";

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
			$data['title'] = "Daftar Menu | Saerah Kopi";

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
		}
	}

	public function orders()
	{
		$data['title'] = "Pesanan | Saerah Kopi";

		$data['user'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();
	}

	public function history()
	{
		$data['title'] = "Riwayat Data Pesanan | Saerah Kopi";
	}

	public function deletemenu($id)
	{
		$this->db->where('menu_id', $id)->delete('menus');
		$this->session->set_flashdata('message', '<div class="alert 
				alert-info" role="alert">Menu berhasil dihapus</div>');
		redirect('admin/allmenu', 'refresh');
	}

	public function account()
	{
		$data['title'] = "Edit Profile Admin | Saerah Kopi";

		$data['user'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Name', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/adminHeader', $data);
			$this->load->view('admin/account', $data);
			$this->load->view('templates/adminFooter');
		} else {
			$name = htmlspecialchars($this->input->post('name'));
			$email = htmlspecialchars($this->input->post('email'));

			$this->db->set('name', $name);
			$this->db->where('email', $email)->update('users');
			$this->session->set_flashdata('message', '<div class="alert 
				alert-info" role="alert">Akun berhasil diedit</div>');
			redirect('admin', 'refresh');
		}
	}

	public function change_password()
	{
		$data['title'] = "Change Password Admin | Saerah Kopi";

		$data['user'] = $this->db->get_where('users', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]');
		$this->form_validation->set_rules('new_password2', 'Repeat Password', 'required|trim|matches[new_password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/adminHeader', $data);
			$this->load->view('admin/change_password', $data);
			$this->load->view('templates/adminFooter');
		} else {
			$current_password = $this->input->post('current_password', true);
			$new_password = $this->input->post('new_password1', true);

			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert 
				alert-danger" role="alert">Password saat ini salah!</div>');
				redirect('admin/change_password', 'refresh');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert 
					alert-danger" role="alert">Password baru tidak boleh sama dengan password saat ini!</div>');
					redirect('admin/change_password', 'refresh');
				} else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'))->update('users');

					$this->session->set_flashdata('message', '<div class="alert 
					alert-success" role="alert">Password berhasil diubah</div>');
					redirect('admin', 'refresh');
				}
			}
		}
	}
}
