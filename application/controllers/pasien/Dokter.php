<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pasien/DokterModel', 'DokterModel');
	}

	public function index()
	{
		$data['title'] = 'Dokter';
		$data['dokter'] = $this->DokterModel->get_dokter()->result();
		$this->load->view('pasien/layouts/header', $data);
		$this->load->view('pasien/pages/dokter', $data);
		$this->load->view('pasien/layouts/footer');
	}

	public function detail_dokter($id_dokter)
	{
		$data['dokter'] = $this->DokterModel->get_single_dokter($id_dokter)->row();
		$data['jadwal'] = $this->DokterModel->get_jadwal_dokter($id_dokter)->result();
		$data['title'] = 'Dokter';
		$this->load->view('pasien/layouts/header', $data);
		$this->load->view('pasien/pages/detail-dokter', $data);
		$this->load->view('pasien/layouts/footer');
	}
}
