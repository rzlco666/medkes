<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalModel extends CI_Model
{

	public function id_jadwal()
	{
		$jadwal = "JDW-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_jadwal,'JDW-', ''))) as nama
             FROM jadwal WHERE id_jadwal LIKE '$jadwal%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "JDW-" . $id;
		return $id;
	}
	public function id_reschedule()
	{
		$reschedule = "RSC-";
		$q     = "SELECT MAX(TRIM(REPLACE(id_reschedule,'RSC-', ''))) as nama
             FROM reschedule WHERE id_reschedule LIKE '$reschedule%'";
		$baris = $this->db->query($q);
		$akhir = $baris->row()->nama;
		$akhir++;
		$id    = str_pad($akhir, 3, "0", STR_PAD_LEFT);
		$id    = "RSC-" . $id;
		return $id;
	}

	public function tambah_jadwal($data)
	{
		return $this->db->insert('jadwal', $data);
	}

	public function update_status($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('pendaftaran_konsultasi', $data);
	}

	public function tambah_reschedule($data)
	{
		return $this->db->insert('reschedule', $data);
	}

	public function update_jadwal($id_jadwal, $data)
	{
		$this->db->where('id_jadwal', $id_jadwal);
		return $this->db->update('jadwal', $data);
	}

	public function get_single_jadwal()
	{
		$id_dokter = $this->session->id_dokter;
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->where('id_dokter', $id_dokter);
		$this->db->group_by('tanggal');
		$this->db->order_by("tanggal", "DESC");
		$query = $this->db->get();
		return $query;
	}

	public function get_konsultasi()
	{
		$id_dokter = $this->session->id_dokter;
		$this->db->select('nama_pasien, meet, pendaftaran_konsultasi.id_konsultasi, keluhan, foto_keluhan, tanggal, jam, pendaftaran_konsultasi.status,');
		$this->db->from('pendaftaran_konsultasi');
		$this->db->join('pasien', 'pasien.id_pasien = pendaftaran_konsultasi.id_pasien');
		$this->db->where('pendaftaran_konsultasi.id_dokter', $id_dokter);
		$this->db->where('pendaftaran_konsultasi.status !=', 'Menunggu');
		$this->db->order_by("tanggal", "DESC");
		$query = $this->db->get();
		return $query;
	}

	public function get_dokter($id_konsultasi)
	{
		$this->db->select('id_dokter, id_pasien');
		$this->db->from('pendaftaran_konsultasi');
		$this->db->where('id_konsultasi', $id_konsultasi);
		$query = $this->db->get();
		return $query;
	}
}
