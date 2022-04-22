<?php defined('BASEPATH') or exit('No direct script access allowed');

class MPelayanan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('id_pelayanan, nama_pelayanan, harga,status,sarana,bph,alat,tenaga_kesehatan');
        $this->db->from("dm_pelayanan");
        $this->db->where("status", '1');
        $this->db->order_by("nama_pelayanan", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_pelayanan", ["id_pelayanan" => $id])->row();
    }
}
