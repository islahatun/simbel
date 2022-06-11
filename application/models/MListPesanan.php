<?php defined('BASEPATH') or exit('No direct script access allowed');

class MListPesanan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('*,dm_pengguna.nama');
        $this->db->from("trans_pemesanan");
        $this->db->join("dm_pengguna","dm_pengguna.id = trans_pemesanan.id_pelanggan ");
        $this->db->order_by("id_pemesanan", 'ASC');

        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        return $this->db->get_where("trans_pemesanan", ["id_pemesanan" => $id])->row();
    }
}
