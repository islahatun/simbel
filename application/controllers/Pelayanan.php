<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MPelayanan');
    }

    public function index()
    {
        $data['title'] = 'Pelayanan';
        $data['subtitle'] = 'Data Pelayanan';

        $data['content_overview'] = $this->load->view('pelayanan', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MPelayanan->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $pelayanan) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_pelayanan'         => $pelayanan->id_pelayanan,
                'nama_pelayanan'       => $pelayanan->nama_pelayanan,
                'harga'                 => $pelayanan->harga,
                'tenaga_kesehatan'      => $pelayanan->tenaga_kesehatan,
                'alat'                 => $pelayanan->alat,
                'bph'                 => $pelayanan->bph,
                'sarana'                 => $pelayanan->sarana,
                'status'               => "<span class='badge badge-warning'> " . $this->MFunction->php_status($pelayanan->status) . " </span>",
                'btn_action'            => "<a href='" . base_url('Pelayanan/update/' . $pelayanan->id_pelayanan) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_pelayanan_del' vid_pelayanan=" . $pelayanan->id_pelayanan . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Pelayanan';
        $data['subtitle'] = 'Tambah Pelayanan';

        $data['content_overview'] = $this->load->view('pelayanan/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Pelayanan';
        $data['subtitle'] = 'Ubah Pelayanan';
        $data["pelayanan"] = $this->MPelayanan->getById($id);

        $data['content_overview'] = $this->load->view('pelayanan/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'nama_pelayanan' => $this->input->post('nama_pelayanan'),
            'status' => '1',
            'bph' => $this->input->post('bph'),
            'tenaga_kesehatan' => $this->input->post('tenaga_kesehatan'),
            'alat' => $this->input->post('alat'),
            'sarana' => $this->input->post('sarana'),
            'harga' => $this->input->post('harga')
        );

        $this->db->insert("dm_pelayanan", $data);
        return ('Pelayanan');
    }

    function updateSave()
    {
        $data = array(
            'nama_pelayanan' => $this->input->post('nama_pelayanan'),
            'status' => '1',
            'bph' => $this->input->post('bph'),
            'tenaga_kesehatan' => $this->input->post('tenaga_kesehatan'),
            'alat' => $this->input->post('alat'),
            'sarana' => $this->input->post('sarana'),
            'harga' => $this->input->post('harga')
        );

        $this->db->where('id_pelayanan', $this->input->post('id_pelayanan'));
        $this->db->update("dm_pelayanan", $data);
    }

    public function delete()
    {
        $data = array(
            'status' => '0',
        );

        $this->db->where('id_pelayanan', $this->input->post('id_pelayanan'));
        $this->db->update("dm_pelayanan", $data);
    }
}
