<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->id_admin) {
			redirect(base_url('admin/auth'));
		}
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('tgl_indo');
		$this->load->model('apotek/ObatModel', 'ObatModel');
	}

	public function index()
	{
		$data['obat'] = $this->ObatModel->get_obat()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/obat/obat', $data);
		$this->load->view('admin/layouts/footer');
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
		redirect(base_url('admin/obat'));
	}

	public function proses_hapus_obat($id_obat)
	{
		$this->ObatModel->delete_obat($id_obat);
		redirect(base_url('admin/obat'));
	}

}
