<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Error';
		$data['content_wrapper'] = $this->load->view('error/error_404', $data, true);
		$this->load->view('main', $data);
	}
}
