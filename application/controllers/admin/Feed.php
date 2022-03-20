<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feed extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->id_admin) {
			redirect(base_url('admin/auth'));
		}
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('tgl_indo');
		$this->load->model('admin/FeedModel', 'FeedModel');
	}

	public function index()
	{
		$data['feed'] = $this->FeedModel->get_feed()->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/feed/feed', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function proses_tambah_feed()
	{
		if (empty($_FILES['foto']['name'])) {
			$this->form_validation->set_rules('foto', 'Foto Feed', 'required');
		}
		//upload file codeigniter save database
		$config['upload_path'] = './uploads/feed/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 2048;
		$config['remove_space'] = TRUE;
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'feed-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		$this->load->library('upload', $config); // Load konfigurasi uploadnya

		if ($this->upload->do_upload('foto')) { // Lakukan upload dan Cek jika proses upload berhasil
			//save file name to database
			$upload_data = array('uploads' => $this->upload->data());
			$image_name = $upload_data['uploads']['file_name'];
			$data = array(
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'foto' => $image_name,
				'id_admin' => $this->session->id_admin,
			);
			$this->FeedModel->insert_feed($data);
			redirect(base_url('admin/feed'));
		} else {
			//if upload failed
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', $error['error']);
			redirect(base_url('admin/feed'));
		}
	}

	//edit feed
	public function edit_feed($id)
	{
		$data['feed'] = $this->FeedModel->get_feed_by_id($id)->result();
		$this->load->view('admin/layouts/header');
		$this->load->view('admin/pages/feed/edit_feed', $data);
		$this->load->view('admin/layouts/footer');
	}

	//update feed process
	public function proses_update_feed($id)
	{
		if (empty($_FILES['foto']['name'])) {
			$data = [
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
			];
			$this->FeedModel->update_feed($id, $data);
			redirect(base_url('admin/feed'));
		}
		//upload file codeigniter save database
		$config['upload_path'] = './uploads/feed/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 2048;
		$config['remove_space'] = TRUE;
		$config['overwrite'] = TRUE;
		$config['file_name'] = 'feed-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		$this->load->library('upload', $config); // Load konfigurasi uploadnya

		if ($this->upload->do_upload('foto')) { // Lakukan upload dan Cek jika proses upload berhasil
			//save file name to database
			$upload_data = array('uploads' => $this->upload->data());
			$image_name = $upload_data['uploads']['file_name'];
			$data = array(
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'foto' => $image_name,
				'id_admin' => $this->session->id_admin,
			);
			$this->FeedModel->update_feed($id, $data);
			redirect(base_url('admin/feed'));
		} else {
			//if upload failed
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', $error['error']);
			redirect(base_url('admin/feed'));
		}
	}

	//function delete feed
	public function delete_feed($id)
	{
		$this->FeedModel->delete_feed($id);
		redirect(base_url('admin/feed'));
	}

}
