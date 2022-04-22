<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisObat extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MJenisObat');
	}

	public function index()
	{
        $data['title'] = 'Jenis Obat';
        $data['subtitle'] = 'Data Jenis Obat';

		$data['content_overview'] = $this->load->view('jenis_obat', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist() 
	{	
		$list = $this->MJenisObat->datalist();
		
		$rtn = array();
        $i=1;
		
        foreach ($list as $jo) {

            $rtn[]=array(    
				'nomor'         		=> $i,
				'jenis_obat_id'         => $jo->jenis_obat_id,
				'jenis_obat_name'       => $jo->jenis_obat_name,
				'status'         		=> "<span class='badge badge-warning'> " .$this->MFunction->php_status($jo->status). " </span>",
				'btn_action'            => "<a href='".base_url('jenisObat/update/'.$jo->jenis_obat_id)."' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_jo_del' vjenis_obat_id=" .$jo->jenis_obat_id. " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add() 
	{
        $data['title'] = 'Jenis Obat';
        $data['subtitle'] = 'Tambah Jenis Obat';

		$data['content_overview'] = $this->load->view('jenis_obat/formadd', $data, true);
		$this->load->view('overview', $data);
		
	}

	public function update($id) {
        $data['title'] = 'Jenis Obat';
        $data['subtitle'] = 'Ubah Jenis Obat';
        $data["jo"] = $this->MJenisObat->getById($id);

		$data['content_overview'] = $this->load->view('jenis_obat/formupdate', $data, true);
		$this->load->view('overview', $data);
		
	}

	public function save() 
	{
        $data = array(
			'jenis_obat_name'=>$this->input->post('jenis_obat_name'),
			'status'=> '1');
        
        $this->db->insert("dm_jenis_obat",$data);		
	}

    function updateSave()
    {        
        $data = array(
			'jenis_obat_name'=>$this->input->post('jenis_obat_name'),
        );

        $this->db->where('jenis_obat_id', $this->input->post('jenis_obat_id'));
        $this->db->update("dm_jenis_obat", $data);
    }

	public function delete() { 
        $data = array(
			'status'=>'0',
        );

        $this->db->where('jenis_obat_id', $this->input->post('jenis_obat_id'));
        $this->db->update("dm_jenis_obat", $data);
	}
}
