<?php defined('BASEPATH') or exit('No direct script access allowed');

class MFarmasi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('id_pendaftaran,tr_pendaftaran.pasien_id,dm_pasien.jenis_kelamin,name,nama_dokter,poliklinik_name,tanggal_pendaftaran,tr_pendaftaran.tgl_lahir,jenis_pasien,tr_pendaftaran.status');
        $this->db->from("tr_pendaftaran");
        $this->db->join('dm_dokter', 'dm_dokter.id_dokter = tr_pendaftaran.id_dokter');
        $this->db->join('dm_pasien', 'dm_pasien.pasien_id = tr_pendaftaran.pasien_id');
        $this->db->join('dm_poliklinik', 'dm_poliklinik.poliklinik_id = tr_pendaftaran.poliklinik_id');
        $this->db->where("tr_pendaftaran.status", 4);
        //$this->db->where(is_null('sts'));
        $this->db->order_by("id_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function getById($id)
    {
        $this->db->select('id_pendaftaran,name, identitas_id, poliklinik_name, nama_dokter, dm_pasien.pasien_id,dm_pasien.alamat,dm_pasien.tgl_lahir, tanggal_pendaftaran, dm_pasien.jenis_kelamin, jenis_pasien, tr_pendaftaran.status');
        $this->db->from("tr_pendaftaran");
        $this->db->join('dm_pasien', 'dm_pasien.pasien_id=tr_pendaftaran.pasien_id');
        $this->db->join('dm_dokter', 'dm_dokter.id_dokter=tr_pendaftaran.id_dokter');
        $this->db->join('dm_poliklinik', 'dm_poliklinik.poliklinik_id=tr_pendaftaran.poliklinik_id');
        $this->db->where("id_pendaftaran", $id);
        $this->db->order_by("id_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;
    }
    public function getResep($id)
    {
        $this->db->select('id_tr_resep,id_pendaftaran,tr_resep.kode_obat,nama_obat,harga_resep,harga_nonresep,tuslah,quantity,aturan,dosis_name');
        $this->db->from("tr_resep");
        $this->db->join('dm_obat', 'dm_obat.kode_obat=tr_resep.kode_obat');
        $this->db->where("id_pendaftaran", $id);
        $this->db->order_by("kode_obat", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }
}
