<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelolaModel extends CI_Model
{
	public function get_pembayaran()
	{
		$this->db->select('id_pembayaran,nama_pasien,nominal,tgl_pembayaran,pendaftaran_konsultasi.id_konsultasi,foto_pembayaran,status_bayar,tgl_validasi');
		$this->db->from('pendaftaran_konsultasi');
		$this->db->join('pasien', 'pasien.id_pasien = pendaftaran_konsultasi.id_pasien');
		$this->db->join('pembayaran', 'pembayaran.id_konsultasi = pendaftaran_konsultasi.id_konsultasi');
		$this->db->order_by("pendaftaran_konsultasi.id_konsultasi", "DESC");
		$query = $this->db->get();
		return $query;
	}

	public function get_dokter()
	{
		return $this->db->get('dokter');
	}

	public function get_pasien()
	{
		return $this->db->get('pasien');
	}

	public function get_detail_dokter($id_dokter)
	{
		return $this->db->get_where('dokter', ['id_dokter' => $id_dokter]);
	}

	public function get_detail_pasien($id_pasien)
	{
		return $this->db->get_where('pasien', ['id_pasien' => $id_pasien]);
	}

	public function update_status($id_dokter, $data)
	{
		$this->db->where('id_dokter', $id_dokter);
		return $this->db->update('dokter', $data);
	}

	public function get_week_pasien()
	{
		$query = $this->db->query('SELECT * FROM pasien WHERE tgl_buat BETWEEN date_sub(now(),INTERVAL 1 WEEK) and now()');
		return $query;
	}

	public function get_month_pasien()
	{
		$query = $this->db->query('SELECT * FROM pasien WHERE tgl_buat BETWEEN date_sub(now(),INTERVAL 1 MONTH) and now()');
		return $query;
	}
}
