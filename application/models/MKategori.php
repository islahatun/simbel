<?php defined('BASEPATH') or exit('No direct script access allowed');

class MKategori extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*');
        $this->db->from("dm_kategori");
        $this->db->order_by("id_kategori", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_kategori", ["id_kategori" => $id])->row();
    }
}
