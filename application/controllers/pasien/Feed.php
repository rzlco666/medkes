<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feed extends CI_Controller
{

	public function feed($id)
	{
		$data['title'] = 'Feed';

		$this->load->model('admin/FeedModel', 'FeedModel');
		$data['feed'] = $this->FeedModel->get_feed_by_id($id)->result();
		$this->load->view('pasien/layouts/header', $data);
		$this->load->view('pasien/pages/feed', $data);
		$this->load->view('pasien/layouts/footer');
	}

	public function all()
	{
		$data['title'] = 'Feed List';

		$this->load->model('admin/FeedModel', 'FeedModel');
		$data['feed'] = $this->FeedModel->get_latest_feed_nolim()->result();
		$this->load->view('pasien/layouts/header', $data);
		$this->load->view('pasien/pages/feed-list', $data);
		$this->load->view('pasien/layouts/footer');
	}
}
