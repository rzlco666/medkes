<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PembayaranModel extends CI_Model
{

	public function id_pembayaran()
	{
		$pembayaran = "PMB-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_pembayaran,'PMB-', ''))) as nama
             FROM pembayaran WHERE id_pembayaran LIKE '$pembayaran%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "PMB-" . $id;
		return $id;
	}

	public function tambah_pembayaran($data)
	{
		return $this->db->insert('pembayaran', $data);
	}

	public function update_pembayaran($id_pembayaran, $data)
	{
		$this->db->where('id_pembayaran', $id_pembayaran);
		return $this->db->update('pembayaran', $data);
	}
}
