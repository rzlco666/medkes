<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->id_admin) {
			redirect(base_url('admin/auth'));
		}
		$this->load->model('admin/DashboardModel', 'DashboardModel');
	}

	public function index()
	{
		$data['pasien'] = $this->DashboardModel->get_pasien()->num_rows();
		$data['selesai_konsultasi'] = $this->DashboardModel->get_selesai_konsultasi()->num_rows();
		$data['proses_konsultasi'] = $this->DashboardModel->get_proses_konsultasi()->num_rows();
		$data['belum_pembayaran'] = $this->DashboardModel->get_belum_pembayaran()->num_rows();
		$data['selesai_pembayaran'] = $this->DashboardModel->get_selesai_pembayaran()->num_rows();
		$data['total_pembayaran'] = $this->DashboardModel->get_total_pembayaran()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/dashboard', $data);
		$this->load->view('admin/layouts/footer');
	}
}
