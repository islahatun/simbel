<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mkasir extends CI_Model
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
        $this->db->where("tr_pendaftaran.status", 2);
        //$this->db->where(is_null('sts'));
        $this->db->order_by("id_pendaftaran", 'ASC');

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
        $this->db->select('tr_pendaftaran.*, dm_pasien.*, dm_dokter.id_dokter, dm_dokter.nama_dokter, dm_status_transaksi.*, dm_poliklinik.*');
        $this->db->from("tr_pendaftaran");
        $this->db->join('dm_pasien', 'dm_pasien.pasien_id=tr_pendaftaran.pasien_id');
        $this->db->join('dm_dokter', 'dm_dokter.id_dokter=tr_pendaftaran.id_dokter');
        $this->db->join('dm_status_transaksi', 'dm_status_transaksi.id_status=tr_pendaftaran.status');
        $this->db->join('dm_poliklinik', 'dm_poliklinik.poliklinik_id=tr_pendaftaran.poliklinik_id');
        $this->db->where("id_pendaftaran", $id);
        $this->db->order_by("id_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->row();
        return $finalResponse;
        // return $this->db->get_where("tr_pendaftaran", ["id_pendaftaran" => $id])->row();
    }
    public function daftarBiayaObat($id)
    {
        $this->db->select('tr_pendaftaran.id_pendaftaran, nama_obat, harga_resep, quantity');
        $this->db->from("tr_pendaftaran");
        $this->db->join('tr_resep', 'tr_resep.id_pendaftaran=tr_pendaftaran.id_pendaftaran');
        // $this->db->join('tr_pelayanan', 'tr_pelayanan.id_pendaftaran=tr_pendaftaran.id_pendaftaran', 'left');
        $this->db->join('dm_obat', 'dm_obat.kode_obat=tr_resep.kode_obat');
        // $this->db->join('dm_pelayanan', 'dm_pelayanan.id_pelayanan=tr_pelayanan.id_pelayanan', 'left');
        $this->db->where("tr_pendaftaran.id_pendaftaran", $id);
        // $this->db->order_by("id_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->result_array();
        return $finalResponse;
    }
    public function daftarBiayaPelayanan($id)
    {
        $this->db->select('tr_pendaftaran.id_pendaftaran,tr_pelayanan.id_pelayanan, nama_pelayanan,harga');
        $this->db->from("tr_pendaftaran");
        // $this->db->join('tr_resep', 'tr_resep.id_pendaftaran=tr_pendaftaran.id_pendaftaran');
        $this->db->join('tr_pelayanan', 'tr_pelayanan.id_pendaftaran=tr_pendaftaran.id_pendaftaran');
        // $this->db->join('dm_obat', 'dm_obat.kode_obat=tr_resep.kode_obat', 'left');
        $this->db->join('dm_pelayanan', 'dm_pelayanan.id_pelayanan=tr_pelayanan.id_pelayanan');
        $this->db->where("tr_pendaftaran.id_pendaftaran", $id);
        // $this->db->order_by("id_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->result_array();
        return $finalResponse;
    }
}
