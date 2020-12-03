<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$title['title'] = "Login Admin | Saerah Kopi";

			$this->load->view('login/login', $title);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$result = $this->db->get_where('users', ['email' => $email])->row_array();

		if ($result) {
			if (password_verify($password, $result['password'])) {
				$data = [
					'email' => $result['email'],
				];
				$this->session->set_userdata($data);
				redirect('administrator', 'refresh');
			} else {
				$this->session->set_flashdata('message', '<small><div class="alert alert-danger" 
				role="alert">Password is wrong!</div></small>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<small><div class="alert alert-danger" 
			role="alert">Email isn\'t registered!</div></small>');
			redirect('login');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]', [
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
			'matches' => 'Password don\'t match!'
		]);


		if ($this->form_validation->run() == false) {
			$title['title'] = "Registration | Saerah Kopi";

			$this->load->view('templates/header', $title);
			$this->load->view('login/registration');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			];

			$this->db->insert('users', $data);
			$this->session->set_flashdata('message', '<div class="alert 
			alert-success" role="alert">Your account has been created. Please Login!</div>');
			redirect('login', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<small><div class="alert 
		alert-success" role="alert">You have been Logged out!</div></small>');
		redirect('login', 'refresh');
	}
}
