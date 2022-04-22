<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MPoliklinik extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}

    public function datalist()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('poliklinik_id, poliklinik_name, poliklinik_ket, status');
		$this->db->from("dm_poliklinik");
		$this->db->where("status", 1);
		$this->db->order_by("poliklinik_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }
    
    public function getById($id){
        return $this->db->get_where("dm_poliklinik", ["poliklinik_id" => $id])->row();
    }

}