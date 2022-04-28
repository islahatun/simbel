<?php defined('BASEPATH') or exit('No direct script access allowed');

class MStatusPemesanan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*');
        $this->db->from("dm_status_pemesanan");
        $this->db->order_by("id_status", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_status_pemesanan", ["id_status" => $id])->row();
    }
}
