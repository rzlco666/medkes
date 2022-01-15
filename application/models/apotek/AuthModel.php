<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

	public function id_admin_apotek()
	{
		$admin_apotek = "ADMP-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_admin_apotek,'ADMP-', ''))) as nama
             FROM apoteker WHERE id_admin_apotek LIKE '$admin_apotek%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "ADMP-" . $id;
		return $id;
	}

	public function tambah_admin_apotek($data)
	{
		return $this->db->insert('apoteker', $data);
	}
}
