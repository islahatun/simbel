<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MObat');
	}

	public function index()
	{
		$data['title'] = 'Obat / Item';
		$data['subtitle'] = 'Data Obat / Item';

		$data['content_overview'] = $this->load->view('obat', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MObat->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $o) {

			$rtn[] = array(
				'nomor'          	 => $i,
				'id_obat'        	 => $o->id_obat,
				'nama_obat'         =>  $o->nama_obat,
				'kode_obat'     	 => $o->kode_obat,
				'dosis'      		 => $o->dosis,
				'dosis_name'       => $o->dosis_name,
				'jenis_obat_name'			 => $o->jenis_obat_name,
				'satuan_name'    => $o->satuan_name,
				'stock_minimal'      => $o->stock_minimal,
				'stock'				 => $o->stock,
				'harga_pokok'     	 => $this->MFunction->idr($o->harga_pokok),
				'harga_resep'     	 => $this->MFunction->idr($o->harga_resep),
				'harga_nonresep'     => $this->MFunction->idr($o->harga_nonresep),
				'status'         		=> "<span class='badge badge-warning'> " . $this->MFunction->php_status($o->status) . " </span>",
				'btn_action'         => "<a href='" . base_url('obat/update/' . $o->id_obat) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_obat_del' vid_obat=" . $o->id_obat . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Obat / Item';
		$data['subtitle'] = 'Tambah Data Obat / Item';

		$data['satdos'] = $this->MFunction->satdos();
		$data['kategori'] = $this->MFunction->kategori();
		$data['satuan'] = $this->MFunction->satuan();

		$data['content_overview'] = $this->load->view('obat/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Obat / Item';
		$data['subtitle'] = 'Ubah Data Obat / Item';
		$data["o"] = $this->MObat->getById($id);

		$data['satdos'] = $this->MFunction->satdos();
		$data['kategori'] = $this->MFunction->kategori();
		$data['satuan'] = $this->MFunction->satuan();

		$data['content_overview'] = $this->load->view('obat/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$data = array(
			'nama_obat' 		=> $this->input->post('nama_obat'),
			'kode_obat'			=> $this->input->post('kode_obat'),
			'dosis' 			=> $this->input->post('dosis'),
			'dosis_name'			=> $this->input->post('dosis_name'),
			'jenis_obat_name' 	=> $this->input->post('jenis_obat_name'),
			'satuan_name' 		=> $this->input->post('satuan_name'),
			'stock_minimal' 	=> $this->input->post('stock_minimal'),
			'stock' 			=> $this->input->post('stock'),
			'harga_pokok' 		=> $this->input->post('harga_pokok'),
			'harga_resep' 		=> $this->input->post('harga_resep'),
			'harga_nonresep' 	=> $this->input->post('harga_nonresep'),
			'status' 			=> '1'
		);

		$this->db->insert("dm_obat", $data);
	}

	function updateSave()
	{
		$data = array(
			'nama_obat' 		=> $this->input->post('nama_obat'),
			'kode_obat' 		=> $this->input->post('kode_obat'),
			'dosis' 			=> $this->input->post('dosis'),
			'dosis_name' 			=> $this->input->post('dosis_name'),
			'jenis_obat_name' 	=> $this->input->post('jenis_obat_name'),
			'satuan_name' 		=> $this->input->post('satuan_name'),
			'stock_minimal' 	=> $this->input->post('stock_minimal'),
			'stock' 			=> $this->input->post('stock'),
			'harga_pokok' 		=> $this->input->post('harga_pokok'),
			'harga_resep' 		=> $this->input->post('harga_resep'),
			'harga_nonresep' 	=> $this->input->post('harga_nonresep'),
		);

		$this->db->where('id_obat', $this->input->post('id_obat'));
		$this->db->update("dm_obat", $data);
	}

	public function delete()
	{
		$data = array(
			'status' => '0',
		);

		$this->db->where('id_obat', $this->input->post('id_obat'));
		$this->db->update("dm_obat", $data);
	}
}
