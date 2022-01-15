<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

	public function id_dokter()
	{
		$dokter = "DR-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_dokter,'DR-', ''))) as nama
             FROM dokter WHERE id_dokter LIKE '$dokter%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "DR-" . $id;
		return $id;
	}

	public function tambah_dokter($data)
	{
		return $this->db->insert('dokter', $data);
	}
}
