<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MPengguna');
    }

    public function index()
    {
        $data['title'] = 'Daftar Pengguna';
        $data['subtitle'] = 'Data Pengguna';

        $data['content_overview'] = $this->load->view('pengguna', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MPengguna->datalist();
        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nama'         => $ao->nama,
                'jenis_kelamin'    => $ao->jenis_kelamin,
                'no_telp'    => $ao->no_telp,
                'alamat'    => $ao->alamat,
                'email'    => $ao->email,
                'foto'    => $ao->foto,
                // 'status'              => "<span class='badge badge-warning'> " . $this->MFunction->php_status($ao->status) . " </span>",
                'btn_action'         => "<a href='" . base_url('Pengguna/update/' . $ao->id) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_del' vid=" . $ao->id . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Daftar Pengguna';
        $data['subtitle'] = 'Data Pengguna';

        $data['content_overview'] = $this->load->view('Pengguna/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Daftar Pengguna';
        $data['subtitle'] = 'Data Pengguna';
        $data["ao"] = $this->MPengguna->getById($id);

        $data['content_overview'] = $this->load->view('Pengguna/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'foto' => $this->input->post('foto'),
            'status' => $this->input->post('status'),
        );

        $this->db->insert("dm_pengguna", $data);
    }

    function updateSave()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'foto' => $this->input->post('foto'),
            'status' => $this->input->post('status'),
        );

        $this->db->where('id', $this->input->post('id'));
        $this->db->update("dm_pengguna", $data);
    }

    public function delete()
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->update("dm_pengguna");
    }
}
