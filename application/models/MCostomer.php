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
        $this->db->from("dm_pelanggan");
        // $this->db->where("status", 1);
        $this->db->order_by("id_pelanggan", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_pelanggan", ["id_pelanggan" => $id])->row();
    }
}
