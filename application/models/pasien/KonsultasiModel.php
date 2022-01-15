<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KonsultasiModel extends CI_Model
{

	public function id_konsultasi()
	{
		$konsultasi = "KST-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_konsultasi,'KST-', ''))) as nama
             FROM pendaftaran_konsultasi WHERE id_konsultasi LIKE '$konsultasi%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "KST-" . $id;
		return $id;
	}

	public function tambah_konsultasi($data)
	{
		return $this->db->insert('pendaftaran_konsultasi', $data);
	}

	public function get_konsultasi()
	{
		$id_pasien = $this->session->id_pasien;
		$this->db->select('nama_dokter, keahlian, foto,meet, pendaftaran_konsultasi.id_konsultasi, tanggal, jam, pendaftaran_konsultasi.status,pembayaran.*,
		jam_reschedule,tgl_reschedule');
		$this->db->from('pendaftaran_konsultasi');
		$this->db->join('dokter', 'dokter.id_dokter = pendaftaran_konsultasi.id_dokter');
		$this->db->join('pembayaran', 'pembayaran.id_konsultasi = pendaftaran_konsultasi.id_konsultasi');
		$this->db->join('reschedule', 'reschedule.id_konsultasi = pendaftaran_konsultasi.id_konsultasi', 'left');
		$this->db->where('pendaftaran_konsultasi.id_pasien', $id_pasien);
		$query = $this->db->get();
		return $query;
	}

	public function update_status($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('pendaftaran_konsultasi', $data);
	}

	public function invoice($id_konsultasi)
	{
		$this->db->select('tanggal, meet, pendaftaran_konsultasi.id_dokter, keluhan, kode_bayar, nominal, nama_dokter, nama_pasien, pasien.email, pasien.alamat, pasien.no_hp');
		$this->db->from('pendaftaran_konsultasi');
		$this->db->join('dokter', 'dokter.id_dokter = pendaftaran_konsultasi.id_dokter');
		$this->db->join('pasien', 'pasien.id_pasien = pendaftaran_konsultasi.id_pasien');
		$this->db->join('pembayaran', 'pembayaran.id_konsultasi = pendaftaran_konsultasi.id_konsultasi');
		$this->db->where('pendaftaran_konsultasi.id_konsultasi', $id_konsultasi);
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
