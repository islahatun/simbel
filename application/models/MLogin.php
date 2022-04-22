<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MLogin extends CI_Model{	

	function clogin($table, $where){		
		return $this->db->get_where($table,$where);
	}	

}