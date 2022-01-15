<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

	public function id_admin()
	{
		$admin = "ADM-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_admin,'ADM-', ''))) as nama
             FROM admin WHERE id_admin LIKE '$admin%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "ADM-" . $id;
		return $id;
	}

	public function tambah_admin($data)
	{
		return $this->db->insert('admin', $data);
	}
}
