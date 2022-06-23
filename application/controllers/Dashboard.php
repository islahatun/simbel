<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Dasboard';
		$data['content_overview'] = $this->load->view('Dashboard', $data, true);
		$this->load->view('Overview', $data);
	}
}
