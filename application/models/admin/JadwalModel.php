<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalModel extends CI_Model
{

	public function get_jadwal()
	{
		$this->db->select('id_jadwal,tanggal,jam_mulai,jam_berakhir,nama_dokter,jadwal.id_dokter');
		$this->db->from('jadwal');
		$this->db->join('dokter', 'dokter.id_dokter = jadwal.id_dokter');
		$this->db->group_by('tanggal');
		$query = $this->db->get();
		return $query;
	}

	public function get_konsultasi()
	{
		$this->db->select('nama_pasien, meet, pendaftaran_konsultasi.id_konsultasi, keluhan, foto_keluhan, tanggal, jam, 
		pendaftaran_konsultasi.status,foto_pembayaran,kode_bayar,status_bayar');
		$this->db->from('pendaftaran_konsultasi');
		$this->db->join('pasien', 'pasien.id_pasien = pendaftaran_konsultasi.id_pasien');
		$this->db->join('pembayaran', 'pembayaran.id_konsultasi = pendaftaran_konsultasi.id_konsultasi');
		$this->db->where('pendaftaran_konsultasi.status !=', 'Menunggu');
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

	public function get_pembayaran()
	{
		$query = $this->db->get('pembayaran');
		return $query;
	}

	public function update_status($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('pendaftaran_konsultasi', $data);
	}

	public function update_jadwal($id_jadwal, $data)
	{
		$this->db->where('id_jadwal', $id_jadwal);
		return $this->db->update('jadwal', $data);
	}

	public function update_pembayaran($id_konsultasi, $data)
	{
		$this->db->where('id_konsultasi', $id_konsultasi);
		return $this->db->update('pembayaran', $data);
	}

	public function data_email($id_konsultasi)
	{
		$this->db->select('nama_pasien,email, meet, pendaftaran_konsultasi.id_konsultasi, keluhan, foto_keluhan, tanggal, jam, pendaftaran_konsultasi.status,');
		$this->db->from('pendaftaran_konsultasi');
		$this->db->join('pasien', 'pasien.id_pasien = pendaftaran_konsultasi.id_pasien');
		$this->db->where('pendaftaran_konsultasi.id_konsultasi', $id_konsultasi);
		$query = $this->db->get();
		return $query;
	}
}
