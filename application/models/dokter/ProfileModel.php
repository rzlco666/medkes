<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileModel extends CI_Model
{

	public function get_profile()
	{
		$id_dokter = $this->session->id_dokter;
		return $this->db->get_where('dokter', ['id_dokter' => $id_dokter]);
	}

	public function tambah_dokter($data)
	{
		return $this->db->insert('dokter', $data);
	}

	public function update_profile($data)
	{
		$id_dokter = $this->session->id_dokter;
		$this->db->where('id_dokter', $id_dokter);
		return $this->db->update('dokter', $data);
	}
}
