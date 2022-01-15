<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->id_dokter) {
			redirect(base_url('dokter/auth'));
		}
		$this->load->helper('tgl_indo');
		$this->load->model('dokter/JadwalModel', 'JadwalModel');
		$this->load->model('dokter/DiagnosaModel', 'DiagnosaModel');
	}

	public function index()
	{
		$data['jadwal'] = $this->JadwalModel->get_single_jadwal()->result();
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/jadwal/jadwal', $data);
		$this->load->view('dokter/layouts/footer');
	}

	public function proses_tambah_jadwal()
	{
		$id_jadwal 	  = $this->JadwalModel->id_jadwal();
		$id_dokter    = $this->session->id_dokter;
		$tanggal      = $this->input->post('tanggal');
		$jam_mulai 	  = $this->input->post('jam_mulai');
		$jam_berakhir = $this->input->post('jam_berakhir');

		$data = [
			'id_jadwal' 	=> $id_jadwal,
			'id_dokter' 	=> $id_dokter,
			'tanggal' 		=> $tanggal,
			'jam_mulai'		=> $jam_mulai,
			'jam_berakhir'	=> $jam_berakhir,
		];
		$this->JadwalModel->tambah_jadwal($data);
		redirect(base_url('dokter/jadwal'));
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
		redirect(base_url('dokter/jadwal'));
	}

	public function proses_reschedule_jadwal($id_konsultasi)
	{
		$id_reschedule  = $this->JadwalModel->id_reschedule();
		$tgl_reschedule = $this->input->post('tanggal_reschedule');
		$jam_reschedule = $this->input->post('jam_reschedule');

		$data = [
			'status' => 'Ubah jadwal',
		];
		$data_reschedule = [
			'id_reschedule' => $id_reschedule,
			'id_konsultasi' => $id_konsultasi,
			'jam_reschedule' => $jam_reschedule,
			'tgl_reschedule' => $tgl_reschedule,
		];

		$this->JadwalModel->update_status($id_konsultasi, $data);
		$this->JadwalModel->tambah_reschedule($data_reschedule);
		redirect(base_url('dokter/jadwal/konsultasi'));
	}

	public function konsultasi()
	{
		$data['konsultasi'] = $this->JadwalModel->get_konsultasi()->result();
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/jadwal/konsultasi', $data);
		$this->load->view('dokter/layouts/footer');
	}

	public function konsultasi_selesai($id_konsultasi)
	{
		$id_resep = $this->DiagnosaModel->id_resep();
		$no_record = $this->DiagnosaModel->id_rekam_medis();
		$id_dp     = $this->JadwalModel->get_dokter($id_konsultasi)->row();
		$data = [
			'status' => 'Selesai',
		];
		$data_diagnosa = [
			'no_record'     => $no_record,
			'id_dokter'     => 	$id_dp->id_dokter,
			'id_pasien' 	=> 	$id_dp->id_pasien,
			'id_konsultasi' => $id_konsultasi,
		];
		$resep = [
			'id_resep' => $id_resep,
			'id_konsultasi' => $id_konsultasi,
		];
		$this->DiagnosaModel->tambah_diagnosa($data_diagnosa);
		$this->DiagnosaModel->tambah_resep($resep);
		$this->JadwalModel->update_status($id_konsultasi, $data);
		redirect(base_url('dokter/jadwal/konsultasi'));
	}
}
