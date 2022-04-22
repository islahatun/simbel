<?php defined('BASEPATH') or exit('No direct script access allowed');

class MObat extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('id_obat, nama_obat, kode_obat, dosis, dosis_name, jenis_obat_name, satuan_name, stock_minimal, stock, harga_pokok, harga_resep, harga_nonresep, status');
        $this->db->from("dm_obat");
        $this->db->where("status", 1);
        $this->db->order_by("nama_obat", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("dm_obat", ["id_obat" => $id])->row();
    }
}
