<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MDaftarBarang extends CI_Model
{

	public function datalist()
	{
		date_default_timezone_set('Asia/Jakarta');

		$this->db->select('*');
		$this->db->from("dm_po");
		// $this->db->where("status", '1');
		$this->db->order_by("nama_barang", 'ASC');

		$finalResponse =  $this->db->get()->result_array();
		return $finalResponse;
	}

	public function getById($id)
	{
		return $this->db->get_where("dm_po", ["id_po" => $id])->row_array();
	}
	public function konfirmasi()
	{
		$id = $this->session->userdata['id'];
		$this->db->select('*');
		$this->db->from("trans_pemesanan");
		$this->db->where("id_pelanggan", $id);
		$this->db->order_by("id_pemesanan", 'desc');

		$finalResponse =  $this->db->get_where()->row_array();
		return $finalResponse;
	}
	public function Toko()
	{
		// $id = $this->session->userdata['id'];
		$this->db->select('*');
		$this->db->from("dm_toko");
		// $this->db->where("id_pelanggan", $id);


		$finalResponse =  $this->db->get()->row_array();
		return $finalResponse;
	}
	public function pesanan()
	{
		$id = $this->session->userdata['id'];
		$this->db->select('*,gambar,dm_po.nama_barang');
		$this->db->from("trans_pemesanan");
		$this->db->join('dm_po', 'dm_po.id_po = trans_pemesanan.id_po');
		$this->db->where("id_pelanggan", $id);
		$this->db->where("status_pemesanan", 7);


		$finalResponse =  $this->db->get_where()->result_array();
		return $finalResponse;
	}
	public function beli($id_po)
	{
		$id = $this->session->userdata['id'];
		$this->db->select('*,gambar,dm_po.nama_barang');
		$this->db->from("trans_pemesanan");
		$this->db->join('dm_po', 'dm_po.id_po = trans_pemesanan.id_po');
		$this->db->where("id_pelanggan", $id);
		$this->db->where('trans_pemesanan.id_po', $id_po);
		$this->db->where("status_pemesanan", 5);
		$this->db->order_by('id_pemesanan', 'desc');

		$finalResponse =  $this->db->get_where()->row_array();
		return $finalResponse;
	}
	public function Tracking()
	{
		$id = $this->session->userdata['id'];
		$this->db->select('*,gambar,dm_po.nama_barang, dm_status_pemesanan.status_pemesanan');
		$this->db->from("trans_pemesanan");
		$this->db->join('dm_po', 'dm_po.id_po = trans_pemesanan.id_po');
		$this->db->join('dm_status_pemesanan', 'dm_status_pemesanan.id_status = trans_pemesanan.status_pemesanan');
		$this->db->where("id_pelanggan", $id);
		$this->db->where("trans_pemesanan.status_pemesanan", 6);


		$finalResponse =  $this->db->get_where()->result_array();
		return $finalResponse;
	}
}
