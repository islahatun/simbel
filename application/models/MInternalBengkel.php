<?php defined('BASEPATH') or exit('No direct script access allowed');

class MInternalBengkel extends CI_Model
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
        $this->db->where("status_login", 2);
        $this->db->order_by("id", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_pengguna", ["id" => $id])->row();
    }

    public function Pemilik()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from("dm_pengguna");
        $this->db->where("status_login", 3);
        $this->db->where('id', $id);
        $this->db->order_by("id", 'ASC');

        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;
    }
}
