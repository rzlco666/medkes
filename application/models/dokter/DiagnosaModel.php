<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DiagnosaModel extends CI_Model
{

	public function id_rekam_medis()
	{
		$rekam_medis = "RC-";
		$q     = "SELECT MAX(TRIM(REPLACE(no_record,'RC-', ''))) as nama
             FROM rekam_medis WHERE no_record LIKE '$rekam_medis%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "RC-" . $id;
		return $id;
	}

	public function id_resep()
	{
		$resep = "RSP-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_resep,'RSP-', ''))) as nama
	         FROM resep WHERE id_resep LIKE '$resep%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "RSP-" . $id;
		return $id;
	}

	public function dashboard_diagnosa()
	{
		$id_dokter = $this->session->id_dokter;
		$this->db->select('nama_pasien, pasien.id_pasien, email, no_hp');
		$this->db->from('rekam_medis');
		$this->db->join('pasien', 'pasien.id_pasien = rekam_medis.id_pasien');
		$this->db->join('pendaftaran_konsultasi', 'pendaftaran_konsultasi.id_konsultasi = rekam_medis.id_konsultasi');
		$this->db->where('pendaftaran_konsultasi.id_dokter', $id_dokter);
		$this->db->where('pendaftaran_konsultasi.status', 'Selesai');
		$this->db->group_by("pasien.id_pasien");
		$this->db->order_by("rekam_medis.tanggal", "DESC");
		$query = $this->db->get();
		return $query;
	}

	public function daftar_diagnosa($id_pasien)
	{
		$id_dokter = $this->session->id_dokter;
		$this->db->select('nama_pasien, pendaftaran_konsultasi.id_konsultasi, no_record, rekam_medis.tanggal, foto_pemeriksaan');
		$this->db->from('rekam_medis');
		$this->db->join('pasien', 'pasien.id_pasien = rekam_medis.id_pasien');
		$this->db->join('pendaftaran_konsultasi', 'pendaftaran_konsultasi.id_konsultasi = rekam_medis.id_konsultasi');
		$this->db->where('pendaftaran_konsultasi.id_dokter', $id_dokter);
		$this->db->where('pasien.id_pasien', $id_pasien);
		$this->db->where('pendaftaran_konsultasi.status', 'Selesai');
		$this->db->order_by("rekam_medis.tanggal", "DESC");
		$query = $this->db->get();
		return $query;
	}

	public function get_diagnosa($id_konsultasi)
	{
		return $this->db->get_where('rekam_medis', ['id_konsultasi' => $id_konsultasi]);
	}

	public function get_resep_id($id_konsultasi)
	{
		return $this->db->get_where('resep', ['id_konsultasi' => $id_konsultasi]);
	}

	public function tambah_diagnosa($data)
	{
		return $this->db->insert('rekam_medis', $data);
	}
	public function tambah_resep($data)
	{
		return $this->db->insert('resep', $data);
	}

	public function tambah_detail_resep($data)
	{
		return $this->db->insert('detail_resep', $data);
	}

	public function update_resep($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('resep', $data);
	}

	public function update_diagnosa($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('rekam_medis', $data);
	}

	public function update_resep_obat($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('detail_resep', $data);
	}

	public function get_obat()
	{
		return $this->db->get('obat');
	}

	public function get_resep()
	{
		return $this->db->get('resep');
	}

	public function get_resep_konsultasi($id_konsultasi)
	{
		$this->db->select('detail_resep.*, obat.*');
		$this->db->from('detail_resep');
		$this->db->join('obat', 'obat.id_obat = detail_resep.id_obat');
		$this->db->where('detail_resep.id_konsultasi', $id_konsultasi);
		$query = $this->db->get();
		return $query;
	}
}
