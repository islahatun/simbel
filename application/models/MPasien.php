<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MPasien extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}

    function datalist()
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
    
    public function getById($id){
        return $this->db->get_where("dm_pasien", ["pasien_id" => $id])->row();
    }

}