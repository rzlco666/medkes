<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/AuthModel', 'AuthModel');
	}

	public function index()
	{
		$this->load->view('admin/pages/auth/login');
	}

	public function registrasi()
	{
		$this->load->view('admin/pages/auth/registrasi');
	}

	public function proses_login()
	{
		if ($this->session->userdata('id_admin')) {
			redirect('admin/kelola/daftar_pasien');
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('admin', ['username' => $username])->row_array();
			if ($user) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'id_admin'   => $user['id_admin'],
						'username_admin'    => $user['username'],
						'nama_admin' => $user['nama_admin'],
					];
					$this->session->set_userdata($data);
					redirect('admin/');
				} else {
					$this->session->set_flashdata('flash', 'Password Salah');
					redirect('admin/auth');
				}
			} else {
				$this->session->set_flashdata('message', 'Akun tidak ditemukan');
				redirect('admin/auth');
			}
		}
	}

	public function proses_registrasi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]', [
			'is_unique' => 'Username yang anda pakai telah terdaftar!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
			'matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Confrim Password', 'required|trim|matches[password]');
		$this->form_validation->set_rules('nama_admin', 'Nama admin', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->registrasi();
		} else {
			$id_admin 	 = $this->AuthModel->id_admin();
			$username    = $this->input->post('username', true);
			$password  	 = $this->input->post('password');
			$nama_admin  = $this->input->post('nama_admin', true);

			$data = [
				'id_admin'   => $id_admin,
				'username' 	  => htmlspecialchars($username),
				'password' 	  => password_hash($password, PASSWORD_DEFAULT),
				'nama_admin' => htmlspecialchars($nama_admin),
			];
			$this->AuthModel->tambah_admin($data);
			$this->session->set_flashdata('flash', 'Akun berhasil dibuat');
			redirect(base_url('admin/auth'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id_admin');
		$this->session->unset_userdata('username_admin');
		$this->session->unset_userdata('nama_admin');
		redirect(base_url('admin/auth'));
	}
}
