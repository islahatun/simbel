<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TenagaKesehatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MTenagaKesehatan');
	}

	public function index()
	{
		$data['title'] = 'Tenaga Kesehatan';
		$data['subtitle'] = 'Data Tenaga Kesehatan';

		$data['content_overview'] = $this->load->view('tenagakesehatan', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MTenagaKesehatan->datalist();
		$rtn = array();
		$i = 1;

		foreach ($list as $tk) {

			$rtn[] = array(
				'nomor'          	 => $i,
				'poliklinik_id'      => $tk->poliklinik_name,
				'nama_dokter'        => $tk->nama_dokter,
				'no_hp'				 => $tk->no_hp,
				'jenis_kelamin'      => $this->MFunction->php_jk($tk->jenis_kelamin),
				'no_ijin'       	 => $tk->no_ijin,
				'alamat'			 => $tk->alamat,
				'status'         	 => "<span class='badge badge-warning'> " . $this->MFunction->php_status($tk->status) . " </span>",
				'btn_action'         => "<a href='" . base_url('TenagaKesehatan/update/' . $tk->id_dokter) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_nakes_del' vid_dokter=" . $tk->id_dokter . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Tenaga Kesehatan';
		$data['subtitle'] = 'Tambah Data Tenaga Kesehatan';

		$data['prov'] = $this->MFunction->prov();

		$data['poli'] = $this->MFunction->poli();

		$data['content_overview'] = $this->load->view('tenagakesehatan/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Tenaga Kesehatan';
		$data['subtitle'] = 'Ubah Data Tenaga Kesehatan';
		$data["tk"] = $this->MTenagaKesehatan->getById($id);

		$data['prov'] = $this->MFunction->prov();

		$data['poli'] = $this->MFunction->poli();

		$data['content_overview'] = $this->load->view('tenagakesehatan/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$data = array(
			'poliklinik_id' 	=> $this->input->post('poliklinik_id'),
			'nama_dokter' 		=> $this->input->post('nama_dokter'),
			'no_hp' 			=> $this->input->post('no_hp'),
			'jenis_kelamin' 	=> $this->input->post('jenis_kelamin'),
			'no_ijin' 			=> $this->input->post('no_ijin'),
			'alamat' 			=> $this->input->post('alamat'),
			'prov_id'			=> $this->input->post('prov_id'),
			'kab_id'			=> $this->input->post('kab_id'),
			'kec_id'			=> $this->input->post('kec_id'),
			'status' 			=> '1'
		);

		$this->db->insert("dm_dokter", $data);
	}

	function updateSave()
	{
		$data = array(
			'poliklinik_id' 	=> $this->input->post('poliklinik_id'),
			'nama_dokter' 		=> $this->input->post('nama_dokter'),
			'no_hp' 			=> $this->input->post('no_hp'),
			'jenis_kelamin' 	=> $this->input->post('jenis_kelamin'),
			'no_ijin' 			=> $this->input->post('no_ijin'),
			'alamat' 			=> $this->input->post('alamat'),
			'prov_id'			=> $this->input->post('prov_id'),
			'kab_id'			=> $this->input->post('kab_id'),
			'kec_id'			=> $this->input->post('kec_id'),
		);

		$this->db->where('id_dokter', $this->input->post('id_dokter'));
		$this->db->update("dm_dokter", $data);
	}

	public function delete()
	{
		$data = array(
			'status' => '0',
		);

		$this->db->where('id_dokter', $this->input->post('id_dokter'));
		$this->db->update("dm_dokter", $data);
	}
}
