<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ObatModel extends CI_Model
{

	public function id_obat()
	{
		$obat = "OBT-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_obat,'OBT-', ''))) as nama
             FROM obat WHERE id_obat LIKE '$obat%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "OBT-" . $id;
		return $id;
	}

	public function get_obat()
	{
		return $this->db->get('obat');
	}

	public function tambah_obat($data)
	{
		return $this->db->insert('obat', $data);
	}
	public function get_pasien()
	{
		$this->db->select('resep.*, pasien.*, pendaftaran_konsultasi.id_konsultasi');
		$this->db->from('resep');
		$this->db->join('pendaftaran_konsultasi', 'pendaftaran_konsultasi.id_konsultasi = resep.id_konsultasi');
		$this->db->join('pasien', 'pasien.id_pasien = pendaftaran_konsultasi.id_pasien');
		$this->db->where('resep.id_admin_apotek', $this->session->id_admin_apotek);
		$this->db->group_by('pendaftaran_konsultasi.id_konsultasi');
		$this->db->order_by('pendaftaran_konsultasi.id_konsultasi', 'asc');
		$query = $this->db->get();
		return $query;
	}

	public function get_resep_konsultasi($id_konsultasi)
	{
		$this->db->select('detail_resep.*, obat.*, resep.*');
		$this->db->from('detail_resep');
		$this->db->join('obat', 'obat.id_obat = detail_resep.id_obat');
		$this->db->join('resep', 'resep.id_resep = detail_resep.id_resep');
		$this->db->where('detail_resep.id_konsultasi', $id_konsultasi);
		$query = $this->db->get();
		return $query;
	}

	public function get_validasi_resep($id_konsultasi)
	{
		return $this->db->get_where('resep', ['id_konsultasi' => $id_konsultasi]);
	}

	public function update_resep($id_konsultasi, $data_centang)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('resep', $data_centang);
	}

	public function delete_obat($id_obat)
	{
		$this->db->where("id_obat", $id_obat);
		$this->db->delete("obat");
		return true;
	}
}
