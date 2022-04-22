<?php defined('BASEPATH') or exit('No direct script access allowed');

class MBatalTransaksi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');
        $where = " a.id_pendaftaran not in (SELECT id_pendaftaran from tr_batal_transaksi b where b.id_pendaftaran = a.id_pendaftaran )";
        $this->db->select('a.id_pendaftaran,c.name, c.identitas_id, c.pasien_id,c.alamat,c.tgl_lahir,c.tempat_lahir, a.tanggal_pendaftaran,a.status');
        $this->db->from("tr_pendaftaran a");
        $this->db->where($where);
        $this->db->join('dm_pasien c', 'c.pasien_id=a.pasien_id');
        $this->db->order_by("a.id_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function list_tindakan($id)
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('id_tr_pelayanan, nama_pelayanan,harga');
        $this->db->from("tr_pelayanan");
        // $this->db->where("id_pendaftaran", $id);
        $this->db->join('tr_pendaftaran', 'tr_pendaftaran.id_pendaftaran=tr_pelayanan.id_pendaftaran');
        $this->db->join('dm_pelayanan', 'dm_pelayanan.id_pelayanan=tr_pelayanan.id_pelayanan');
        $this->db->where("tr_pelayanan.id_pendaftaran", $id);
        $this->db->order_by("id_tr_pelayanan", 'ASC');

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
        // return $this->db->get_where("tr_pendaftaran", ["id_pendaftaran" => $id])->row();
    }
    public function listbataltransaksi()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->select('a.id_pendaftaran,c.name, c.identitas_id, c.pasien_id,c.alamat,c.tgl_lahir,c.tempat_lahir, a.tanggal_pendaftaran,a.status');
        $this->db->from("tr_batal_transaksi a");
        $this->db->join('dm_pasien c', 'c.pasien_id=a.pasien_id');
        $this->db->order_by("a.id_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }
}
