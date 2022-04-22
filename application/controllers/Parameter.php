<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parameter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        //$this->load->model('MParameter');
    }

    public function index()
    {
        $data['title'] = 'Parameter';
        $data['subtitle'] = 'Data Parameter';

        $data['content_overview'] = $this->load->view('parameter', $data, true);
        $this->load->view('overview', $data);
    }
}
