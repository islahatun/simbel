<?php defined('BASEPATH') or exit('No direct script access allowed');

class MCostomer extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*');
        $this->db->from("dm_pengguna");
        $this->db->where("status_login", 1);
        $this->db->order_by("id", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function datalistDetail($id)
    {
        $this->db->select('*,dm_pengguna.nama,dm_status_pemesanan.status_pemesanan,dm_po.nama_barang');
        $this->db->from("trans_pemesanan");
        $this->db->join("dm_pengguna", "dm_pengguna.id = trans_pemesanan.id_pelanggan");
        $this->db->join("dm_po", "dm_po.id_po = trans_pemesanan.id_po");
        $this->db->join("dm_status_pemesanan", "dm_status_pemesanan.id_status = trans_pemesanan.status_pemesanan");
        $this->db->where("trans_pemesanan.id_pelanggan", $id);

        $this->db->order_by("id_pemesanan", 'DESC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_pengguna", ["id" => $id])->row();
    }
}
