<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InternalBengkel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MInternalBengkel');
    }

    public function index()
    {
        $data['title'] = 'Daftar Admin';
        $data['subtitle'] = 'Data Admin';

        $data['content_overview'] = $this->load->view('internalBengkel', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MInternalBengkel->datalist();
        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nama_pelanggan'         => $ao->nama_pelanggan,
                'jenis_kelamin'    => $ao->jenis_kelamin,
                'no_telp'    => $ao->no_telp,
                'alamat'    => $ao->alamat,
                'email'    => $ao->email,
                'foto'    => $ao->foto,
                // 'status'              => "<span class='badge badge-warning'> " . $this->MFunction->php_status($ao->status) . " </span>",
                'btn_action'         => "<a href='" . base_url('InternalBengkel/update/' . $ao->id_pelanggan) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_pelanggan_del' vpelanggan=" . $ao->id_pelanggan . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Daftar Admin';
        $data['subtitle'] = 'Data Admin';

        $data['content_overview'] = $this->load->view('internalBengkel/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Daftar Admin';
        $data['subtitle'] = 'Data Admin';
        $data["ao"] = $this->MInternalBengkel->getById($id);

        $data['content_overview'] = $this->load->view('internalBengkel/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'foto' => $this->input->post('foto'),
            'status' => 'A',
        );

        $this->db->insert("dm_pelanggan", $data);
    }

    function updateSave()
    {
        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'foto' => $this->input->post('foto'),
            'status' => 'A',
        );

        $this->db->where('id_pelanggan', $this->input->post('id_pelanggan'));
        $this->db->update("dm_pelanggan", $data);
    }

    public function delete()
    {

        $this->db->where('id_pelanggan', $this->input->post('id_pelanggan'));
        $this->db->update("dm_pelanggan");
    }
}
