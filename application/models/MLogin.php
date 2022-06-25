<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MLogin extends CI_Model
{

	function clogin($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	public function session()
	{
		$nama =  $this->session->userdata('nama');
		$this->db->select('*');
		$this->db->from("dm_pengguna");
		$this->db->where("nama", $nama);
		// $this->db->order_by("nama_kurir", 'ASC');

		$finalResponse =  $this->db->get_where()->row();
		return $finalResponse;
	}
}
