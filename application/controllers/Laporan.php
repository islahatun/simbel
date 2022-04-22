<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        //$this->load->model('MParameter');
    }

    public function index()
    {
        $data['title'] = 'Laporan';
        $data['subtitle'] = 'Data Parameter';

        $data['content_overview'] = $this->load->view('laporan', $data, true);
        $this->load->view('overview', $data);
    }
}
