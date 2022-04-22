<?php defined('BASEPATH') or exit('No direct script access allowed');

class MSatuan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('satuan_id, satuan_name, status');
        $this->db->from("dm_satuan");
        $this->db->where("status", 1);
        $this->db->order_by("satuan_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_satuan", ["satuan_id" => $id])->row();
    }
}
