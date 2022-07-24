<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Costomer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MCostomer');
    }

    public function index()
    {
        $data['title'] = 'Daftar Pelanggan';
        $data['subtitle'] = 'Data Pelanggan';

        $data['content_overview'] = $this->load->view('costomer', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MCostomer->datalist();
        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nama'         => "<a href='" . base_url('Costomer/detail/' . $ao->id) . "'> 
                " . $ao->nama . "</i>",
                'jenis_kelamin'    => $ao->jenis_kelamin,
                'no_telp'    => $ao->no_telp,
                'alamat'    => $ao->alamat,
                'email'    => $ao->email,
                'foto'    => $ao->foto,
                // 'status'              => "<span class='badge badge-warning'> " . $this->MFunction->php_status($ao->status) . " </span>",
                'btn_action'         => "<a href='" . base_url('Costomer/update/' . $ao->id) . "' class='btn btn-sm btn-outline-success'> 
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
        $data['title'] = 'Daftar Pelanggan';
        $data['subtitle'] = 'Data Pelanggan';

        $data['content_overview'] = $this->load->view('Costomer/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function detail($id)
    {
        $data['title'] = 'Histori Pembelian';
        $data['subtitle'] = 'Histori Pembelian';

        $data["ao"] = $this->MCostomer->getById($id);

        $data['content_overview'] = $this->load->view('Costomer/detail', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalistDetail($id)
    {
        $list = $this->MCostomer->datalistDetail($id);

        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nama_barang'    => $ao->nama_barang,
                'jumlah_beli'    => $ao->jumlah_beli,
                'status_pemesanan'    => $ao->status_pemesanan,
                'tanggal_pemesanan'    => $ao->tanggal_pemesanan,
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function update($id)
    {
        $data['title'] = 'Daftar Pelanggan';
        $data['subtitle'] = 'Data Pelanggan';
        $data["ao"] = $this->MCostomer->getById($id);

        $data['content_overview'] = $this->load->view('Costomer/formupdate', $data, true);
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
            'status_login' => 1,
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
            'status_login' => 1,
        );

        $this->db->where('id', $this->input->post('id'));
        $this->db->update("dm_pengguna", $data);
    }

    public function delete()
    {

        $this->db->where('id', $this->input->post('id'));
        $this->db->delete("dm_pengguna");
    }
}
