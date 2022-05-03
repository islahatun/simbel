<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarBarang extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MDaftarBarang');
	}

	public function index()
	{
		$data['barang'] = $this->MDaftarBarang->datalist();
		// $data['template_page'] = $this->load->view('daftarBarang', $data, true);
		$this->load->view('daftarBarang', $data);
	}
	public function detail($id)
	{
		$data['detail'] = $this->MDaftarBarang->getById($id);
		// $data['template_page'] = $this->load->view('daftarBarang', $data, true);
		$this->load->view('daftarBarang/detailBarang', $data);
	}
}
