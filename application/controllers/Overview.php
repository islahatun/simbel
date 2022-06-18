<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
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
		if ($this->session->userdata('status') != "login") {
			$data['title'] = 'Login';
			$this->load->view('login', $data);
		} else {
			$data['title'] = 'Dasboard';
			$data['content_overview'] = $this->load->view('dashboard', $data, true);
			$this->load->view('overview', $data);
		}
	}
	public function login()
	{
	}
}
