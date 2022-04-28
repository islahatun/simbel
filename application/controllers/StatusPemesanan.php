<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StatusPemesanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MStatusPemesanan');
	}

	public function index()
	{
		$data['title'] = 'Status Pemesanan';
		$data['subtitle'] = 'Data Status Pemesanan';

		$data['content_overview'] = $this->load->view('statusPemesanan', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MStatusPemesanan->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $StatusPemesanan) {

			$rtn[] = array(
				'nomor'         		=> $i,
				'id_status'         => $StatusPemesanan->id_status,
				'status_pemesanan'       => $StatusPemesanan->status_pemesanan,
				'btn_action'            => "<a href='" . base_url('StatusPemesanan/update/' . $StatusPemesanan->id_status) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_StatusPemesanan_del' vid_status='" . $StatusPemesanan->id_status . " ' class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Status Pemesanan';
		$data['subtitle'] = 'Tambah Status Pemesanan';

		$data['content_overview'] = $this->load->view('StatusPemesanan/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Status Pemesanan';
		$data['subtitle'] = 'Ubah Status Pemesanan';
		$data["StatusPemesanan"] = $this->MStatusPemesanan->getById($id);

		$data['content_overview'] = $this->load->view('StatusPemesanan/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$data = array(
			'status_pemesanan' => $this->input->post('status_pemesanan'),
		);

		$this->db->insert("dm_status_pemesanan", $data);
	}

	function updateSave()
	{
		$data = array(
			'status_pemesanan' => $this->input->post('status_pemesanan'),
		);

		$this->db->where('id_status', $this->input->post('id_status'));
		$this->db->update("dm_status_pemesanan", $data);
	}

	public function delete()
	{

		$this->db->where('id_status', $this->input->post('id_status'));
		$this->db->delete("dm_status_pemesanan");
	}
}
