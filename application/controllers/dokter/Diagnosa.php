<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->id_dokter) {
			redirect(base_url('dokter/auth'));
		}
		$this->load->helper('tgl_indo');
		$this->load->model('dokter/DiagnosaModel', 'DiagnosaModel');
		$this->load->model('dokter/JadwalModel', 'JadwalModel');
	}

	public function index()
	{
		$data['diagnosa'] = $this->DiagnosaModel->dashboard_diagnosa()->result();
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/data-diagnosa-dashboard', $data);
		$this->load->view('dokter/layouts/footer');
	}

	public function rekam_medis($id_pasien)
	{
		$data['diagnosa'] = $this->DiagnosaModel->daftar_diagnosa($id_pasien)->result();
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/data-diagnosa', $data);
		$this->load->view('dokter/layouts/footer');
	}

	public function input_diagnosa($id_konsultasi)
	{
		$data['diagnosa'] = $this->DiagnosaModel->get_diagnosa($id_konsultasi)->row();
		$data['obat'] = $this->DiagnosaModel->get_obat()->result();
		$data['konsultasi'] = $this->DiagnosaModel->get_resep_konsultasi($id_konsultasi)->result();
		$data['id_konsultasi'] = $id_konsultasi;
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/diagnosa', $data);
		$this->load->view('dokter/layouts/footer');
	}

	public function info_diagnosa($id_konsultasi)
	{
		$data['diagnosa'] = $this->DiagnosaModel->get_diagnosa($id_konsultasi)->row();
		$data['obat'] = $this->DiagnosaModel->get_obat()->result();
		$data['konsultasi'] = $this->DiagnosaModel->get_resep_konsultasi($id_konsultasi)->result();
		$data['id_konsultasi'] = $id_konsultasi;
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/info-diagnosa', $data);
		$this->load->view('dokter/layouts/footer');
	}

	public function edit_diagnosa($id_konsultasi)
	{
		$data['diagnosa'] = $this->DiagnosaModel->get_diagnosa($id_konsultasi)->row();
		$data['obat'] = $this->DiagnosaModel->get_obat()->result();
		$data['konsultasi'] = $this->DiagnosaModel->get_resep_konsultasi($id_konsultasi)->result();
		$data['id_konsultasi'] = $id_konsultasi;
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/edit-diagnosa', $data);
		$this->load->view('dokter/layouts/footer');
	}

	public function proses_tambah_diagnosa($id_konsultasi)
	{
		$this->form_validation->set_rules('no_rekam_medis', 'Nomor Rekam Medis', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		if (empty($_FILES['foto_pemeriksaan']['name'])) {
			$this->form_validation->set_rules('foto_pemeriksaan', 'Foto Pemeriksaan', 'required');
		}
		if ($this->form_validation->run() ==  false) {
			$this->input_diagnosa($id_konsultasi);
		} else {
			$upload_image = $_FILES['foto_pemeriksaan']['name'];
			if ($upload_image) {
				$config['upload_path']    = './uploads/diagnosa/';
				$config['allowed_types']  = 'jpg|jpeg|png';
				$config['max_size']       = 5000;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('foto_pemeriksaan')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('foto_pemeriksaan', $new_image);
				} else {
					$this->session->set_flashdata('gagal', 'File yang anda upload tidak mendukung');
					redirect(base_url('dokter/diagnosa/input_diagnosa/' . $id_konsultasi));
				}
			}
			$no_rekam_medis 	= $this->input->post('no_rekam_medis');
			$diagnosa    		= $this->input->post('diagnosa');
			$tanggal      		= $this->input->post('tanggal');
			$jam 	  			= $this->input->post('jam');
			$foto_pemeriksaan 	= $this->upload->data('file_name');
			$data = [
				'no_rekam_medis' 	=> $no_rekam_medis,
				'diagnosa' 		 	=> $diagnosa,
				'tanggal' 		 	=> $tanggal,
				'jam'			 	=> $jam,
				'foto_pemeriksaan'	=> $foto_pemeriksaan
			];
			$this->DiagnosaModel->update_diagnosa($id_konsultasi, $data);
			$this->session->set_flashdata('flash', 'Berhasil Di Update');
			redirect(base_url('dokter/diagnosa/edit_diagnosa/' . $id_konsultasi));
		}
	}

	public function proses_edit_diagnosa($id_konsultasi)
	{
		$data['diagnosa'] = $this->DiagnosaModel->get_diagnosa($id_konsultasi)->row_array();
		$this->form_validation->set_rules('no_rekam_medis', 'Nomor Rekam Medis', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		if ($this->form_validation->run() ==  false) {
			$this->edit_diagnosa($id_konsultasi);
		} else {
			// jika ada gambar
			$upload_image = $_FILES['foto_pemeriksaan']['name'];
			if ($upload_image) {
				$config['upload_path']    = './uploads/diagnosa/';
				$config['allowed_types']  = 'jpg|jpeg|png';
				$config['max_size']       = 5000;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('foto_pemeriksaan')) {
					$old_image = $data['diagnosa']['foto_pemeriksaan'];
					if ($old_image != '' || $old_image != NULL) {
						unlink(FCPATH . 'uploads/diagnosa/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('foto_pemeriksaan', $new_image);
				} else {
					$this->session->set_flashdata('gagal', 'File yang anda upload tidak mendukung');
					redirect(base_url('dokter/diagnosa/edit_diagnosa/' . $id_konsultasi));
				}
			}
			$no_rekam_medis 	= $this->input->post('no_rekam_medis');
			$diagnosa    		= $this->input->post('diagnosa');
			$tanggal      		= $this->input->post('tanggal');
			$jam 	  			= $this->input->post('jam');
			$data = [
				'no_rekam_medis' 	=> $no_rekam_medis,
				'diagnosa' 		 	=> $diagnosa,
				'tanggal' 		 	=> $tanggal,
				'jam'			 	=> $jam,
			];
			$this->DiagnosaModel->update_diagnosa($id_konsultasi, $data);
			$this->session->set_flashdata('flash', 'Berhasil Di Update');
			redirect(base_url('dokter/diagnosa/edit_diagnosa/' . $id_konsultasi));
		}
	}

	public function proses_tambah_resep($id_konsultasi)
	{
		$this->form_validation->set_rules('id_obat', 'Nama Obat', 'required');
		$this->form_validation->set_rules('cara_pakai', 'Cara Pakai', 'required');
		$this->form_validation->set_rules('dosis', 'Dosis', 'required');
		$this->form_validation->set_rules('no_record', 'Nomor Record', 'required');
		if ($this->form_validation->run() ==  false) {
			$this->edit_diagnosa($id_konsultasi);
		} else {
			$id_resep = $this->DiagnosaModel->get_resep_id($id_konsultasi)->row();
			$id_dp = $this->JadwalModel->get_dokter($id_konsultasi)->row();
			$id_obat = $this->input->post('id_obat');
			$cara_pakai = $this->input->post('cara_pakai');
			$dosis = $this->input->post('dosis');
			$no_record = $this->input->post('no_record');
			$data_obat = [
				'cara_pakai' => $cara_pakai,
				'dosis' => $dosis,
				'no_record' => $no_record,
				'id_obat' => $id_obat,
				'id_resep' => $id_resep->id_resep,
				'id_pasien' => $id_dp->id_pasien,
				'id_konsultasi' => $id_konsultasi,
			];
			$this->DiagnosaModel->tambah_detail_resep($data_obat);
			redirect(base_url('dokter/diagnosa/edit_diagnosa/' . $id_konsultasi));
		}
	}

	public function hapus_resep($id_konsultasi)
	{
		$id_obat = $this->input->post('id_obat');
		$id_resep = $this->input->post('id_resep');
		$this->db->delete('detail_resep', ['id_konsultasi' => $id_konsultasi, 'id_obat' => $id_obat, 'id_resep' => $id_resep]);
		redirect(base_url('dokter/diagnosa/edit_diagnosa/' . $id_konsultasi));
	}
}
