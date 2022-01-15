<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DokterModel extends CI_Model
{
	public function get_dokter()
	{
		return $this->db->get_where('dokter', ['status' => "Aktif"]);
	}

	public function get_single_dokter($id_dokter)
	{
		return $this->db->get_where('dokter', ['id_dokter' => $id_dokter]);
	}
	public function get_jadwal_dokter($id_dokter)
	{
		$date = date("Y-m-d");
		$this->db->select('tanggal, jam_mulai, jam_berakhir');
		$this->db->from('jadwal');
		$this->db->join('dokter', 'dokter.id_dokter = jadwal.id_dokter');
		$this->db->where('jadwal.id_dokter', $id_dokter);
		$this->db->where('tanggal >=', $date);
		$this->db->group_by('tanggal');
		$query = $this->db->get();
		return $query;
	}
}
