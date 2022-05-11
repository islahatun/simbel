<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ListPesanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MListPesanan');
	}

	public function index()
	{
		$data['title'] = 'Daftar Pesanan';
		$data['subtitle'] = 'Data Daftar Pesanan';

		$data['content_overview'] = $this->load->view('listPesanan', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MListPesanan->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $listPesanan) {

			$rtn[] = array(
				'nomor'         		=> $i,
				'id_pemesanan'         => $listPesanan->id_pemesanan,
				'status_pemesanan'       => $listPesanan->status_pemesanan,
				'btn_action'            => "<a href='" . base_url('listPesanan/update/' . $listPesanan->id_pemesanan) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_listPesanan_del' vid_pemesanan='" . $listPesanan->id_pemesanan . " ' class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function update($id)
	{
		$data['title'] = 'Daftar Pesanan';
		$data['subtitle'] = 'Ubah Daftar Pesanan';
		$data["listPesanan"] = $this->MListPesanan->getById($id);

		$data['content_overview'] = $this->load->view('listPesanan/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	function updateSave()
	{
		$data = array(
			'status_pemesanan' => $this->input->post('status_pemesanan'),
		);

		$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
		$this->db->update("trans_pemesanan", $data);
	}

	public function delete()
	{

		$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
		$this->db->delete("trans_pemesanan");
	}
}
