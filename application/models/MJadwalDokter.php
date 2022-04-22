<?php defined('BASEPATH') or exit('No direct script access allowed');

class MJadwalDokter extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('dm_dokter.*, dm_poliklinik.poliklinik_id, dm_poliklinik.poliklinik_name, dm_poliklinik.poliklinik_ket');
        $this->db->from("dm_dokter");
        $this->db->where("dm_dokter.status", 1);
        $this->db->join('dm_poliklinik', 'dm_dokter.poliklinik_id = dm_poliklinik.poliklinik_id');
        $this->db->order_by("nama_dokter", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        $this->db->select('dm_dokter.*, dm_poliklinik.poliklinik_id, dm_poliklinik.poliklinik_name, dm_poliklinik.poliklinik_ket');
        $this->db->from("dm_dokter");
        $this->db->join('dm_poliklinik', 'dm_poliklinik.poliklinik_id = dm_dokter.poliklinik_id');
        $this->db->where("id_dokter", $id);
        $this->db->order_by("id_dokter", 'ASC');

        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;
        // return $this->db->get_where("dm_dokter", ["id_dokter" => $id])->row();
    }
}
