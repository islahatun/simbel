<?php defined('BASEPATH') or exit('No direct script access allowed');

class MTenagaKesehatan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('dm_dokter.*, dm_poliklinik.poliklinik_id, dm_poliklinik.poliklinik_name, dm_poliklinik.poliklinik_ket, dm_kec.kec_id, dm_kec.kec_name, dm_kab.kab_id, dm_kab.kab_name, dm_prov.prov_id, dm_prov.prov_name');
        $this->db->from("dm_dokter");
        $this->db->where("dm_dokter.status", 1);
        $this->db->join('dm_poliklinik', 'dm_dokter.poliklinik_id = dm_poliklinik.poliklinik_id');
        $this->db->join('dm_kec', 'dm_dokter.kec_id = dm_kec.kec_id');
        $this->db->join('dm_kab', 'dm_dokter.kab_id = dm_kab.kab_id');
        $this->db->join('dm_prov', 'dm_dokter.prov_id = dm_prov.prov_id');
        $this->db->order_by("nama_dokter", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_dokter", ["id_dokter" => $id])->row();
    }
}
