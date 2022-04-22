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

        $this->db->select('dm_supplier.*, dm_kec.kec_id, dm_kec.kec_name, dm_kab.kab_id, dm_kab.kab_name, dm_prov.prov_id, dm_prov.prov_name');
        $this->db->from("dm_supplier");
        $this->db->where("dm_supplier.status", 1);
        $this->db->join('dm_kec', 'dm_supplier.kec_id = dm_kec.kec_id');
        $this->db->join('dm_kab', 'dm_supplier.kab_id = dm_kab.kab_id');
        $this->db->join('dm_prov', 'dm_supplier.prov_id = dm_prov.prov_id');
        $this->db->order_by("supplier_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function alamatKec($id)
    {
        $join = "SELECT *,dm_kec.kec_name FROM dm_kec JOIN dm_supplier ON dm_kec.kec_id = dm_supplier.supplier_id WHERE dm_supplier.kec_id";
        return $this->db->query($join)->row_array();
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_supplier", ["supplier_id" => $id])->row();
    }
}
