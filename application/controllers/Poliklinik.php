<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MPoliklinik');
	}

	public function index()
	{
        $data['title'] = 'Poliklinik';
        $data['subtitle'] = 'Data Poliklinik';

		$data['content_overview'] = $this->load->view('poliklinik', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist() 
	{	
		$list = $this->MPoliklinik->datalist();
		
		$rtn = array();
        $i=1;
		
        foreach ($list as $poliklinik) {

            $rtn[]=array(    
				'nomor'         		=> $i,
				'poliklinik_id'         => $poliklinik->poliklinik_id,
				'poliklinik_name'       => $poliklinik->poliklinik_name,
				'poliklinik_ket'        => $poliklinik->poliklinik_ket,
				'status'         		=> "<span class='badge badge-warning'> " .$this->MFunction->php_status($poliklinik->status). " </span>",
				'btn_action'            => "<a href='".base_url('poliklinik/update/'.$poliklinik->poliklinik_id)."' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_poliklinik_del' vpoliklinik_id=" .$poliklinik->poliklinik_id. " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add() 
	{
        $data['title'] = 'Poliklinik';
        $data['subtitle'] = 'Tambah Poliklinik';

		$data['content_overview'] = $this->load->view('poliklinik/formadd', $data, true);
		$this->load->view('overview', $data);
		
	}

	public function update($id) {
        $data['title'] = 'Poliklinik';
        $data['subtitle'] = 'Ubah Poliklinik';
        $data["poliklinik"] = $this->MPoliklinik->getById($id);

		$data['content_overview'] = $this->load->view('poliklinik/formupdate', $data, true);
		$this->load->view('overview', $data);
		
	}

	public function save() 
	{
        $data = array(
			'poliklinik_name'=>$this->input->post('poliklinik_name'),
			'poliklinik_ket'=>$this->input->post('poliklinik_ket'),
			'status'=> '1'
		);
        
        $this->db->insert("dm_poliklinik",$data);		
	}

    function updateSave()
    {        
        $data = array(
			'poliklinik_name'=>$this->input->post('poliklinik_name'),
			'poliklinik_ket'=>$this->input->post('poliklinik_ket'),
        );

        $this->db->where('poliklinik_id', $this->input->post('poliklinik_id'));
        $this->db->update("dm_poliklinik", $data);
    }

	public function delete() { 
        $data = array(
			'status'=>'0',
        );

        $this->db->where('poliklinik_id', $this->input->post('poliklinik_id'));
        $this->db->update("dm_poliklinik", $data);
	}
}
