<?php defined('BASEPATH') or exit('No direct script access allowed');

class MSupplier extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*');
        $this->db->from("dm_supplier");
        $this->db->order_by("supplier_name", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    // public function alamatKec($id)
    // {
    //     $join = "SELECT *,dm_kec.kec_name FROM dm_kec JOIN dm_supplier ON dm_kec.kec_id = dm_supplier.supplier_id WHERE dm_supplier.kec_id";
    //     return $this->db->query($join)->row_array();
    // }

    public function getById($id)
    {
        return $this->db->get_where("dm_supplier", ["supplier_id" => $id])->row();
    }
}
