<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InfoBarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MInfoToko');
    }

    public function index()
    {
        $data['title'] = 'Lacak Pesanan';
        $data['subtitle'] = 'Lacak Pesanan';

        $data['content_overview'] = $this->load->view('InfoBarang', $data, true);
        $this->load->view('overview', $data);
    }
}
