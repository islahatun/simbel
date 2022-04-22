<?php defined('BASEPATH') or exit('No direct script access allowed');

class MAturanObat extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('aturan_obat,aturan_obat_name, status');
        $this->db->from("dm_aturan_obat");
        $this->db->where("status", 1);
        $this->db->order_by("aturan_obat_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_aturan_obat", ["aturan_obat" => $id])->row();
    }
}
