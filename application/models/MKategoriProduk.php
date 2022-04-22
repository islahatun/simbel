<?php defined('BASEPATH') or exit('No direct script access allowed');

class MKategoriProduk extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('jenis_obat_id, jenis_obat_name, status');
        $this->db->from("dm_satuan_obat");
        $this->db->where("status", 1);
        $this->db->order_by("jenis_obat_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_satuan_obat", ["jenis_obat_id" => $id])->row();
    }
}
