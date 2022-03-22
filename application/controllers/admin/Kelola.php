<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->id_admin) {
			redirect(base_url('admin/auth'));
		}
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('admin/KelolaModel', 'KelolaModel');
		$this->load->model('pasien/AntrianModel', 'AntrianModel');
	}

	public function daftar_pasien()
	{
		$data['pasien'] = $this->KelolaModel->get_pasien()->result();
		$data['jumlah_pasien'] = $this->KelolaModel->get_pasien()->num_rows();
		$data['week_pasien'] = $this->KelolaModel->get_week_pasien()->num_rows();
		$data['month_pasien'] = $this->KelolaModel->get_month_pasien()->num_rows();
		// print_r($data['week_pasien']);
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/daftar-pasien', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function pasien()
	{
		$data['pasien'] = $this->KelolaModel->get_pasien()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/pasien', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function detail_pasien($id_pasien)
	{
		$data['profile'] = $this->KelolaModel->get_detail_pasien($id_pasien)->row();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/detail-pasien', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function dokter()
	{
		$data['dokter'] = $this->KelolaModel->get_dokter()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/dokter', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function detail_dokter($id_dokter)
	{
		$data['profile'] = $this->KelolaModel->get_detail_dokter($id_dokter)->row();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/detail-dokter', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function pembayaran()
	{
		$data['pembayaran'] = $this->KelolaModel->get_pembayaran()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/pembayaran', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function rating()
	{
		$this->db->select('r.id_rating, r.rating, r.feedback, r.id_konsultasi, k.id_pasien, p.nama_pasien, k.id_dokter, d.nama_dokter');
		$this->db->from('rating r');
		$this->db->join('pendaftaran_konsultasi k', 'r.id_konsultasi = k.id_konsultasi');
		$this->db->join('pasien p', 'k.id_pasien = p.id_pasien');
		$this->db->join('dokter d', 'k.id_dokter = d.id_dokter');
		$query = $this->db->get();
		$data['rating'] = $query->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/rating', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function antrian(){
		$data['antrian'] = $this->AntrianModel->get_antrian_all()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/kelola/antrian', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function update_antrian($id_antrian){
		$data = [
			'status' => $this->input->post('status'),
		];
		$this->AntrianModel->update_antrian($id_antrian, $data);
		redirect(base_url('admin/kelola/antrian'));
	}

	public function aktif($id_dokter)
	{
		$data = [
			'status' => 'Aktif'
		];
		$this->KelolaModel->update_status($id_dokter, $data);
		redirect(base_url('admin/kelola/detail_dokter/' . $id_dokter));
	}

	public function non_aktif($id_dokter)
	{
		$data = [
			'status' => 'Tidak aktif'
		];
		$this->KelolaModel->update_status($id_dokter, $data);
		redirect(base_url('admin/kelola/detail_dokter/' . $id_dokter));
	}
}
