<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MSupplier');
	}

	public function index()
	{
		$data['title'] = 'Supplier';
		$data['subtitle'] = 'Data Supplier';

		$data['content_overview'] = $this->load->view('supplier', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MSupplier->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $s) {

			$rtn[] = array(
				'nomor'          	 => $i,
				'supplier_name'      => $s->supplier_name,
				'alamat'     	 	 => $s->alamat,
				'telp'      		 => $s->telp,
				'email'       		 => $s->email,
				'bank_id'			 => $s->bank_id,
				'no_rekening'		 => $s->no_rekening,
				'rek_name'			 => $s->rek_name,
				'status'         	 => "<span class='badge badge-warning'> " . $this->MFunction->php_status($s->status) . " </span>",
				'btn_action'         => "<a href='" . base_url('supplier/update/' . $s->supplier_id) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_supplier_del' vsupplier_id=" . $s->supplier_id . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Supplier';
		$data['subtitle'] = 'Tambah Data Supplier';

		$data['prov'] = $this->MFunction->prov();

		$data['content_overview'] = $this->load->view('supplier/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Supplier';
		$data['subtitle'] = 'Ubah Data Supplier';

		$data["s"] = $this->MSupplier->getById($id);
		$data['prov'] = $this->MFunction->prov();

		$data['content_overview'] = $this->load->view('supplier/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$data = array(
			'supplier_name' 	=> $this->input->post('supplier_name'),
			'alamat' 			=> $this->input->post('alamat'),
			'prov_id'			=> $this->input->post('prov_id'),
			'kab_id'			=> $this->input->post('kab_id'),
			'kec_id'			=> $this->input->post('kec_id'),
			'telp' 				=> $this->input->post('telp'),
			'email'	 			=> $this->input->post('email'),
			'bank_id' 			=> $this->input->post('bank_id'),
			'no_rekening' 		=> $this->input->post('no_rekening'),
			'rek_name' 			=> $this->input->post('rek_name'),
			'status' 			=> '1'
		);

		$this->db->insert("dm_supplier", $data);
	}

	function updateSave()
	{
		$data = array(
			'supplier_name' 	=> $this->input->post('supplier_name'),
			'alamat' 			=> $this->input->post('alamat'),
			'prov_id'			=> $this->input->post('prov_id'),
			'kab_id'			=> $this->input->post('kab_id'),
			'kec_id'			=> $this->input->post('kec_id'),
			'telp' 				=> $this->input->post('telp'),
			'email' 			=> $this->input->post('email'),
			'bank_id' 			=> $this->input->post('bank_id'),
			'no_rekening'	 	=> $this->input->post('no_rekening'),
			'rek_name' 			=> $this->input->post('rek_name'),
		);

		$this->db->where('supplier_id', $this->input->post('supplier_id'));
		$this->db->update("dm_supplier", $data);
	}

	public function delete()
	{
		$data = array(
			'status' => '0',
		);

		$this->db->where('supplier_id', $this->input->post('supplier_id'));
		$this->db->update("dm_supplier", $data);
	}
}
