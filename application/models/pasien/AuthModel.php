<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

	public function id_pasien()
	{
		$pasien = "PSN-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_pasien,'PSN-', ''))) as nama
             FROM pasien WHERE id_pasien LIKE '$pasien%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "PSN-" . $id;
		return $id;
	}

	public function tambah_pasien($data)
	{
		return $this->db->insert('pasien', $data);
	}
}
