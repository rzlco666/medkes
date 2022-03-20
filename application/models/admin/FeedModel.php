<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FeedModel extends CI_Model
{

	public function insert_feed($data)
	{
		return $this->db->insert('feed', $data);
	}

	//update feed
	public function update_feed($id, $data)
	{
		$this->db->where('id_feed', $id);
		return $this->db->update('feed', $data);
	}

	public function get_feed()
	{
		return $this->db->get('feed');
	}

	//get latest feed
	public function get_latest_feed()
	{
		$this->db->order_by('tanggal', 'DESC');
		$this->db->limit(3);
		return $this->db->get('feed');
	}

	public function get_latest_feed_nolim()
	{
		$this->db->order_by('tanggal', 'DESC');
		return $this->db->get('feed');
	}

	public function get_feed_by_id($id)
	{
		$this->db->where('id_feed', $id);
		return $this->db->get('feed');
	}

	//delete feed
	public function delete_feed($id)
	{
		$this->db->where('id_feed', $id);
		$this->db->delete('feed');
	}

}
