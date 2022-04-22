<?php defined('BASEPATH') or exit('No direct script access allowed');

class MRawatJalan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $where = " tr_pendaftaran.status not in (6, 7 )";
        $this->db->select('tr_pendaftaran.*, dm_pasien.pasien_id, dm_pasien.name, dm_poliklinik.poliklinik_id, dm_poliklinik.poliklinik_name, dm_dokter.id_dokter, dm_dokter.nama_dokter');
        $this->db->from("tr_pendaftaran");
        $this->db->where($where);
        $this->db->join('dm_pasien', 'tr_pendaftaran.pasien_id = dm_pasien.pasien_id');
        $this->db->join('dm_poliklinik', 'tr_pendaftaran.poliklinik_id = dm_poliklinik.poliklinik_id');
        $this->db->join('dm_dokter', 'tr_pendaftaran.id_dokter = dm_dokter.id_dokter');
        $this->db->order_by("id_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    function genCode($first, $char)
    { //kode awal, field kode, nama table dan panjang kode
        $query = $this->db->query("SELECT MAX(RIGHT(id_pendaftaran,3)) as maxID FROM tr_pendaftaran 
                                    WHERE date(NOW()) ");
        $row = $query->row();

        $genKode =  $row->maxID;
        $getCode = (int) $genKode;
        $getCode++;

        $theCode = $first . $char . sprintf("%03s", $getCode);
        return $theCode;
    }

    function listPasien()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('pasien_id, identitas_id, name, tempat_lahir, tgl_lahir, jenis_kelamin, 
        gol_darah, telp, email, telp_lain, nama_lain, 
        pekerjaan_id, prov_id, kab_id, kec_id, alamat, agama_id, pendidikan_id, perkawinan_id,
        date_add, date_modify');
        $this->db->from("dm_pasien");
        $this->db->order_by("name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function cariPasien($id)
    {
        $this->db->select('pasien_id, identitas_id, name, tgl_lahir, jenis_kelamin, alamat');
        $this->db->from('dm_pasien');
        $this->db->where('pasien_id', $id);
        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;
    }

    public function getById($id)
    {
        $this->db->select('tr_pendaftaran.*, dm_pasien.*');
        $this->db->from("tr_pendaftaran");
        $this->db->join('dm_pasien', 'dm_pasien.pasien_id=tr_pendaftaran.pasien_id');
        $this->db->where("tr_pendaftaran.id_pendaftaran", $id);
        $this->db->order_by("tr_pendaftaran.id_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;
    }
}
