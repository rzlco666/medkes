<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardModel extends CI_Model
{
	public function number_proses($id_dokter)
	{
		return $this->db->get_where('pendaftaran_konsultasi', ['id_dokter' => $id_dokter, 'status' => 'Disetujui']);
	}
	public function number_selesai($id_dokter)
	{
		return $this->db->get_where('pendaftaran_konsultasi', ['id_dokter' => $id_dokter, 'status' => 'Selesai']);
	}

	public function get_2month_konsultasi()
	{
		$id_dokter = $this->session->id_dokter;
		$query = $this->db->query("SELECT * FROM pendaftaran_konsultasi WHERE id_dokter = '$id_dokter' AND tanggal BETWEEN date_sub(now(),INTERVAL 2 MONTH) and now()");
		return $query;
	}

	public function get_1month_konsultasi()
	{
		$id_dokter = $this->session->id_dokter;
		$query = $this->db->query("SELECT * FROM pendaftaran_konsultasi WHERE id_dokter = '$id_dokter' AND tanggal BETWEEN date_sub(now(),INTERVAL 1 MONTH) and now()");
		return $query;
	}

	public function get_3week_konsultasi()
	{
		$id_dokter = $this->session->id_dokter;
		$query = $this->db->query("SELECT * FROM pendaftaran_konsultasi WHERE id_dokter = '$id_dokter' AND tanggal BETWEEN date_sub(now(),INTERVAL 3 WEEK) and now()");
		return $query;
	}
	public function get_2week_konsultasi()
	{
		$id_dokter = $this->session->id_dokter;
		$query = $this->db->query("SELECT * FROM pendaftaran_konsultasi WHERE id_dokter = '$id_dokter' AND tanggal BETWEEN date_sub(now(),INTERVAL 2 WEEK) and now()");
		return $query;
	}
	public function get_1week_konsultasi()
	{
		$id_dokter = $this->session->id_dokter;
		$query = $this->db->query("SELECT * FROM pendaftaran_konsultasi WHERE id_dokter = '$id_dokter' AND tanggal BETWEEN date_sub(now(),INTERVAL 1 WEEK) and now()");
		return $query;
	}



	public function total_pendapatan($id_dokter)
	{
		$this->db->select('nominal');
		$this->db->from('pembayaran');
		$this->db->join('pendaftaran_konsultasi', 'pendaftaran_konsultasi.id_konsultasi = pembayaran.id_konsultasi');
		$this->db->where('pendaftaran_konsultasi.id_dokter', $id_dokter);
		$this->db->where('pendaftaran_konsultasi.status', 'Selesai');
		$query = $this->db->get();
		return $query;
	}
}
