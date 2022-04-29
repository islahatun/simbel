<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MKategori');
	}

	public function index()
	{
		$data['title'] = 'Kategori';
		$data['subtitle'] = 'Data Kategori';

		$data['content_overview'] = $this->load->view('kategori', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MKategori->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $kategori) {

			$rtn[] = array(
				'nomor'         		=> $i,
				'id_kategori'         => $kategori->id_kategori,
				'nama_kategori'       => $kategori->nama_kategori,
				'btn_action'            => "<a href='" . base_url('Kategori/update/' . $kategori->id_kategori) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_kategori_del' vid_kategori='" . $kategori->id_kategori . " ' class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Kategori';
		$data['subtitle'] = 'Tambah Kategori';

		$data['content_overview'] = $this->load->view('kategori/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Kategori';
		$data['subtitle'] = 'Ubah Kategori';
		$data["kategori"] = $this->MKategori->getById($id);

		$data['content_overview'] = $this->load->view('kategori/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori'),
		);

		$this->db->insert("dm_kategori", $data);
	}

	function updateSave()
	{
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori'),
		);

		$this->db->where('id_kategori', $this->input->post('id_kategori'));
		$this->db->update("dm_kategori", $data);
	}

	public function delete()
	{

		$this->db->where('id_kategori', $this->input->post('id_kategori'));
		$this->db->delete("dm_kategori");
	}
}
