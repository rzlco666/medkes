<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dokter/AuthModel', 'AuthModel');
	}

	public function index()
	{
		$this->load->view('dokter/pages/auth/login');
	}

	public function registrasi()
	{
		$this->load->view('dokter/pages/auth/registrasi');
	}

	public function proses_login()
	{
		if ($this->session->userdata('id_dokter')) {
			redirect('dokter');
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('dokter', ['username' => $username])->row_array();
			if ($user) {
				if (password_verify($password, $user['password'])) {
					if ($user['status'] === "Aktif") {
						$data = [
							'id_dokter'   => $user['id_dokter'],
							'nama_dokter' => $user['nama_dokter'],
							'foto' 		  => $user['foto'],
						];
						$this->session->set_userdata($data);
						redirect('dokter');
					} else {
						$this->session->set_flashdata('message', 'Akun anda tidak aktif, Harap hubungi admin untuk mengaktifkan kembali!');
						redirect('dokter/auth');
					}
				} else {
					$this->session->set_flashdata('message', 'Password atau username Salah');
					redirect('dokter/auth');
				}
			} else {
				$this->session->set_flashdata('message', 'Password atau username Salah');
				redirect('dokter/auth');
			}
		}
	}

	public function proses_registrasi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[dokter.username]', [
			'is_unique' => 'Username yang anda pakai telah terdaftar!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
			'matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek!'
		]);
		$this->form_validation->set_rules('password2', 'Confrim Password', 'required|trim|matches[password]');
		$this->form_validation->set_rules('nama_dokter', 'Nama dokter', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->registrasi();
		} else {
			$id_dokter 	 = $this->AuthModel->id_dokter();
			$username    = $this->input->post('username', true);
			$password  	 = $this->input->post('password');
			$nama_dokter = $this->input->post('nama_dokter', true);

			$data = [
				'id_dokter'   => $id_dokter,
				'username' 	  => htmlspecialchars($username),
				'password' 	  => password_hash($password, PASSWORD_DEFAULT),
				'nama_dokter' => htmlspecialchars($nama_dokter),
			];
			$this->AuthModel->tambah_dokter($data);
			// $this->session->set_flashdata('flash', 'Akun berhasil dibuat');
			redirect(base_url('dokter/auth'));
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id_dokter');
		$this->session->unset_userdata('nama_dokter');
		$this->session->unset_userdata('foto');
		redirect(base_url('dokter/auth'));
	}
}
