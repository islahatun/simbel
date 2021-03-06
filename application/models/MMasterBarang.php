<?php defined('BASEPATH') or exit('No direct script access allowed');

class MMasterBarang extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*,dm_kategori.nama_kategori');
        $this->db->from("dm_po");
        $this->db->join("dm_kategori", 'dm_kategori.id_kategori = dm_po.id_kategori');
        $this->db->order_by("nama_barang", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {

        $this->db->select('*,dm_kategori.nama_kategori');
        $this->db->from("dm_po");
        $this->db->join("dm_kategori", 'dm_kategori.id_kategori = dm_po.id_kategori');
        $this->db->where('id_po', $id);
        $this->db->order_by("nama_barang", 'ASC');

        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;

        // return $this->db->get_where("dm_po", ["id_po" => $id])->row();
    }
    public function kategori()
    {
        $this->db->select('*');
        $this->db->from("dm_kategori");
        // $this->db->where("status", '1');
        $this->db->order_by("id_kategori", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }
}
