<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){	
			$data['title'] = 'Login';
			$this->load->view('login', $data);
		} else {
			$data['title'] = 'Dasboard';
			$data['content_overview'] = $this->load->view('dashboard', $data, true);
			$this->load->view('overview', $data);
		}
	}
}
