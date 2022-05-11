<?php defined('BASEPATH') or exit('No direct script access allowed');

class MKurir extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*');
        $this->db->from("dm_kurir");
        // $this->db->where("status", '1');
        $this->db->order_by("nama_kurir", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_kurir", ["id_kurir" => $id])->row();
    }
}
