<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dashboard';

		$this->load->model('pasien/DokterModel', 'DokterModel');
		$this->load->model('admin/FeedModel', 'FeedModel');
		$data['dokter'] = $this->DokterModel->get_dokter()->result();
		$data['feed'] = $this->FeedModel->get_latest_feed()->result();
		$this->load->view('pasien/layouts/header', $data);
		$this->load->view('pasien/pages/home', $data);
		$this->load->view('pasien/layouts/footer');
	}
}
