<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->id_dokter) {
			redirect(base_url('dokter/auth'));
		}

		$this->load->model('dokter/ProfileModel', 'ProfileModel');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['profile'] = $this->ProfileModel->get_profile()->row();
		$this->load->view('dokter/layouts/header');
		$this->load->view('dokter/pages/profile', $data);
		$this->load->view('dokter/layouts/footer');
	}

	public function update_profile()
	{
		$data['user'] = $this->ProfileModel->get_profile()->row_array();
		$this->form_validation->set_rules('nama_dokter', 'Full nama_dokter', 'trim|required');
		if ($this->form_validation->run() ==  false) {
			$this->index();
		} else {
			//jika ada gambar
			$upload_image = $_FILES['foto']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|svg';
				$config['upload_path'] = './uploads/profile';
				$config['max_size']     = '2048';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('foto')) {
					$old_image = $data['user']['foto'];
					if ($old_image != '' || $old_image != NULL) {
						unlink(FCPATH . 'uploads/profile/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('foto', $new_image);
				} else {
					$this->session->set_flashdata('gagal', 'File yang anda upload tidak mendukung');
					redirect(base_url('dokter/profile'));
				}
			}

			$nama_dokter	  = $this->input->post('nama_dokter');
			$username 		  = $this->input->post('username');
			$email 		      = $this->input->post('email');
			$alamat 		  = $this->input->post('alamat');
			$no_telp 		  = $this->input->post('no_telp');
			$str 		      = $this->input->post('str');
			$keahlian 		  = $this->input->post('keahlian');
			$pengalaman_kerja = $this->input->post('pengalaman_kerja');
			$harga 			  = $this->input->post('harga');
			$data = [
				'nama_dokter' 	   => $nama_dokter,
				'username'		   => $username,
				'email'		       => $email,
				'alamat'		   => $alamat,
				'no_telp' 		   => $no_telp,
				'STR' 		       => $str,
				'keahlian' 		   => $keahlian,
				'pengalaman_kerja' => $pengalaman_kerja,
				'harga' 		   => $harga,
			];
			$this->ProfileModel->update_profile($data);
			$this->session->set_flashdata('flash', 'Berhasil Di Update');
			redirect(base_url('dokter/profile'));
		}
	}
}
