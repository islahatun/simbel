<?php defined('BASEPATH') or exit('No direct script access allowed');

class MListPesanan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*,dm_pengguna.nama,dm_status_pemesanan.status_pemesanan,dm_po.nama_barang');
        $this->db->from("trans_pemesanan");
        $this->db->join("dm_pengguna", "dm_pengguna.id = trans_pemesanan.id_pelanggan");
        $this->db->join("dm_po", "dm_po.id_po = trans_pemesanan.id_po");
        $this->db->join("dm_status_pemesanan", "dm_status_pemesanan.id_status = trans_pemesanan.status_pemesanan");

        $this->db->order_by("id_pemesanan", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        $this->db->select('*,dm_pengguna.nama,dm_status_pemesanan.status_pemesanan,dm_status_pemesanan.id_status,dm_po.nama_barang');
        $this->db->from("trans_pemesanan");
        $this->db->join("dm_pengguna", "dm_pengguna.id = trans_pemesanan.id_pelanggan");
        $this->db->join("dm_po", "dm_po.id_po = trans_pemesanan.id_po");
        $this->db->join("dm_status_pemesanan", "dm_status_pemesanan.id_status = trans_pemesanan.status_pemesanan");
        $this->db->where("trans_pemesanan.id_pemesanan", $id);
        $this->db->order_by("id_pemesanan", 'ASC');

        $finalResponse =  $this->db->get_where()->row_array();
        return $finalResponse;
        // return $this->db->get_where("trans_pemesanan", ["id_pemesanan" => $id])->row();
    }

    public function datalistPemesanan()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*,dm_pengguna.nama,dm_status_pemesanan.status_pemesanan,dm_po.nama_barang');
        $this->db->from("trans_pemesanan");
        $this->db->join("dm_pengguna", "dm_pengguna.id = trans_pemesanan.id_pelanggan");
        $this->db->join("dm_po", "dm_po.id_po = trans_pemesanan.id_po");
        $this->db->join("dm_status_pemesanan", "dm_status_pemesanan.id_status = trans_pemesanan.status_pemesanan");
        $this->db->where("trans_pemesanan.status_pemesanan", 6);

        $this->db->order_by("id_pemesanan", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }
    public function kadaluarsa()
    {
        $this->db->where('status_pemesanan', 5);
        $this->db->where('tanggal_pemesanan <', date('Y-m-d'));
        $this->db->delete('trans_pemesanan');
    }
}
