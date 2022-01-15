<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->id_admin) {
			redirect(base_url('admin/auth'));
		}
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('tgl_indo');
		$this->load->model('admin/JadwalModel', 'JadwalModel');
	}

	public function index()
	{
		$data['jadwal'] = $this->JadwalModel->get_jadwal()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/jadwal/jadwal', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function konsultasi()
	{
		$data['konsultasi'] = $this->JadwalModel->get_konsultasi()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/jadwal/konsultasi', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function setujui_konsultasi($id_konsultasi)
	{
		$meet = $this->input->post('meet');
		$data = [
			'meet'   => $meet,
			'status' => 'Disetujui',
		];
		$data_pembayaran = [
			'id_admin' => $this->session->id_admin,
			'tgl_validasi' => date("Y-m-d"),
			'jam_validasi' => date("h:i"),
		];
		$this->JadwalModel->update_status($id_konsultasi, $data);
		$this->JadwalModel->update_pembayaran($id_konsultasi, $data_pembayaran);

		$data_konsultasi['konsultasi'] = $this->JadwalModel->data_email($id_konsultasi)->row();

		$this->load->library('email');
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'helpdoctorcare@gmail.com',
			'smtp_pass' => 'hagaibnuhakam12',
			'mailtype' => 'html',
			'charset'  => 'utf-8',
			'priority' => '1'
		);
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->from('helpdoctorcare@gmail.com', 'Media Kesehatan');

		$this->email->to($data_konsultasi['konsultasi']->email);  // replace it with receiver mail id
		$this->email->subject('Link Meet Konsultasi'); // replace it with relevant subject 

		$body = $this->load->view('pasien/pages/email-konfirmasi', $data_konsultasi, TRUE);
		$this->email->message($body);
		$this->email->send();

		redirect(base_url('admin/kelola/pembayaran'));
	}

	public function proses_update_jadwal($id_jadwal)
	{
		$tanggal      = $this->input->post('tanggal');
		$jam_mulai 	  = $this->input->post('jam_mulai');
		$jam_berakhir = $this->input->post('jam_berakhir');
		$data = [
			'tanggal' 		=> $tanggal,
			'jam_mulai'		=> $jam_mulai,
			'jam_berakhir'	=> $jam_berakhir,
		];
		$this->JadwalModel->update_jadwal($id_jadwal, $data);
		redirect(base_url('admin/jadwal'));
	}
}
