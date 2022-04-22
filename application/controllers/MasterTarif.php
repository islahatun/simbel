<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterTarif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        //$this->load->model('MParameter');
    }

    public function index()
    {
        $data['title'] = 'Mastrer Tarif';
        $data['subtitle'] = 'Data Mastrer Tarif';

        $data['content_overview'] = $this->load->view('mastertarif', $data, true);
        $this->load->view('overview', $data);
    }
}
