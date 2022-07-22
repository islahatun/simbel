<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InfoToko extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MInfoToko');
    }

    public function index()
    {
        $data['title'] = 'Daftar Pelanggan';
        $data['subtitle'] = 'Data Pelanggan';

        $data['content_overview'] = $this->load->view('InfoToko', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MInfoToko->datalist();
        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nama_toko'         => $ao->nama_toko,
                'alamat'    => $ao->alamat,
                'norekening'    => $ao->norekening,
                'nama_bank'    => $ao->nama_bank,
                'pemilik_rekening'    => $ao->pemilik_rekening,
                'no_hp'    => $ao->no_hp,
                // 'status'              => "<span class='badge badge-warning'> " . $this->MFunction->php_status($ao->status) . " </span>",
                'btn_action'         => "<a href='" . base_url('InfoToko/update/' . $ao->id_toko) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_del' vid=" . $ao->id_toko . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Daftar Pelanggan';
        $data['subtitle'] = 'Data Pelanggan';

        $data['content_overview'] = $this->load->view('InfoToko/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Daftar Pelanggan';
        $data['subtitle'] = 'Data Pelanggan';
        $data["ao"] = $this->MInfoToko->getById($id);

        $data['content_overview'] = $this->load->view('InfoToko/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'nama_toko' => $this->input->post('nama_toko'),
            'alamat' => $this->input->post('alamat'),
            'norekening' => $this->input->post('norekening'),
            'nama_bank' => $this->input->post('nama_bank'),
            'pemilik_rekening' => $this->input->post('pemilik_rekening'),
            'no_hp' => $this->input->post('no_hp'),
        );

        $this->db->insert("dm_toko", $data);
    }

    function updateSave()
    {
        $data = array(
            'nama_toko' => $this->input->post('nama_toko'),
            'alamat' => $this->input->post('alamat'),
            'norekening' => $this->input->post('norekening'),
            'nama_bank' => $this->input->post('nama_bank'),
            'pemilik_rekening' => $this->input->post('pemilik_rekening'),
            'no_hp' => $this->input->post('no_hp'),
        );

        $this->db->where('id_toko', $this->input->post('id_toko'));
        $this->db->update("dm_toko", $data);
    }

    public function delete()
    {

        $this->db->where('id_toko', $this->input->post('id_toko'));
        $this->db->delete("dm_toko");
    }
}
