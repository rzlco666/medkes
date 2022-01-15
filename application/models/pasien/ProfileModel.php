<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileModel extends CI_Model
{

	public function get_profile()
	{
		$id_pasien = $this->session->id_pasien;
		return $this->db->get_where('pasien', ['id_pasien' => $id_pasien]);
	}

	public function get_single_dokter($id_dokter)
	{
		return $this->db->get_where('dokter', ['id_dokter' => $id_dokter]);
	}

	public function update_pasien($id_pasien, $data)
	{
		$this->db->where('id_pasien', $id_pasien);
		return $this->db->update('pasien', $data);
	}
}
