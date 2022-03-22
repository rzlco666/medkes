<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AntrianModel extends CI_Model
{

	public function id_antrian()
	{
		$konsultasi = "ANT-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_antrian,'ANT-', ''))) as nama
             FROM antrian WHERE id_antrian LIKE '$konsultasi%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "ANT-" . $id;
		return $id;
	}

	public function tambah_antrian($data)
	{
		return $this->db->insert('antrian', $data);
	}

	public function get_antrian()
	{
		$id_pasien = $this->session->id_pasien;
		$this->db->select('a.id_antrian, a.tanggal, a.id_poli, p.nama_poli, a.status, a.id_pasien, pa.nama_pasien');
		$this->db->from('antrian a');
		$this->db->join('poli p', 'a.id_poli = p.id_poli');
		$this->db->join('pasien pa', 'a.id_pasien = pa.id_pasien');
		$this->db->where('a.id_pasien', $id_pasien);
		$query = $this->db->get();
		return $query;
	}

	public function invoice($id_antrian)
	{
		$this->db->select('a.id_antrian, a.tanggal, a.id_poli, p.nama_poli, a.status, a.id_pasien, pa.nama_pasien');
		$this->db->from('antrian a');
		$this->db->join('poli p', 'a.id_poli = p.id_poli');
		$this->db->join('pasien pa', 'a.id_pasien = pa.id_pasien');
		$this->db->where('a.id_antrian', $id_antrian);
		$query = $this->db->get();
		return $query;
	}

	public function get_rekam_medis($id_konsultasi)
	{
		return $this->db->get_where('rekam_medis', ['id_konsultasi' => $id_konsultasi]);
	}

	public function download_diagnosa($no_record)
	{
		$this->db->select('foto_pemeriksaan');
		$this->db->from('rekam_medis');
		$this->db->where('no_record', $no_record);
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

	public function validasi_resep($id_konsultasi)
	{
		$this->db->select('*');
		$this->db->from('resep');
		$this->db->where('id_konsultasi', $id_konsultasi);
		$this->db->group_by('id_konsultasi');
		$this->db->order_by('id_konsultasi', 'asc');
		$query = $this->db->get();
		return $query;
	}

	public function get_reschedule($id_konsultasi)
	{
		return $this->db->get_where('reschedule', ['id_konsultasi' => $id_konsultasi]);
	}

	public function update_resep($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('resep', $data);
	}
	public function get_apotek()
	{
		return $this->db->get('apoteker');
	}
}
