<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
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

		$data['obat'] = $this->ObatModel->get_obat()->result();
		$this->load->view('apotek/layouts/header');
		$this->load->view('apotek/pages/obat/obat', $data);
		$this->load->view('apotek/layouts/footer');
	}

	public function proses_tambah_obat()
	{
		$id_obat = $this->ObatModel->id_obat();
		$nama_obat = $this->input->post('nama_obat');
		$data = [
			'id_obat' 	=> $id_obat,
			'nama_obat'	=> $nama_obat,
		];
		$this->ObatModel->tambah_obat($data);
		redirect(base_url('apotek/obat'));
	}
	public function proses_hapus_obat($id_obat)
	{
		$this->ObatModel->delete_obat($id_obat);
		redirect(base_url('apotek/obat'));
	}
}
