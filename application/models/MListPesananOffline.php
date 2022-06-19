<?php defined('BASEPATH') or exit('No direct script access allowed');

class MListPesananOffline extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*,dm_status_pemesanan.status_pemesanan,dm_po.nama_barang');
        $this->db->from("trans_pemesanan_offline");
        $this->db->where('trans_pemesanan_offline.status_pemesanan', '3');
        $this->db->join("dm_status_pemesanan", "dm_status_pemesanan.id_status = trans_pemesanan_offline.status_pemesanan");
        $this->db->join("dm_po", "dm_po.id_po = trans_pemesanan_offline.id_po");
        $this->db->order_by("id_pemesanan", 'ASC');


        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("trans_pemesanan_offline", ["id_pemesanan" => $id])->row();
    }
    public function datalistDetail($id)
    {
        $this->db->select('*');
        $this->db->from("trans_pemesanan_offline");
        $this->db->where("id_pelanggan", $id);;
        $this->db->order_by("id_pelanggan", 'ASC');
        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }
    public function datalistRow()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*,dm_pengguna.nama,dm_status_pemesanan.status_pemesanan');
        $this->db->from("trans_pemesanan");
        $this->db->join("dm_pengguna", "dm_pengguna.id = trans_pemesanan.id_pelanggan");
        $this->db->join("dm_status_pemesanan", "dm_status_pemesanan.id_status = trans_pemesanan.status_pemesanan");
        $this->db->group_by("id_pelanggan");
        $this->db->order_by("id_pemesanan", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }
}
