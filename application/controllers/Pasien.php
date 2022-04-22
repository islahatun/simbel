<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MPasien');
	}

	public function index()
	{
        $data['title'] = 'Pasien';
        $data['subtitle'] = 'Data Pasien';

		$data['content_overview'] = $this->load->view('pasien', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist() 
	{	
		$list = $this->MPasien->datalist();
		
		$rtn = array();
        $i=1;
		
        foreach ($list as $pasien) {

            $rtn[]=array(    
				'nomor'         		=> $i,
				'pasien_id'             => $pasien->pasien_id,
				'name'                  => $pasien->name,
				'jenis_kelamin'         => $this->MFunction->php_jk($pasien->jenis_kelamin),
				'umur'                  => $this->MFunction->php_umur($pasien->tgl_lahir),
				'telp'                  => $pasien->telp,
				'alamat'                => $pasien->alamat,
				'btn_action'            => "<a href='".base_url('pasien/update/'.$pasien->pasien_id)."' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add() 
	{
        $data['title'] = 'Pasien';
        $data['subtitle'] = 'Tambah Pasien';

		$data['prov'] = $this->MFunction->prov();

		$data['pekerjaan'] = $this->MFunction->pekerjaan();
		$data['agama'] = $this->MFunction->agama();
		$data['pendidikan'] = $this->MFunction->pendidikan();
		$data['perkawinan'] = $this->MFunction->perkawinan();

		$data['content_overview'] = $this->load->view('pasien/formadd', $data, true);
		$this->load->view('overview', $data);
		
	}

	public function update($id) {
        $data['title'] = 'Pasien';
        $data['subtitle'] = 'Ubah Pasien';
        $data["pasien"] = $this->MPasien->getById($id);

		$data['prov'] = $this->MFunction->prov();
        //$prov_id = $this->MPasien->getById($id)->prov_id;
		//$data['kab'] = $this->MFunction->kab($prov_id);

		$data['pekerjaan'] = $this->MFunction->pekerjaan();
		$data['agama'] = $this->MFunction->agama();
		$data['pendidikan'] = $this->MFunction->pendidikan();
		$data['perkawinan'] = $this->MFunction->perkawinan();

		$data['content_overview'] = $this->load->view('pasien/formupdate', $data, true);
		$this->load->view('overview', $data);
		
	}

	public function save() {		
		$currentTime = date('Y-m-d H:i:s');
		$currentDate = date('Ymd');

		$vpasien_id = $this->MFunction->genCode('RM', $currentDate);
		
        $data = array(
			'pasien_id'			=>$vpasien_id,
			'identitas_id'		=>$this->input->post('identitas_id'),
			'name'				=>$this->input->post('name'),
			'tempat_lahir'		=>$this->input->post('tempat_lahir'),
			'tgl_lahir'			=>$this->input->post('tgl_lahir'),
			'jenis_kelamin'		=>$this->input->post('jenis_kelamin'),
			'gol_darah'			=>$this->input->post('gol_darah'),
			'telp'				=>$this->input->post('telp'),
			'email'				=>$this->input->post('email'),
			'telp_lain'			=>$this->input->post('telp_lain'),
			'nama_lain'			=>$this->input->post('nama_lain'),
			'pekerjaan_id'		=>$this->input->post('pekerjaan_id'),
			'prov_id'			=>$this->input->post('prov_id'),
			'kab_id'			=>$this->input->post('kab_id'),
			'kec_id'			=>$this->input->post('kec_id'),
			'alamat'			=>$this->input->post('alamat'),
			'agama_id'			=>$this->input->post('agama_id'),
			'pendidikan_id'		=>$this->input->post('pendidikan_id'),
			'perkawinan_id'		=>$this->input->post('perkawinan_id'),
			'date_add'			=>$currentTime,
			'date_modify'		=>$currentTime
		);
        
        $this->db->insert("dm_pasien",$data);	
	}

    function updateSave()
    {        
        $data = array(
			'poliklinik_name'=>$this->input->post('poliklinik_name'),
			'poliklinik_ket'=>$this->input->post('poliklinik_ket'),
        );

        $this->db->update("dm_pasien", $data);
    }

	public function delete() { 
        $data = array(
			'status'=>'0',
        );

        $this->db->update("dm_pasien", $data);
	}

	public function kabByID($id) { 
		$data = $this->MFunction->kab($id);

		echo json_encode($data);
	}

	public function kecByID($id) { 
		$data = $this->MFunction->kec($id);

		echo json_encode($data);
	}

}
