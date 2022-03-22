<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Antrian extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->id_pasien) {
			redirect(base_url('pasien/auth'));
		}
		$this->load->helper('string');
		$this->load->model('pasien/DokterModel', 'DokterModel');
		$this->load->model('pasien/KonsultasiModel', 'KonsultasiModel');
		$this->load->model('pasien/AntrianModel', 'AntrianModel');
		$this->load->model('pasien/PembayaranModel', 'PembayaranModel');
		$this->load->model('pasien/ProfileModel', 'ProfileModel');
	}

	public function index()
	{
		$data['title'] = 'Antrian';
		$data['poli'] = $this->db->get('poli')->result();

		$pasien = $this->ProfileModel->get_profile($this->session->id_pasien)->row();
		$pasienCount = count(get_object_vars($pasien));
		$pasienCheck = [];
		foreach ($pasien as $dataPasien) {
			if ($dataPasien != NULL) {
				array_push($pasienCheck, $dataPasien);
			}
		}
		if (count($pasienCheck) == $pasienCount) {
			$this->load->view('pasien/layouts/header', $data);
			$this->load->view('pasien/pages/tambah-antri', $data);
			$this->load->view('pasien/layouts/footer');
		} else {
			$this->session->set_flashdata('validasi', 'Terisi Sebelum Melakukan Konsultasi');
			redirect(base_url('pasien/profile'));
		}
	}

	public function tambah_antri()
	{
		$this->validasi_tambah_janji();
		if ($this->form_validation->run() == FALSE) {
			redirect(base_url('pasien/antrian'));
		} else {
			$id_antrian = $this->AntrianModel->id_antrian();
			$id_pasien = $this->session->id_pasien;
			$tanggal = date('Y-m-d');
			$id_poli = $this->input->post('id_poli');

			$data_antrian = [
				'id_antrian' => $id_antrian,
				'id_pasien' => $id_pasien,
				'tanggal' => $tanggal,
				'id_poli' => $id_poli,
			];

			$this->AntrianModel->tambah_antrian($data_antrian);
			redirect(base_url('pasien/antrian/jadwal'));

		}
	}

	public function validasi_tambah_janji()
	{
		$this->form_validation->set_rules('id_poli', 'Poli', 'required');
	}

	public function jadwal()
	{
		$data['title'] = 'Jadwal';
		$data['antrian'] = $this->AntrianModel->get_antrian()->result();
		$this->load->view('pasien/layouts/header', $data);
		$data['antrian'] != NULL ? $this->load->view('pasien/pages/jadwal_antri', $data) : $this->load->view('pasien/pages/jadwal-antri-kosong');
		$this->load->view('pasien/layouts/footer');
	}

	public function cetak_nomor($id_antrian)
	{
		$data['invoice'] = $this->AntrianModel->invoice($id_antrian)->row();
		$this->load->view('pasien/pages/in_antrian', $data);
	}

}
