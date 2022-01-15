<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardModel extends CI_Model
{

	public function get_pasien()
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->group_by('id_pasien');
		$query = $this->db->get();
		return $query;
	}
	public function get_selesai_konsultasi()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran_konsultasi');
		$this->db->where('pendaftaran_konsultasi.status', 'Selesai');
		$query = $this->db->get();
		return $query;
	}

	public function get_proses_konsultasi()
	{
		$this->db->select('*');
		$this->db->from('pendaftaran_konsultasi');
		$this->db->where('pendaftaran_konsultasi.status', 'Disetujui');
		$this->db->where('pendaftaran_konsultasi.status', 'Menunggu');
		$query = $this->db->get();
		return $query;
	}

	public function get_belum_pembayaran()
	{
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->where('status_bayar', 'Belum dibayar');
		$query = $this->db->get();
		return $query;
	}

	public function get_selesai_pembayaran()
	{
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->where('status_bayar', 'Terbayar');
		$query = $this->db->get();
		return $query;
	}

	public function get_total_pembayaran()
	{
		$query = $this->db->query('SELECT SUM(nominal) AS total FROM pembayaran WHERE status_bayar="Terbayar"');
		return $query;
	}
}
