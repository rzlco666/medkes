<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom404 extends CI_Controller {

	public function __construct() {

		parent::__construct();

		// load base_url
		$this->load->helper('url');
	}

	public function index(){

		//if session userdata id admin
		if($this->session->userdata('id_admin')){

			//load view admin/custom404
			redirect('admin/');
		}elseif ($this->session->userdata('id_pasien')) {

			//load view user/custom404
			redirect('pasien');
		}elseif ($this->session->userdata('id_dokter')) {

			//load view user/custom404
			redirect('dokter');
		}else{

			//load view user/custom404
			redirect('pasien');
		}
	}

}
