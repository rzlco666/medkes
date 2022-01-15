<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pasien/AuthModel', 'AuthModel');
	}

	public function index()
	{
		if ($this->session->userdata('id_pasien')) {
			redirect('pasien');
		}

		$data['title'] = 'Login';

		$this->load->view('pasien/layouts/header',$data);
		$this->load->view('pasien/pages/login',$data);
		$this->load->view('pasien/layouts/footer');
	}

	public function registrasi()
	{
		if ($this->session->userdata('id_pasien')) {
			redirect('pasien');
		}

		$data['title'] = 'Registrasi';

		$this->load->view('pasien/layouts/header',$data);
		$this->load->view('pasien/pages/registrasi',$data);
		$this->load->view('pasien/layouts/footer');
	}

	public function password_check($str)
	{
		if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
			return TRUE;
		}
		return FALSE;
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|alpha_numeric', [
			'matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek, minimal 8 karakter!',
		]);
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$username = $this->input->post('username', true);
			$password = $this->input->post('password', true);

			$user = $this->db->get_where('pasien', ['username' => $username])->row_array();
			if ($user) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'id_pasien'   => $user['id_pasien'],
						'nama_pasien' => $user['nama_pasien']
					];
					$this->session->set_userdata($data);
					$this->session->set_flashdata('success', 'Selamat datang ' . $this->session->nama_pasien);
					redirect('pasien');
				} else {
					$this->session->set_flashdata('message', 'Pasword Salah');
					$this->index();
				}
			} else {
				$this->session->set_flashdata('message', 'Akun tidak ditemukan');
				$this->index();
			}
		}
	}

	public function proses_registrasi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pasien.username]', [
			'is_unique' => 'Username yang anda pakai telah terdaftar!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|alpha_numeric|callback_password_check', [
			'matches' => 'Password tidak cocok!',
			'min_length' => 'Password terlalu pendek, minimal 8 karakter!',
			'password_check' => 'Password harus berisi angka dan huruf kapital!'
		]);
		$this->form_validation->set_rules('password2', 'Confrim Password', 'required|trim|matches[password]');
		$this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == false) {
			$this->registrasi();
		} else {
			$id_pasien 	 = $this->AuthModel->id_pasien();
			$username    = $this->input->post('username', true);
			$password  	 = $this->input->post('password');
			$email       = $this->input->post('email', true);
			$nama_pasien = $this->input->post('nama_pasien', true);

			$data = [
				'id_pasien'   => $id_pasien,
				'username' 	  => htmlspecialchars($username),
				'password' 	  => password_hash($password, PASSWORD_DEFAULT),
				'email'       => $email,
				'nama_pasien' => htmlspecialchars($nama_pasien),
				'tgl_buat' => date("Y-m-d"),
			];
			$this->AuthModel->tambah_pasien($data);
			$this->session->set_flashdata('flash', 'Akun berhasil dibuat');
			redirect(base_url('pasien/auth'));
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('id_pasien');
		$this->session->unset_userdata('nama_pasien');
		redirect(base_url('pasien'));
	}
}
