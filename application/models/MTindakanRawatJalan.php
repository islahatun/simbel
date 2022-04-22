<?php defined('BASEPATH') or exit('No direct script access allowed');

class MTindakanRawatJalan extends CI_Model
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

    public function getById($id)
    {
        $this->db->select('id_pendaftaran,name, tr_pendaftaran.id_dokter, identitas_id, poliklinik_name, nama_dokter, dm_pasien.pasien_id,dm_pasien.alamat,dm_pasien.tgl_lahir, tanggal_pendaftaran, dm_pasien.jenis_kelamin, jenis_pasien, dm_status_transaksi.status ');
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
    public function getCatatanById($id)
    {
        return $this->db->get_where("tr_catatan", ["id_pendaftaran" => $id])->row_array();
    }
    public function getDiagnosaId($id)
    {
        return $this->db->get_where("dm_diagnosa", ["diagnosa_code" => $id])->row_array();
    }
    public function tr_diagnosa($id)
    {
        $this->db->select('*,dm_diagnosa.diagnosa_code,diagnosa_version,dm_diagnosa.diagnosa_name, keterangan, id_tr_diagnosa');
        $this->db->from('tr_diagnosa');
        $this->db->join('dm_diagnosa', 'dm_diagnosa.diagnosa_code=tr_diagnosa.diagnosa_code');
        $this->db->where("id_pendaftaran", $id);
        $this->db->order_by("id_tr_diagnosa", 'ASC');
        $finalResponse =  $this->db->get()->result();
        return $finalResponse;
    }
    public function tr_pelayanan($id)
    {
        $this->db->select('dm_pelayanan.id_pelayanan,nama_pelayanan, id_tr_pelayanan,harga, id_pendaftaran');
        $this->db->from("tr_pelayanan");
        $this->db->join('dm_pelayanan', 'dm_pelayanan.id_pelayanan=tr_pelayanan.id_pelayanan');
        $this->db->where("id_pendaftaran", $id);
        $this->db->order_by("id_tr_pelayanan", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }
    public function tr_resep($id)
    {
        $this->db->select('id_tr_resep,tr_resep.kode_obat,nama_obat,tuslah,quantity,aturan,satuan_name, id_pendaftaran');
        $this->db->from("tr_resep");
        $this->db->join('dm_obat', 'dm_obat.kode_obat=tr_resep.kode_obat');
        $this->db->where("id_pendaftaran", $id);
        $this->db->order_by("id_tr_resep", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }
    public function riwayat($id)
    {

        $this->db->select('tr_pendaftaran.id_pendaftaran,tr_pendaftaran.pasien_id,dm_pasien.jenis_kelamin,name,nama_dokter,poliklinik_name,tanggal_pendaftaran,tr_pendaftaran.tgl_lahir,jenis_pasien,tr_pendaftaran.status, berat_badan,tinggi_badan,alergi,tr_catatan.keluhan,buta_warna,catatan,respirasi,nadi,tekanan_darah,tr_catatan.gol_darah,suhu');
        $this->db->from("tr_pendaftaran");
        $this->db->join('dm_dokter', 'dm_dokter.id_dokter = tr_pendaftaran.id_dokter');
        $this->db->join('dm_pasien', 'dm_pasien.pasien_id = tr_pendaftaran.pasien_id');
        $this->db->join('dm_poliklinik', 'dm_poliklinik.poliklinik_id = tr_pendaftaran.poliklinik_id');
        $this->db->join('tr_resep', 'tr_resep.pasien_id = tr_pendaftaran.pasien_id');
        $this->db->join('dm_obat', 'dm_obat.kode_obat = tr_resep.kode_obat');
        $this->db->join('tr_pelayanan', 'tr_pelayanan.pasien_id = tr_pendaftaran.pasien_id');
        $this->db->join('dm_pelayanan', 'dm_pelayanan.id_Pelayanan = tr_pelayanan.id_pelayanan');
        $this->db->join('tr_catatan', 'tr_catatan.id_pendaftaran = tr_pendaftaran.id_pendaftaran');
        $this->db->where("tr_pendaftaran.id_pendaftaran", $id);
        //$this->db->where(is_null('sts'));
        //$this->db->order_by("tr_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->result_array();
        return $finalResponse;
    }
    public function riwayat_catatan($id)
    {
        $this->db->select('tr_pendaftaran.id_pendaftaran,tr_pendaftaran.pasien_id,tanggal_pendaftaran,tr_pendaftaran.tgl_lahir,jenis_pasien,tr_pendaftaran.status, berat_badan,tinggi_badan,alergi,tr_catatan.keluhan,buta_warna,catatan,respirasi,nadi,tekanan_darah,tr_catatan.gol_darah,suhu, cacat_badan, tanggal_catatan');
        $this->db->from("tr_catatan");
        $this->db->join('tr_pendaftaran', 'tr_catatan.id_pendaftaran = tr_pendaftaran.id_pendaftaran');
        $this->db->where("tr_catatan.pasien_id", $id);
        //$this->db->where(is_null('sts'));
        //$this->db->order_by("tr_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->result_array();
        return $finalResponse;
    }
    public function riwayat_resep($id)
    {
        $this->db->select('tr_pendaftaran.id_pendaftaran,tr_pendaftaran.pasien_id,nama_obat,aturan,tuslah,quantity, create_date');
        $this->db->from("tr_resep");
        $this->db->join('tr_pendaftaran', 'tr_resep.id_pendaftaran = tr_pendaftaran.id_pendaftaran');
        $this->db->join('dm_obat', 'dm_obat.kode_obat = tr_resep.kode_obat');
        $this->db->where("tr_resep.pasien_id", $id);
        //$this->db->where(is_null('sts'));
        $this->db->order_by("id_pendaftaran", 'ASC');

        $finalResponse =  $this->db->get_where()->result_array();
        return $finalResponse;
    }

    public function riwayat_pelayanan($id)
    {
        $this->db->select('dm_pelayanan.id_pelayanan,nama_pelayanan, id_tr_pelayanan,harga, tr_pelayanan.id_pendaftaran,tgl_pelayanan, tgl_pelayanan');
        $this->db->from("tr_pelayanan");
        $this->db->join('tr_pendaftaran', 'tr_pelayanan.id_pendaftaran=tr_pendaftaran.id_pendaftaran');
        $this->db->join('dm_pelayanan', 'dm_pelayanan.id_pelayanan=tr_pelayanan.id_pelayanan');
        $this->db->where("tr_pelayanan.pasien_id", $id);
        $this->db->order_by("id_tr_pelayanan", 'ASC');

        $finalResponse =  $this->db->get_where()->result_array();
        return $finalResponse;
    }
}
