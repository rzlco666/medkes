<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->id_admin_apotek) {
			redirect(base_url('apotek/auth'));
		}
		$this->load->model('apotek/ObatModel', 'ObatModel');
	}

	public function index()
	{
		$data['pasien'] = $this->ObatModel->get_pasien()->result();
		$this->load->view('apotek/layouts/header');
		$this->load->view('apotek/pages/dashboard', $data);
		$this->load->view('apotek/layouts/footer');
	}

	public function tebus_resep($id_konsultasi)
	{
		$data['konsultasi'] = $this->ObatModel->get_resep_konsultasi($id_konsultasi)->result();
		if (!$data['konsultasi']) {
			$this->session->set_flashdata('tebus', 'Pasien belum melakukan tebus obat');
			redirect(base_url('apotek/'));
		}
		$data['pasien'] = $this->ObatModel->get_validasi_resep($id_konsultasi)->row();
		$data['id_konsultasi'] = $id_konsultasi;
		$this->load->view('apotek/layouts/header');
		$this->load->view('apotek/pages/resep_konsultasi', $data);
		$this->load->view('apotek/layouts/footer');
	}

	public function proses_tebus_resep($id_konsultasi)
	{
		$data_centang = [
			'tgl_centang' => date("Y-m-d"),
			'jam_centang' => date("H:i:s"),
			'id_admin_apotek' => $this->session->id_admin_apotek,
		];
		$this->ObatModel->update_resep($id_konsultasi, $data_centang);
		redirect(base_url('apotek'));
	}
}
