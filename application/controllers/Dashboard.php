<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dasboard';
		$data['content_wrapper'] = $this->load->view('daftarProduk', $data, true);
		$this->load->view('main', $data);
	}
}
